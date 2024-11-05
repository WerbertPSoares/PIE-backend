@extends('components.app')

@section('title', 'Doações')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Lista de Doações</h2>

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
        <a href="{{ route('doacao.create') }}" class="btn btn-primary">Adicionar Doação</a>
    </div>

    <div class="row">
        @foreach ($doacoes as $doacao)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-light">
                    <img src="{{ $doacao->imagem ? asset('storage/' . $doacao->imagem) : asset('images/default-book.png') }}" class="card-img-top" alt="Imagem do livro" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $doacao->nome }}</h5>
                        <p class="card-text"><strong>Autor:</strong> {{ $doacao->autor }}</p>
                        <p class="card-text"><strong>Telefone:</strong> {{ $doacao->telefone }}</p>
                        <p class="card-text"><strong>Estado:</strong> {{ $doacao->estado }}</p>
                        <p class="card-text"><strong>Sinopse:</strong> {{ Str::limit($doacao->sinopse, 100, '...') }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('doacao.edit', $doacao->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>
                        <form action="{{ route('doacao.destroy', $doacao->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta doação?');"><i class="fas fa-trash-alt"></i> Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $doacoes->links() }} <!-- Para paginar as doações -->
</div>
@endsection

