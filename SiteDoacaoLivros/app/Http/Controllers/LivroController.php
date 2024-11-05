<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    // Exibir a lista de livros
    public function index()
    {
        $livros = Livro::all(); // Recupera todos os livros do banco de dados
        return view('livros.index', compact('livros')); // Retorna a view com os livros
    }

    // Mostrar o formulário para criar um novo livro
    public function create()
    {
        return view('livros.create'); // Retorna a view para criar um livro
    }

    // Armazenar um novo livro no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'nullable|string|max:255',
            'isbn' => 'nullable|string|max:20',
            'editora' => 'nullable|string|max:255',
            'ano' => 'nullable|integer',
            'sinopse' => 'nullable|string',
            'paginas' => 'nullable|integer',
            'capa' => 'nullable|string|max:255',
        ]);

        // Criação do livro
        Livro::create($request->all());

        return redirect()->route('livros.index')->with('success', 'Livro criado com sucesso!');
    }

    // Mostrar os detalhes de um livro específico
    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro')); // Retorna a view com os detalhes do livro
    }

    // Mostrar o formulário para editar um livro existente
    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro')); // Retorna a view para editar o livro
    }

    // Atualizar um livro no banco de dados
    public function update(Request $request, Livro $livro)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'nullable|string|max:255',
            'isbn' => 'nullable|string|max:20',
            'editora' => 'nullable|string|max:255',
            'ano' => 'nullable|integer',
            'sinopse' => 'nullable|string',
            'paginas' => 'nullable|integer',
            'capa' => 'nullable|string|max:255',
        ]);

        // Atualização do livro
        $livro->update($request->all());

        return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Remover um livro do banco de dados
    public function destroy(Livro $livro)
    {
        $livro->delete(); // Exclui o livro

        return redirect()->route('livros.index')->with('success', 'Livro excluído com sucesso!');
    }
    public function livrosDisponiveis()
{
    $livros = Livro::where('disponivel', true)->get(); // Modifique conforme a lógica da sua aplicação
    return view('livrosDisponiveis', compact('livros'));
}
}


