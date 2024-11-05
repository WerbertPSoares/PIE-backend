@extends('components.app')

@section('title', 'Doações')

@section('content')
<div class="container">
    <h2>Lista de Doações</h2>

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
        <a href="{{ route('admin.doacoes.create') }}" class="btn btn-primary">Adicionar Doação</a>
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
            @foreach ($doacoes as $doacao)
                <tr>
                    <td>{{ $doacao->id }}</td>
                    <td>{{ $doacao->nome }}</td>
                    <td>{{ $doacao->autor }}</td>
                    <td>{{ $doacao->telefone }}</td>
                    <td>{{ $doacao->estado }}</td>
                    <td>{{ $doacao->sinopse }}</td>
                    <td>
                        @if ($doacao->imagem)
                            <img src="{{ asset('storage/' . $doacao->imagem) }}" alt="Imagem do livro" style="width: 100px; height: auto;">
                        @else
                            <span>Nenhuma imagem</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.doacoes.edit', $doacao->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('admin.doacoes.destroy', $doacao->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta doação?');">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $doacoes->links() }} <!-- Para paginar as doações -->
</div>
@endsection
