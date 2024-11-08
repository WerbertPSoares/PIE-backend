@extends('components.app')

@section('title', 'Painel de Administração')

@section('content')
<div class="container mt-5">
    

    <!-- Conteúdo do Painel de Administração -->
    <h2 class="text-center mb-4">Painel de Administração</h2>
    <p class="text-center mb-5">Bem-vindo, Administrador!</p>

    <h3 class="mb-3">Gerenciar:</h3>
    <div class="row">
        <!-- Usuários -->
        <div class="col-md-6 mb-4">
            <div class="card shadow card-hover">
                <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    <p class="card-text">Gerencie os usuários do sistema.</p>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Ir para Usuários</a>
                </div>
            </div>
        </div>

        <!-- Livros -->
        <div class="col-md-6 mb-4">
            <div class="card shadow card-hover">
                <div class="card-body">
                    <h5 class="card-title">Livros</h5>
                    <p class="card-text">Gerencie os livros disponíveis.</p>
                    <a href="{{ route('livros.index') }}" class="btn btn-primary">Ir para Livros</a>
                </div>
            </div>
        </div>

        <!-- Doações -->
        <div class="col-md-6 mb-4">
            <div class="card shadow card-hover">
                <div class="card-body">
                    <h5 class="card-title">Doações</h5>
                    <p class="card-text">Gerencie as doações recebidas.</p>
                    <a href="{{ route('doacao.index') }}" class="btn btn-primary">Ir para Doações</a>
                </div>
            </div>
        </div>

        <!-- Solicitações -->
        <div class="col-md-6 mb-4">
            <div class="card shadow card-hover">
                <div class="card-body">
                    <h5 class="card-title">Solicitações</h5>
                    <p class="card-text">Gerencie as solicitações de livros.</p>
                    <a href="{{ route('solicitacao.index') }}" class="btn btn-primary">Ir para Solicitações</a>
                </div>
            </div>
        </div>

        <!-- Mensagens -->
        <div class="col-md-6 mb-4">
            <div class="card shadow card-hover">
                <div class="card-body">
                    <h5 class="card-title">Mensagens</h5>
                    <p class="card-text">Veja as mensagens para você.</p>
                    <a href="{{ route('contato.index') }}" class="btn btn-primary">Ir para Mensagens</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Botão de Sair -->
<div class="d-flex justify-content-end">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Sair</button>
        </form>
    </div>

<!-- Adicione estilos para interatividade -->
<style>
    .card-hover:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }
</style>

<!-- Script do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
