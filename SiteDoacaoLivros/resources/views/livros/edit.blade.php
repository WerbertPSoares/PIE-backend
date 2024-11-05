@extends('components.app')

@section('title', 'Lista de Livros')

@section('content')

<body>
    <div class="container">
        <h1>Editar Livro: {{ $livro->titulo }}</h1>

        <form action="{{ route('livros.update', $livro->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $livro->titulo }}" required>
            </div>

            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" class="form-control" value="{{ $livro->autor }}" required>
            </div>

            <div class="form-group">
                <label for="genero">Gênero</label>
                <input type="text" name="genero" id="genero" class="form-control" value="{{ $livro->genero }}">
            </div>

            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" id="isbn" class="form-control" value="{{ $livro->isbn }}">
            </div>

            <div class="form-group">
                <label for="editora">Editora</label>
                <input type="text" name="editora" id="editora" class="form-control" value="{{ $livro->editora }}">
            </div>

            <div class="form-group">
                <label for="ano">Ano</label>
                <input type="number" name="ano" id="ano" class="form-control" value="{{ $livro->ano }}">
            </div>

            <div class="form-group">
                <label for="paginas">Número de Páginas</label>
                <input type="number" name="paginas" id="paginas" class="form-control" value="{{ $livro->paginas }}">
            </div>

            <div class="form-group">
                <label for="sinopse">Sinopse</label>
                <textarea name="sinopse" id="sinopse" class="form-control">{{ $livro->sinopse }}</textarea>
            </div>

            <div class="form-group">
                <label for="capa">Capa do Livro</label>
                <input type="file" name="capa" id="capa" class="form-control">
                @if ($livro->capa)
                    <p>Capa atual: <img src="{{ $livro->capa }}" alt="Capa Atual" style="max-width: 100px;"></p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Livro</button>
            <a href="{{ route('livros.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link para seu JS -->
</body>

@endsection