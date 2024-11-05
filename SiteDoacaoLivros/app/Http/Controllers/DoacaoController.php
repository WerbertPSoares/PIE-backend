<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    public function index()
    {
        $doacoes = Doacao::all();
        return view('doacao.index', compact('doacoes'));
    }

    public function create()
    {
        return view('doacao.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'livro_id' => 'required|exists:livros,id',
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        $doacao = new Doacao();
        $doacao->livro_id = $request->livro_id;
        $doacao->usuario_id = $request->usuario_id;

        $doacao->save();

        return redirect()->route('doacao.index')->with('success', 'Doação registrada com sucesso!');
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
