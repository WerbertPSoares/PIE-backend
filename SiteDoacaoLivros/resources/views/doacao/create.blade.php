@extends('components.app')

@section('title', 'Criar Doação')

@section('content')
<div class="container" style="margin-top: 80px;">
    <h2 class="text-center mb-4">Criar Doação</h2>

    <!-- Mensagem de Sucesso -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Mensagem de Erro -->
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Formulário de Doação -->
    <div class="card shadow-lg p-4" style="border-radius: 10px; background-color: #F5F5F5;">
        <div class="card-body">
            <form method="POST" action="{{ route('doacao.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Título do Livro</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="autor" class="form-label">Autor do Livro</label>
                    <input type="text" name="autor" id="autor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado do Livro</label>
                    <input type="text" name="estado" id="estado" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="sinopse" class="form-label">Sinopse</label>
                    <textarea name="sinopse" id="sinopse" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem do Livro</label>
                    <input type="file" name="imagem" id="imagem" class="form-control" accept="image/*">
                </div>

                <button type="submit" class="btn btn-success w-100">Concluir Doação</button>
            </form>
        </div>
    </div>

    <hr class="my-4">

    <!-- Instruções -->
    <div class="mt-5">
        <h4 class="text-center">Instruções</h4>
        <p class="text-center">Preencha todos os campos obrigatórios e clique em "Concluir Doação". Caso tenha alguma dúvida, entre em contato com o suporte.</p>
    </div>
</div>
@endsection
