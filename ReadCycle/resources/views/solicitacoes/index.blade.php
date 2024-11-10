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
        <a href="{{ route('admin.solicitacoes.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Adicionar Solicitação
        </a>
    </div>

    @if($solicitacoes->isEmpty())
        <div class="alert alert-warning d-flex justify-content-between align-items-center">
            <span>Não há solicitações cadastradas.</span>
            <a href="{{ route('admin.solicitacoes.create') }}" class="btn btn-info">
                <i class="fas fa-plus"></i> Adicionar Solicitação
            </a>
        </div>
    @else
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
                        <td>
                            {{-- Verificando se o livro existe antes de acessar o título --}}
                            {{ $solicitacao->livro ? $solicitacao->livro->titulo : 'Livro não encontrado' }}
                        </td>
                        <td>{{ $solicitacao->status }}</td>
                        <td>
                            {{-- Ações: Editar, Excluir --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
