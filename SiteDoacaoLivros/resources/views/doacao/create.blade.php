@extends('components.app')

@section('title', 'Criar Doação')

@section('content')
<div class="container">
    <h2>Criar Doação</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('doacao.store') }}">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary mt-3">Concluir Doação</button>
    </form>
</div>
@endsection
