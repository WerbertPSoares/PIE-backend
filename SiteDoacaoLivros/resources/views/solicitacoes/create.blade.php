@extends('components.app')

@section('title', 'Criar Solicitação')

@section('content')
<div class="container mt-5">
    <h2>Criar Solicitação de Livro</h2>
    
    <!-- Mensagem de Sucesso -->
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mensagem de Erro -->
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('solicitacao.store') }}">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título do Livro</label>
            <input type="text" class="form-control" name="titulo" id="titulo" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor do Livro</label>
            <input type="text" class="form-control" name="autor" id="autor" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
        
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection