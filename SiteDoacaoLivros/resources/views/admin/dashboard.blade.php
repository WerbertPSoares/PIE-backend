<!-- resources/views/admin/dashboard.blade.php -->
@extends('components.app')

@section('title', 'Painel de Administração')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Painel de Administração</h2>
    <p class="text-center mb-5">Bem-vindo, Administrador!</p>

    <h3 class="mb-3">Gerenciar:</h3>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    <p class="card-text">Gerencie os usuários do sistema.</p>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Ir para Usuários</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Livros</h5>
                    <p class="card-text">Gerencie os livros disponíveis.</p>
                    <a href="{{ route('livros.index') }}" class="btn btn-primary">Ir para Livros</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Doações</h5>
                    <p class="card-text">Gerencie as doações recebidas.</p>
                    <a href="{{ route('doacao.index') }}" class="btn btn-primary">Ir para Doações</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Solicitações</h5>
                    <p class="card-text">Gerencie as solicitações de livros.</p>
                    <a href="{{ route('solicitacao.index') }}" class="btn btn-primary">Ir para Solicitações</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

