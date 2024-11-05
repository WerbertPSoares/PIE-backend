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

    return redirect()->route('usuarios.show', ['id' => $usuario->id])
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

    $usuario = Usuario::findOrFail($id);
    $usuario->nome = $request->nome;
    $usuario->email = $request->email;
    
    $usuario->save(); 

    return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
}

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso!');
    }

    
}
