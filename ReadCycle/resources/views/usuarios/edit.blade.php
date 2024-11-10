@extends('components.app')

@section('title', 'Editar Usuário')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Editar Usuário</h2>
    
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <div class="card shadow-sm">
            <div class="card-body">
                <!-- Nome do Usuário -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $usuario->nome) }}" required>
                    @error('nome')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email do Usuário -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $usuario->email) }}" required>
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Botões de ação -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Atualizar Usuário</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
