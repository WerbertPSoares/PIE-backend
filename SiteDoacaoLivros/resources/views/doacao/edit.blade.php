@extends('components.app')

@section('title', 'Editar Doação')

@section('content')
<div class="container" style="margin-top: 80px;">
    <h2>Editar Doação</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('doacao.update', $doacao->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $doacao->titulo }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" value="{{ $doacao->autor }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" class="form-control" value="{{ $doacao->telefone }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control" value="{{ $doacao->estado }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="sinopse">Sinopse</label>
            <textarea name="sinopse" id="sinopse" class="form-control" rows="3" required>{{ $doacao->sinopse }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="imagem">Imagem do Livro</label>
            <input type="file" name="imagem" id="imagem" class="form-control" accept="image/*">
            <small class="form-text text-muted">Deixe em branco se não quiser alterar a imagem.</small>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Atualizar Doação</button>
    </form>
</div>
@endsection
