<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    public function index()
    {
        $solicitacoes = Solicitacao::all();
        return view('solicitacoes.index', compact('solicitacoes'));
    }

    public function create()
    {
        return view('solicitacoes.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            
        ]);

        // Criação de uma nova solicitação
        $solicitacao = new Solicitacao();
        $solicitacao->titulo = $request->titulo;
        $solicitacao->autor = $request->autor;
        

        // Salve a solicitação no banco de dados
        $solicitacao->save();


        return redirect()->route('solicitacao.create')->with('success', 'Solicitação criada com sucesso!');
    }

    public function show($id)
    {
        $solicitacao = Solicitacao::findOrFail($id);
        return view('solicitacoes.show', compact('solicitacao'));
    }

    public function edit($id)
    {
        $solicitacao = Solicitacao::findOrFail($id);
        return view('solicitacoes.edit', compact('solicitacao'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'livro_id' => 'required|exists:livros,id',
        ]);

        $solicitacao = Solicitacao::findOrFail($id);
        $solicitacao->update($request->all());
        return redirect()->route('solicitacoes.index')->with('success', 'Solicitação atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $solicitacao = Solicitacao::findOrFail($id);
        $solicitacao->delete();
        return redirect()->route('solicitacoes.index')->with('success', 'Solicitação excluída com sucesso!');
    }
}
