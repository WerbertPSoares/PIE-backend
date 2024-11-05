@extends('components.app')

@section('title', 'Gerenciar Contatos')

@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<div class="container mt-5">
    <h2 class="text-center" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #4A90E2;">Mensagens de Contato</h2>

    @if($mensagens->isEmpty())
        <div class="alert alert-info mt-4 text-center">
            <p>Não há mensagens de contato.</p>
        </div>
    @else
        <div class="table-responsive mt-4">
            <table class="table table-hover align-middle shadow-sm">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Mensagem</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mensagens as $mensagem)
                    <tr class="table-light" style="border-bottom: 1px solid #ddd;">
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-circle me-2 text-primary" style="font-size: 1.2em;"></i>
                                {{ $mensagem->nome }}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-telephone me-2 text-success" style="font-size: 1.2em;"></i>
                                {{ $mensagem->telefone }}
                            </div>
                        </td>
                        <td>{{ $mensagem->email }}</td>
                        <td>
                            <p class="text-truncate" style="max-width: 250px;">{{ $mensagem->mensagem }}</p>
                            <button class="btn btn-link text-primary p-0" data-bs-toggle="modal" data-bs-target="#mensagemModal{{ $mensagem->id }}">Ver mais</button>
                        </td>
                        <td>{{ $mensagem->created_at->format('d/m/Y H:i') }}</td>
                    </tr>

                    <!-- Modal para exibir a mensagem completa -->
                    <div class="modal fade" id="mensagemModal{{ $mensagem->id }}" tabindex="-1" aria-labelledby="mensagemModalLabel{{ $mensagem->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="mensagemModalLabel{{ $mensagem->id }}">Mensagem Completa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Nome:</strong> {{ $mensagem->nome }}</p>
                                    <p><strong>Telefone:</strong> {{ $mensagem->telefone }}</p>
                                    <p><strong>Email:</strong> {{ $mensagem->email }}</p>
                                    <p><strong>Mensagem:</strong></p>
                                    <p>{{ $mensagem->mensagem }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
