@extends('components.app')

@section('title', 'Criar Solicitação')

@section('content')
<head>
    <style>
        /* No seu arquivo de CSS */
.title-spacing {
    padding-top: 80px; /* Ajuste a altura conforme necessário */
}

    </style>
</head>
<div class="container mt-5">
    <h2 class="mb-4 text-center pt-5" style="padding-top: 80px;">Criar Solicitação de Livro</h2> <!-- Ajuste feito aqui -->

    <!-- Mensagens de Sucesso e Erro -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Card para o formulário -->
    <div class="card shadow-lg p-4">
        <div class="card-body">
            <form method="POST" action="{{ route('solicitacao.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="titulo" class="form-label">Título do Livro</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Digite o título do livro" required>
                </div>

                <div class="mb-4">
                    <label for="autor" class="form-label">Autor do Livro</label>
                    <input type="text" class="form-control" name="autor" id="autor" placeholder="Digite o nome do autor" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary w-48">Enviar Solicitação</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary w-48 text-center">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
