@extends('components.app')

@section('title', 'Detalhes do Livro')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">{{ $livro->titulo }}</h1>

        @if ($livro)
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Autor: {{ $livro->autor }}</h5>
                    <p><strong>Gênero:</strong> {{ $livro->genero ?? 'Não informado' }}</p>
                    <p><strong>ISBN:</strong> {{ $livro->isbn ?? 'Não informado' }}</p>
                    <p><strong>Editora:</strong> {{ $livro->editora ?? 'Não informado' }}</p>
                    <p><strong>Ano:</strong> {{ $livro->ano ?? 'Não informado' }}</p>
                    <p><strong>Número de Páginas:</strong> {{ $livro->paginas ?? 'Não informado' }}</p>
                    <p><strong>Sinopse:</strong> {{ $livro->sinopse ?? 'Não informada' }}</p>

                   @if ($livro->capa)
    <p><strong>Capa:</strong></p>
    <img src="$livro->capa" alt="">
    <img src="{{ asset($livro->capa) }}" alt="Capa do Livro" class="img-fluid rounded" style="max-width: 200px; height: auto;">

@else
    <p><strong>Capa:</strong> Não disponível</p>
@endif
                </div>
            </div>
        @else
            <p>Livro não encontrado.</p>
        @endif

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="{{ route('livros.index') }}" class="btn btn-secondary btn-custom">Voltar para a Lista de Livros</a>
            <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-warning btn-custom">Editar Livro</a>
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
