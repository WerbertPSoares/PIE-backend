<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Método para mostrar o formulário de cadastro do administrador
    public function showRegistrationForm()
    {
        return view('admin.register'); 
    }

    // Método para processar o cadastro do administrador
    public function register(Request $request)
    {
        // Validação dos dados do formulário
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email', // Valida se o e-mail é único
            'password' => 'required|string|min:8|confirmed', // Confirmação de senha
        ], [
            'email.unique' => 'O e-mail fornecido já está cadastrado. Tente usar um e-mail diferente.' // Mensagem personalizada para o erro de e-mail duplicado
        ]);

        if ($validator->fails()) {
            return redirect()->back() // Redireciona de volta para o formulário com os erros
                             ->withErrors($validator)
                             ->withInput();
        }

        // Criação do novo usuário
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Armazena a senha de forma segura
        ]);

        return redirect()->route('admin.login')->with('success', 'Cadastro realizado com sucesso. Você pode fazer login agora.');
    }

    public function showLoginForm()
    {
        return view('admin.login'); 
    }

    // Método para processar o login do administrador
    public function login(Request $request)
    {
        // Validação das credenciais fornecidas
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Tenta encontrar o usuário pelo email
        $usuario = User::where('email', $request->email)->first();
    
        // Verifica se o usuário foi encontrado
        if ($usuario && Hash::check($request->password, $usuario->password)) {
            // Se a senha for válida, faz o login do usuário
            Auth::login($usuario, $request->has('remember'));
    
            // Redireciona para a dashboard do administrador com uma mensagem de sucesso
            return redirect()->route('admin.dashboard')->with('success', 'Bem-vindo, ' . Auth::user()->name);
        }
    
        // Se a autenticação falhar, retorna à página de login com um erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    public function dashboard(Request $request)
    {
        return view('admin.dashboard'); 
    }
}

