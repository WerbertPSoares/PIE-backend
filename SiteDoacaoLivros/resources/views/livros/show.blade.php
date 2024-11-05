@extends('components.app')

@section('title', 'Lista de Livros')

@section('content')

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $livro->titulo }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link para seu CSS -->
</head>
<body>
    <!-- BARRA DE PESQUISA -->

  <div class="container">
    <div class="row">
      <form class="d-flex mt-5">
        <input style="border-radius: 30px;" type="search" class="form-control me-2" placeholder="Pesquisar" aria-label="Pesquisar" oninput="filterBooks()">
      </form>
    </div>
  </div>

  <!-- LISTA DE GENEROS -->

  <div class="container">
    <div class="row">
      <div class="d-flex justify-content-center mt-5">
        <div class="row d-flex justify-content-center" style="list-style: none; gap: 50px;">
          <div class="col-auto">
            <img src="img/romance.jpg" alt="" style="width:150PX; border-radius:50%;">
            <p class="text-center">Romance</p>
          </div>
          <div class="col-auto">
            <img src="img/autoajuda.jpg" alt="" style="width:150PX; border-radius:50%;">
            <p class="text-center">Autoajuda</p>
          </div>
          <div class="col-auto">
            <img src="img/ficção.jpg" alt="" style="width:150PX; border-radius:50%;">
            <p class="text-center">Ficção cientifica</p>
          </div>
          <div class="col-auto">
            <img src="img/terror.jpg" alt="" style="width:150PX; border-radius:80%;">
            <p class="text-center">Terror</p>
          </div>
          <div class="col-auto">
            <img src="img/hqs.jpg" alt="" style="width:150PX; border-radius:50%;">
            <p class="text-center">Quadrinhos</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="container">
        <h1>{{ $livro->titulo }}</h1>
        
        <div class="card">
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
                    <img src="{{ $livro->capa }}" alt="Capa do Livro" class="img-fluid" style="max-width: 200px;">
                @else
                    <p><strong>Capa:</strong> Não disponível</p>
                @endif
            </div>
        </div>

        <a href="{{ route('livros.index') }}" class="btn btn-secondary mt-3">Voltar para a Lista de Livros</a>
        <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-warning mt-3">Editar Livro</a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link para seu JS -->
</body>
</html>

@endsection