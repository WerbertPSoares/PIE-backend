@extends('components.app')

@section('title', 'Criar Novo Livro')

@section('content')
<body>
    <div class="container mt-5">
        <h1>Criar Novo Livro</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('livros.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="genero">Gênero:</label>
                <input type="text" name="genero" id="genero" class="form-control" placeholder="Opcional">
            </div>

            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" id="isbn" class="form-control" placeholder="Opcional">
            </div>

            <div class="form-group">
                <label for="editora">Editora:</label>
                <input type="text" name="editora" id="editora" class="form-control" placeholder="Opcional">
            </div>

            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" name="ano" id="ano" class="form-control" placeholder="Opcional">
            </div>

            <div class="form-group">
                <label for="paginas">Número de Páginas:</label>
                <input type="number" name="paginas" id="paginas" class="form-control" placeholder="Opcional">
            </div>

            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <textarea name="sinopse" id="sinopse" class="form-control" rows="4" placeholder="Opcional"></textarea>
            </div>

            <div class="form-group">
                <label for="capa">Capa (URL da imagem):</label>
                <input type="text" name="capa" id="capa" class="form-control" placeholder="Opcional">
            </div>

            <button type="submit" class="btn btn-primary">Salvar Livro</button>
            <a href="{{ route('livros.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
