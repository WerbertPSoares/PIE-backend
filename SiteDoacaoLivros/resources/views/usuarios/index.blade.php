@extends('components.app')

@section('title', 'Lista de Usuários')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Lista de Usuários</h2>
    
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Usuários Registrados</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->nome }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <a href="{{ route('usuarios.show', ['id' => $usuario->id]) }}" class="btn btn-info btn-sm">Ver Detalhes</a>
                                <a href="{{ route('usuarios.edit', ['id' => $usuario->id]) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('usuarios.destroy', ['id' => $usuario->id]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
