<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LivroController extends Controller
{
    // Exibir a lista de livros
    public function index()
    {
        $livros = Livro::all(); // Recupera todos os livros do banco de dados
    
        // Retorna a view 'livros.index' e passa os dados para a view
        return view('livros.index', compact('livros'));
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
        'capa' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validação para imagem
    ]);

    // Processamento da imagem, se houver
    $capaPath = null; // Iniciar variável com valor nulo
    if ($request->hasFile('capa')) {
        $capaPath = $request->file('capa')->store('livros', 'public'); // Salva apenas o caminho relativo
    }

    // Criação do livro
    Livro::create([
        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'genero' => $request->genero,
        'isbn' => $request->isbn,
        'editora' => $request->editora,
        'ano' => $request->ano,
        'sinopse' => $request->sinopse,
        'paginas' => $request->paginas,
        'capa' => $capaPath, // Salvar o caminho da imagem (ou null, se não houver imagem)
    ]);

    return redirect()->route('livros.index')->with('success', 'Livro criado com sucesso!');
}

    // Mostrar os detalhes de um livro específico
    public function show($id)
{
    $livro = Livro::find($id);

    if (!$livro) {
        return redirect()->route('livros.index')->with('error', 'Livro não encontrado');
    }

    return view('livros.show', compact('livro'));
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
            'capa' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validação da imagem
        ]);

        // Se a imagem foi enviada
        if ($request->hasFile('capa') && $request->file('capa')->isValid()) {
            // Armazenar a nova imagem e obter o caminho relativo
            $capaPath = $request->file('capa')->store('public/livros');
            // Deletar a capa antiga, caso exista
            if ($livro->capa && Storage::exists('public/' . $livro->capa)) {
                Storage::delete('public/' . $livro->capa);
            }
        }

        // Atualização do livro
        $livro->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'genero' => $request->genero,
            'isbn' => $request->isbn,
            'editora' => $request->editora,
            'ano' => $request->ano,
            'sinopse' => $request->sinopse,
            'paginas' => $request->paginas,
            'capa' => isset($capaPath) ? $capaPath : $livro->capa, // Se nova capa, substituir
        ]);

        return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Remover um livro do banco de dados
    public function destroy(Livro $livro)
    {
        // Deletar a capa associada
        if ($livro->capa && Storage::exists('public/' . $livro->capa)) {
            Storage::delete('public/' . $livro->capa);
        }

        $livro->delete(); // Exclui o livro

        return redirect()->route('livros.index')->with('success', 'Livro excluído com sucesso!');
    }

    // Função para exibir livros disponíveis
    public function livrosDisponiveis()
    {
        $livros = Livro::where('disponivel', true)->get(); // Modifique conforme a lógica da sua aplicação
        return view('livrosDisponiveis', compact('livros'));
    }
}

