@extends('components.app')

@section('title', 'Livros Disponíveis')

@section('content')
<body>
    <div class="container my-5 pt-5"> <!-- Padding Top adicionado -->
    <div class="col-auto">
    <div class="fixed-top" style="background-color: #EEF0F2;">
      <div class="d-none d-sm-block">
        <div class="d-flex justify-content-center" style="background-color: #0e0e52; color: #ffff;">
          <img src="img/icons8-literature-50.png" class="mt-1 mb-1" style="width: 20px; height: 20px;" alt="">
          <p class="px-3 h6 mt-1 mb-1">Transforme páginas em pontes: doe um livro, mude um destino!</p>
        </div>
      </div>
      <div class="container">
        <nav class="navbar  navbar-expand-sm">
          <a href="index.php" class="navbar-brand d-flex">
            <img src="img/Brown and Beige Modern Bookstore Logo (1).png" style="width: 120px;" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
            <span class=""><img src="img/icons8-menu-48.png" style="width: 38px;" alt=""></span>
          </button>
          <div class="collapse navbar-collapse" id="menuNavbar">
            <div class="navbar-nav ms-auto">
              <a href="index.php" class="nav-link">Home</a>
              <a href="livros.php" class="nav-link active">Livros</a>
              <a href="sobreNos.php" class="nav-link">Sobre Nós</a>
              <a href="contato.php" class="nav-link" style="margin-right: 10px;">Contatos</a>
              <a class="register d-flex align-items-center px-3 text-center text-decoration-none text-light" href="login.php">Entrar</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
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
                        <img src="{{ asset('storage/' . $livro->capa) }}" class="card-img-top" alt="{{ $livro->titulo }}" style="height: 300px; object-fit: cover;">
                        
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
                                <img src="{{ asset('storage/' . $livro->capa) }}" class="img-fluid" alt="{{ $livro->titulo }}">
                                
                                <h6>Autor: {{ $livro->autor }}</h6>
                                <p><strong>Gênero:</strong> {{ $livro->genero }}</p>
                                <p><strong>ISBN:</strong> {{ $livro->isbn }}</p>
                                <p><strong>Editora:</strong> {{ $livro->editora }}</p>
                                <p><strong>Ano:</strong> {{ $livro->ano }}</p>
                                <p><strong>Páginas:</strong> {{ $livro->paginas }}</p>
                                <p><strong>Sinopse:</strong> {{ $livro->sinopse }}</p>
                            </div>

                            <div class="modal-footer">
                                @if(Auth::check())
                                    <form action="{{ route('solicitacao.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="livro_id" value="{{ $livro->id }}">
                                        <button type="submit" class="btn btn-success">Solicitar Doação</button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-warning">Solicitar Doação</a>
                                @endif
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

