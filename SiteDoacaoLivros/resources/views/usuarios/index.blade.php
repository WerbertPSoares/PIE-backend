@extends('components.app')

@section('title', 'Lista de Usuários')

@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<div class="container mt-5">
    <h2 class="text-center" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #4A90E2;">Lista de Usuários</h2>

    <div class="card shadow-sm mt-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0 text-center">Usuários Registrados</h5>
        </div>
        <div class="card-body">
            @if($usuarios->isEmpty())
                <div class="alert alert-info text-center">
                    <p>Não há usuários cadastrados.</p>
                </div>
            @else
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person-circle me-2 text-primary" style="font-size: 1.3em;"></i>
                                        {{ $usuario->nome }}
                                    </div>
                                </td>
                                <td>{{ $usuario->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('usuarios.show', ['id' => $usuario->id]) }}" class="btn btn-outline-info btn-sm me-1">
                                        <i class="bi bi-eye"></i> Ver
                                    </a>
                                    <a href="{{ route('usuarios.edit', ['id' => $usuario->id]) }}" class="btn btn-outline-warning btn-sm me-1">
                                        <i class="bi bi-pencil"></i> Editar
                                    </a>
                                    <form action="{{ route('usuarios.destroy', ['id' => $usuario->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">
                                            <i class="bi bi-trash"></i> Deletar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
