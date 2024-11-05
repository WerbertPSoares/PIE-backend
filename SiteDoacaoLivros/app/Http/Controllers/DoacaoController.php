<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    public function index()
{
    // Altere de `all()` para `paginate()`
    $doacoes = Doacao::paginate(10); // 10 é o número de registros por página
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
            'telefone' => 'required|string|max:20', // Ajuste conforme necessário
            'estado' => 'required|string|max:100',  // Ajuste conforme necessário
            'sinopse' => 'required|string',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Máximo de 2MB
        ]);

        // Armazenar a imagem se houver
        $imagemPath = null;
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens', 'public');
        }
        // Log para depuração
    \Log::info('Dados recebidos:', $request->all());

    // Validação dos dados
    $request->validate([
        'nome' => 'required|string|max:255',
        // Outros campos...
    ]);

        // Criar a nova doação
        Doacao::create([
            'nome' => $request->nome,
            'autor' => $request->autor,
            'telefone' => $request->telefone,
            'estado' => $request->estado,
            'sinopse' => $request->sinopse,
            'imagem' => $imagemPath,
        ]);

        return redirect()->route('doacao.index')->with('success', 'Doação criada com sucesso.');
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
            'livro_id' => 'required|exists:livros,id',
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        $doacao = Doacao::findOrFail($id);
        $doacao->update($request->all());

        return redirect()->route('doacao.index')->with('success', 'Doação atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $doacao = Doacao::findOrFail($id);
        $doacao->delete();

        return redirect()->route('doacao.index')->with('success', 'Doação excluída com sucesso!');
    }
}
