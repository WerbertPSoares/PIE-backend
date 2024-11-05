@extends('components.app')

@section('title', 'Criar Doação')

@section('content')
<div class="container" style="margin-top: 80px;">
    <h2>Criar Doação</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="{{ route('doacao.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="nome">Título</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="sinopse">Sinopse</label>
            <textarea name="sinopse" id="sinopse" class="form-control" rows="3" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="imagem">Imagem do Livro</label>
            <input type="file" name="imagem" id="imagem" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Concluir Doação</button>
    </form>

    <hr class="my-4">

    <div class="mt-5">
        <h4>Instruções</h4>
        <p>Preencha todos os campos obrigatórios e clique em "Concluir Doação". Caso tenha alguma dúvida, entre em contato com o suporte.</p>
    </div>
</div>
@endsection

