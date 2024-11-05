@extends('components.app')

@section('title', 'Solicitações')

@section('content')
<div class="container">
    <h2>Lista de Solicitações</h2>

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
        <a href="{{ route('admin.solicitacoes.create') }}" class="btn btn-primary">Adicionar Solicitação</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Solicitante</th>
                <th>Livro Solicitado</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solicitacoes as $solicitacao)
                <tr>
                    <td>{{ $solicitacao->id }}</td>
                    <td>{{ $solicitacao->nome_solicitante }}</td>
                    <td>{{ $solicitacao->livro->titulo }}</td>
                    <td>{{ $solicitacao->status }}</td>
                    <td>
                        <a href="{{ route('admin.solicitacoes.edit', $solicitacao->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('admin.solicitacoes.destroy', $solicitacao->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta solicitação?');">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $solicitacoes->links() }} <!-- Para paginar as solicitações -->
</div>
@endsection
