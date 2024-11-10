@extends('components.app')

@section('title', 'Detalhes da Doação')

@section('content')
<div class="container" style="margin-top: 80px;">
    <div class="card" style="background-color: #F5F5F5; border: none;">
        <div class="card-header" style="background-color: #4A90E2; color: white;">
            <h2 class="text-center mb-0">Detalhes da Doação</h2>
        </div>
        
        <div class="card-body p-4">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="mb-4">
                <h5 class="text-primary" style="color: #4A90E2;"><strong>Título:</strong></h5>
                <p style="color: #4F4F4F;">{{ $doacao->nome }}</p>
            </div>
            
            <div class="mb-4">
                <h5 class="text-primary" style="color: #4A90E2;"><strong>Autor:</strong></h5>
                <p style="color: #4F4F4F;">{{ $doacao->autor }}</p>
            </div>

            <div class="mb-4">
                <h5 class="text-primary" style="color: #4A90E2;"><strong>Telefone:</strong></h5>
                <p style="color: #4F4F4F;">{{ $doacao->telefone }}</p>
            </div>

            <div class="mb-4">
                <h5 class="text-primary" style="color: #4A90E2;"><strong>Estado:</strong></h5>
                <p style="color: #4F4F4F;">{{ $doacao->estado }}</p>
            </div>

            <div class="mb-4">
                <h5 class="text-primary" style="color: #4A90E2;"><strong>Sinopse:</strong></h5>
                <p style="color: #4F4F4F;">{{ $doacao->sinopse }}</p>
            </div>

            @if($doacao->imagem)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $doacao->imagem) }}" alt="Imagem do Livro" class="img-fluid rounded" style="max-width: 300px;">
                </div>
            @endif

            <div class="text-center mt-4">
                <a href="{{ route('doacao.edit', $doacao->id) }}" class="btn btn-warning me-2">Editar</a>
                <form action="{{ route('doacao.destroy', $doacao->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Tem certeza que deseja deletar esta doação?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@endsection
