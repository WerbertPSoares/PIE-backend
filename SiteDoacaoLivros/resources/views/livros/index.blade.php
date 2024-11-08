@extends('components.app')

@section('title', 'Lista de Livros')

@section('content')
<body>
    <div class="container mt-5">
        <h1 class="mb-4" style="font-size: 2.5rem; color: #4A90E2;">Lista de Livros</h1>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('livros.create') }}" class="btn btn-primary mb-4" style="background-color: #4A90E2; color: #fff; border-radius: 30px;">
            Adicionar Novo Livro
        </a>
        

        <!-- Barra de Pesquisa -->
        <div class="container">
            <div class="row">
                <form class="d-flex mt-5 search-bar" oninput="filterBooks()">
                    <input type="search" class="form-control me-2" placeholder="Pesquisar" aria-label="Pesquisar">
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

        <!-- Tabela de Livros -->
        @if(count($livros) > 0)
            <table class="table table-bordered table-hover shadow-lg rounded mt-4">
                <thead class="bg-light" style="background-color: #A4D65E;">
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Título</th>
                        <th scope="col" class="text-center">Autor</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($livros as $livro)
                        <tr>
                            <td class="text-center">{{ $livro->id }}</td>
                            <td>{{ $livro->titulo }}</td>
                            <td>{{ $livro->autor }}</td>
                            <td class="text-center">
                                <a href="{{ route('livros.show', $livro) }}" class="btn btn-info btn-sm" style="border-radius: 25px; background-color: #4A90E2; color: white;">Ver</a>
                                <a href="{{ route('livros.edit', $livro) }}" class="btn btn-warning btn-sm" style="border-radius: 25px; background-color: #FDD835; color: white;">Editar</a>
                                <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 25px;" onclick="return confirm('Tem certeza que deseja excluir este livro?');">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Livro não encontrado.</p>
        @endif
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link para seu JS -->
</body>
@endsection
