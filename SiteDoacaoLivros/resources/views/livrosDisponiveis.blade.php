@extends('components.app')

@section('title', 'Livros Disponíveis')

@section('content')
<head>
<style>
    .genre-text {
        font-size: 1.1em;          /* Tamanho ligeiramente maior */
        font-weight: 500;          /* Peso da fonte */
        color: #333;               /* Cor do texto */
        font-family: 'Roboto', sans-serif; /* Fonte personalizada */
        margin-top: 10px;          /* Espaçamento entre imagem e texto */
    }
    .genre-text:hover {
        color: #4A90E2;            /* Efeito hover com a cor primária */
        transition: color 0.3s;    /* Suavização do efeito */
    }
</style>

</head>
<body>
    
        <h1 class="text-center mb-4">Livros Disponíveis para Doação</h1>


 <!-- Barra de Pesquisa -->
<div class="container">
    <div class="row">
        <form class="d-flex mt-5">
            <input id="searchInput" style="border-radius: 30px;" type="search" class="form-control me-2" placeholder="Pesquisar" aria-label="Pesquisar" oninput="filterBooks()">
        </form>
    </div>
</div>

 <!-- LISTA DE GÊNEROS -->
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <!-- Flex container para centralizar os itens -->
        <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
            <!-- Cada item de gênero -->
            <div class="text-center">
                <img src="{{ asset('images/romance.jpg') }}" alt="Romance" style="width:150px; border-radius:50%;">
                <p class="genre-text">Romance</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/autoajuda.jpg') }}" alt="Autoajuda" style="width:150px; border-radius:50%;">
                <p class="genre-text">Autoajuda</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/ficção.jpeg') }}" alt="Ficção Científica" style="width:150px; border-radius:50%;">
                <p class="genre-text">Ficção Científica</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/terror.jpg') }}" alt="Terror" style="width:150px; border-radius:50%;">
                <p class="genre-text">Terror</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/hqs.jpg') }}" alt="Quadrinhos" style="width:150px; border-radius:50%;">
                <p class="genre-text">Quadrinhos</p>
            </div>
        </div>
    </div>
</div>

    
  </div>
  <hr class="mt-5" style="margin-bottom: 64px;">


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

   <!-- JavaScript para Filtrar Livros -->
<script>
    function filterBooks() {
        const searchInput = document.getElementById('searchInput').value.toLowerCase();
        const books = document.querySelectorAll('.book-item');

        books.forEach((book) => {
            const title = book.getAttribute('data-title').toLowerCase();
            const author = book.getAttribute('data-author').toLowerCase();
            if (title.includes(searchInput) || author.includes(searchInput)) {
                book.style.display = 'block';
            } else {
                book.style.display = 'none';
            }
        });
    }
</script>
</body>
@endsection

