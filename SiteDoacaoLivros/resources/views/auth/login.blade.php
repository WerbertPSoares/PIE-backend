@extends('components.app')

@section('title', 'Login')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">  
</head>
<body>
    <div class="d-flex justify-content-center align-self-center">
        <div class="login-container mt-5">
            <h2>Login</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="btn-enviar">
                    <button type="submit">Entrar</button>
                </div>
                <p class="mt-4 d-flex justify-content-center">Não tem uma conta?<a class="text-decoration-none mx-1" href="{{ route('cadastro') }}">Cadastre-se</a></p>
            </form>

            <!-- Link para a página de login de administradores -->
            <div class="mt-4 d-flex justify-content-center">
                <a class="text-decoration-none" href="{{ route('admin.login') }}">Administrador</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
