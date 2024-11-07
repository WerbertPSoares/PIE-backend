<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Log; 
use App\Models\Usuario;

class LoginController extends Controller
{
    public function login(Request $request)
{
    // Valida os campos de entrada
    $request->validate([
        'email' => 'required|email',
        'senha' => 'required',
    ]);

    // Tenta encontrar o usuário pelo email
    $usuario = Usuario::where('email', $request->email)->first();

    // Verifica se o usuário foi encontrado
    if ($usuario) {
        // Verifica se a senha fornecida corresponde à senha armazenada
        if (Hash::check($request->senha, $usuario->senha)) {
            // Autenticação bem-sucedida
            Auth::login($usuario);
            return redirect()->route('usuarios.show', $usuario->id); // Passa o ID do usuário para a rota
        } else {
            Log::warning('Senha incorreta para o usuário: ' . $request->email);
        }
    } else {
        Log::warning('Usuário não encontrado: ' . $request->email);
    }

    // Se a autenticação falhar, retorna à página de login com um erro
    return back()->withErrors([
        'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
    ]);
}
    public function showLoginForm()
{
    return view('auth.login'); 
}
public function logout()
{
    // Realiza o logout do usuário
    Auth::logout();

    // Redireciona para a página inicial
    return redirect('/');
}}