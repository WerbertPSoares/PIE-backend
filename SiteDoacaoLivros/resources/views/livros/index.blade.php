@extends('components.app')

@section('title', 'Lista de Livros')

@section('content')
<body>
    <div class="container mt-5"> <!-- Adicionando uma margem superior aqui -->
        <h1>Lista de Livros</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('livros.create') }}" class="btn btn-primary mb-3">Adicionar Novo Livro</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->autor }}</td>
                        <td>
                            <a href="{{ route('livros.show', $livro) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('livros.edit', $livro) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este livro?');">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link para seu JS -->
</body>
@endsection
