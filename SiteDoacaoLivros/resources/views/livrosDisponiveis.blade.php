@extends('components.app')

@section('title', 'Livros Disponíveis')

@section('content')
<body>
    <div class="container my-5 pt-5"> <!-- Padding Top adicionado -->
    <div class="col-auto">
    
  </div>
  <hr class="mt-5" style="margin-bottom: 64px;">

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
        <h1 class="text-center mb-4">Livros Disponíveis para Doação</h1>

        <div class="row">

            @foreach($livros as $livro)

                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-primary">
                        <img src="{{ asset($livro->capa) }}" class="card-img-top" alt="{{ $livro->titulo }}" style="height: 300px; object-fit: cover;">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $livro->titulo }}</h5>
                            <p class="card-text">Autor: {{ $livro->autor }}</p>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#livroModal{{ $livro->id }}">
                                Ver Detalhes
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="livroModal{{ $livro->id }}" tabindex="-1" aria-labelledby="livroModalLabel{{ $livro->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="livroModalLabel{{ $livro->id }}">{{ $livro->titulo }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <img src="{{ asset($livro->capa) }}" class="img-fluid" alt="{{ $livro->titulo }}">
                                
                                <h6>Autor: {{ $livro->autor }}</h6>
                                <p><strong>Gênero:</strong> {{ $livro->genero }}</p>
                                <p><strong>ISBN:</strong> {{ $livro->isbn }}</p>
                                <p><strong>Editora:</strong> {{ $livro->editora }}</p>
                                <p><strong>Ano:</strong> {{ $livro->ano }}</p>
                                <p><strong>Páginas:</strong> {{ $livro->paginas }}</p>
                                <p><strong>Sinopse:</strong> {{ $livro->sinopse }}</p>
                            </div>

                            <div class="modal-footer">
                            <a href="{{ route('login.form') }}">
    <button class="btn btn-primary btn-lg px-5 py-3 rounded-3 shadow-lg border-0 fazerParte" 
            data-bs-toggle="modal" 
            data-bs-target="#exampleModal" 
            type="button">
Solicitar Doação    </button>
</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link para seu JS -->
</body>
@endsection

