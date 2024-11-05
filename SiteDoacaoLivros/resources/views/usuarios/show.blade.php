@extends('components.app')

@section('title', 'Detalhes do Usuário')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Detalhes do Usuário</h2>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Informações Pessoais</h5>
            <p class="card-text"><strong>Nome:</strong> {{ $usuario->nome }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $usuario->email }}</p>
            <p class="card-text"><strong>Data de Registro:</strong> {{ $usuario->data_registro }}</p>
            
        </div>
    </div>

    <div class="mt-4">
        <h5>Ações</h5>
        <div class="d-flex">
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning me-2">Editar Perfil</a>
            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar seu perfil?');" class="me-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar Perfil</button>
            </form>
            <a href="{{ route('solicitacao.create') }}" class="btn btn-primary me-2">Solicitar Livro</a>
            <a href="{{ route('doacao.create') }}" class="btn btn-success">Doar Livro</a>
        </div>
    </div>

    <!-- Formulário de Logout -->
    <div class="mt-4">
        <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Tem certeza que deseja sair?');">
            @csrf
            <button type="submit" class="btn btn-secondary">Sair</button>
        </form>
    </div>
</div>
@endsection

