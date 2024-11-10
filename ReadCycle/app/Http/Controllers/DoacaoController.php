<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    public function index()
    {
        // Usa paginação para exibir 10 registros por página
        $doacoes = Doacao::paginate(10);
        return view('doacao.index', compact('doacoes'));
    }

    public function create()
    {
        return view('doacao.create');
    }

    public function store(Request $request)
{
    // Validação dos dados
    $request->validate([
        'nome' => 'required|string|max:255',
        'autor' => 'required|string|max:255',
        'telefone' => 'required|string|max:20',
        'estado' => 'required|string|max:100',
        'sinopse' => 'required|string',
        'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Máximo de 2MB
    ]);

    // Armazenar a imagem, se houver
    $imagemPath = null;
    if ($request->hasFile('imagem')) {
        $imagemPath = $request->file('imagem')->store('imagens', 'public');
    }

    // Criar a nova doação e salvar no banco
    $doacao = Doacao::create([
        'nome' => $request->nome,
        'autor' => $request->autor,
        'telefone' => $request->telefone,
        'estado' => $request->estado,
        'sinopse' => $request->sinopse,
        'imagem' => $imagemPath,
    ]);

    // Redirecionar para a página de detalhes da doação recém-criada
    return redirect()->route('doacao.show', $doacao->id)->with('success', 'Doação criada com sucesso.');
}

    public function show($id)
    {
        $doacao = Doacao::findOrFail($id);
        return view('doacao.show', compact('doacao'));
    }

    public function edit($id)
    {
        $doacao = Doacao::findOrFail($id);
        return view('doacao.edit', compact('doacao'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'estado' => 'required|string|max:100',
            'sinopse' => 'required|string',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $doacao = Doacao::findOrFail($id);

        // Atualizar a imagem, se houver uma nova
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $doacao->imagem = $imagemPath;
        }

        $doacao->update([
            'nome' => $request->nome,
            'autor' => $request->autor,
            'telefone' => $request->telefone,
            'estado' => $request->estado,
            'sinopse' => $request->sinopse,
        ]);

        return redirect()->route('doacao.index')->with('success', 'Doação atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $doacao = Doacao::findOrFail($id);
        $doacao->delete();

        return redirect()->route('doacao.index')->with('success', 'Doação excluída com sucesso!');
    }
}
