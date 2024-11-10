@extends('components.app')

@section('title', 'Página Inicial')

@section('content')
<body>
    <hr class="mt-5" style="margin-bottom: 100px;">
    <div style="background-color:#F5F5F5; margin-bottom: 30px;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 style="font-family:'Montserrat', sans-serif; color:#4F4F4F;" class="mt-4">Contate-nos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <p style="font-family:'Roboto', sans-serif; color:#4F4F4F;">Caso tenha alguma dúvida sobre como doar ou receber livros, ou se desejar saber mais sobre nossa missão, entre em contato conosco.</p>
                </div>
            </div>

            <!-- Mensagem de Sucesso -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Mensagem de Erro -->
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="p-4" style="background-color:#FFFFFF; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <form action="{{ route('contato.store') }}" method="POST">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" name="nome" placeholder="Nome" class="form-control" style="border: 1px solid #4A90E2; background-color: #F5F5F5; color:#4F4F4F;">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" name="email" placeholder="Email" class="form-control" style="border: 1px solid #4A90E2; background-color: #F5F5F5; color:#4F4F4F;">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" name="telefone" placeholder="Telefone" class="form-control" style="border: 1px solid #4A90E2; background-color: #F5F5F5; color:#4F4F4F;">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <textarea name="mensagem" placeholder="Digite sua mensagem aqui..." class="form-control" style="border: 1px solid #4A90E2; background-color: #F5F5F5; color:#4F4F4F;"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3 mb-4 d-flex justify-content-center">
                                <button type="submit" class="btn" style="background-color: #A4D65E; color: white; border: none; font-family: 'Poppins', sans-serif; padding: 10px 20px; border-radius: 5px;">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <p class="d-flex justify-content-center" style="font-family:'Roboto', sans-serif; color:#4F4F4F;">Entre em contato conosco e faça parte dessa corrente do bem!</p>
            </div>
        </div>
    </div>

    <div class="link-top">
        <a href="#">
            <img src="img/icons8-up-squared-50.png" alt="" style="width:50px;">
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
@endsection
