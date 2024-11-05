<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\SolicitacaoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

// Rota para a página inicial (Home)
Route::get('/', function () {
    return view('index'); 
})->name('home');
Route::get('/livro', function () {
    return view('livro'); 
})->name('livro');

Route::post('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');
   
// Rota para a página de contatos
Route::get('/contato', function () {
    return view('contato'); 
})->name('contato');

// Rota para a página "Sobre Nós"
Route::get('/sobre-nos', function () {
    return view('sobreNos'); 
})->name('sobreNos');

// Rota para o cadastro de usuários
Route::get('/cadastro', function () {
    return view('cadastro'); 
})->name('cadastro');

// Rota para Livros
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');

// Rotas para Solicitações
Route::get('/solicitacao/create', [SolicitacaoController::class, 'create'])->name('solicitacao.create');
Route::post('/solicitacao', [SolicitacaoController::class, 'store'])->name('solicitacao.store');
Route::get('/solicitacao', [SolicitacaoController::class, 'index'])->name('solicitacao.index');

// Rotas para Doações
Route::get('/doacao/create', [DoacaoController::class, 'create'])->name('doacao.create');
Route::post('/doacao', [DoacaoController::class, 'store'])->name('doacao.store');
Route::get('/doacao', [DoacaoController::class, 'index'])->name('doacao.index');

// Rotas para Usuários
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

// Rota para mostrar o formulário de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');

// Rota para processar o login
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Rota para deslogar
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rota para a página de login do administrador
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Rota para o processamento do login do administrador
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Rota para mostrar o formulário de cadastro do administrador
Route::get('/admin/cadastro', [AdminController::class, 'showRegistrationForm'])->name('admin.register');

// Rota para processar o cadastro do administrador
Route::post('/admin/cadastro', [AdminController::class, 'register'])->name('admin.register.submit');

// Rota para o dashboard do administrador
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

