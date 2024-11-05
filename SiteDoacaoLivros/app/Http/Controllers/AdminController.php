<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Certifique-se de que o modelo do usuário esteja importado
use Illuminate\Support\Facades\Hash; // Para usar o Hash na senha
use Illuminate\Support\Facades\Validator; // Para validação de dados

class AdminController extends Controller
{
    // Método para mostrar o formulário de cadastro do administrador
    public function showRegistrationForm()
    {
        return view('admin.register'); // Certifique-se de ter uma view para o cadastro do administrador
    }

    // Método para processar o cadastro do administrador
    public function register(Request $request)
    {
        // Validação dos dados do formulário
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios', // Altere 'usuarios' se sua tabela for diferente
            'password' => 'required|string|min:8|confirmed', // Use a confirmação de senha
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.dashboard')
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
        return view('admin.login'); // Certifique-se de ter uma view para o login do administrador
    }

    // Método para processar o login do administrador
    public function login(Request $request)
    {
        // Lógica para autenticar o administrador
    }
    public function dashboard()
    {
        // Você pode passar dados para a view aqui, se necessário
        return view('admin.dashboard');
    }

}

