<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all(); 
        return view('usuarios.index', compact('usuarios'));
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function store(Request $request)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:usuarios',
        'senha' => 'required|string|min:8|confirmed', 
    ]);

    $usuario = new Usuario();
    $usuario->nome = $request->nome;
    $usuario->email = $request->email;
    $usuario->senha = Hash::make($request->senha); 
    $usuario->save();

    // Corrigindo a passagem do parâmetro
    return redirect()->route('usuarios.show', ['usuario' => $usuario->id])
        ->with('success', 'Usuário cadastrado com sucesso!');
}


public function show($id)
{
    $usuario = Usuario::findOrFail($id);
    return view('usuarios.show', compact('usuario'));
}

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
{
    // Valida os dados do formulário
    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:usuarios,email,' . $id, 
    ]);

    // Encontra o usuário com base no ID
    $usuario = Usuario::findOrFail($id);
    $usuario->nome = $request->nome;
    $usuario->email = $request->email;
    
    // Salva as alterações no usuário
    $usuario->save(); 

    // Redireciona para a página de detalhes do usuário, passando o ID como parâmetro
    return redirect()->route('usuarios.show', ['usuario' => $usuario->id])
                     ->with('success', 'Usuário atualizado com sucesso!');
}

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso!');
    }

    
}
