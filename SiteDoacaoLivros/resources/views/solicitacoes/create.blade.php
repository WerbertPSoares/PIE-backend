@extends('components.app')

@section('title', 'Criar Solicitação')

@section('content')
<div class="container mt-5">
    <h2>Criar Solicitação de Livro</h2>
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
    </form>
</div>
@endsection
