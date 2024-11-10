@extends('components.app')

@section('title', 'Detalhes do Usuário')

@section('content')
<head>
<style>
    .btn {
        transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .btn:hover {
        transform: scale(1.05);
        background-color: #f5f5f5;
    }
</style>
</head>

<div class="container mt-5">
    <h2 class="mb-4">Detalhes do Usuário</h2>
    
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Informações Pessoais</h5>
            <p class="card-text"><strong>Nome:</strong> {{ $usuario->nome }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $usuario->email }}</p>
            <p class="card-text"><strong>Data de Registro:</strong> {{ $usuario->created_at->format('d/m/Y') }}</p>
        </div>
    </div>

    <div class="mt-4">
        <h5>Ações</h5>
        <div class="d-flex">
            <!-- Editar Perfil -->
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning me-2 d-flex align-items-center">
                <i class="bi bi-pencil me-2"></i>Editar Perfil
            </a>

            <!-- Deletar Perfil -->
            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar seu perfil?');" class="me-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger d-flex align-items-center">
                    <i class="bi bi-trash me-2"></i>Deletar Perfil
                </button>
            </form>

            <!-- Solicitar Livro -->
            <a href="{{ route('solicitacao.create') }}" class="btn btn-primary me-2 d-flex align-items-center">
                <i class="bi bi-bookmark-plus me-2"></i>Solicitar Livro
            </a>

            <!-- Doar Livro -->
            <a href="{{ route('doacao.create') }}" class="btn btn-success d-flex align-items-center">
                <i class="bi bi-gift me-2"></i>Doar Livro
            </a>
        </div>
    </div>

    <!-- Formulário de Logout -->
    <div class="mt-4">
        <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Tem certeza que deseja sair?');">
            @csrf
            <button type="submit" class="btn btn-secondary d-flex align-items-center">
                <i class="bi bi-box-arrow-right me-2"></i>Sair
            </button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
    <!-- Ícones do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
@endsection

