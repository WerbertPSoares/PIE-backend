@extends('components.app')

@section('title', 'Lista de Livros')

@section('content')
<div class="container">
    <h2>Lista de Livros</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('admin.livros.create') }}" class="btn btn-primary">Adicionar Livro</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Autor</th>
                <th>Telefone</th>
                <th>Estado</th>
                <th>Sinopse</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <td>{{ $livro->id }}</td>
                    <td>{{ $livro->nome }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->telefone }}</td>
                    <td>{{ $livro->estado }}</td>
                    <td>{{ $livro->sinopse }}</td>
                    <td>
                        @if ($livro->imagem)
                            <img src="{{ asset('storage/' . $livro->imagem) }}" alt="Imagem do livro" style="width: 100px; height: auto;">
                        @else
                            <span>Nenhuma imagem</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.livros.edit', $livro->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('admin.livros.destroy', $livro->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este livro?');">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $livros->links() }} <!-- Para paginar os livros -->
</div>
@endsection
