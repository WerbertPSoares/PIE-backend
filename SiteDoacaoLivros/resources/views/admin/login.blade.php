@extends('components.app')

@section('title', 'Login - Admin')

@section('content')
<div class="container mt-5 pt-5">
    <h2 class="text-center">Login - Administrador</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu email" required>
        </div>
        <div class="form-group mb-3">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        <!--<p class="mt-4 text-center">Não tem uma conta? <a href="{{ route('admin.register') }}" class="text-decoration-none">Cadastre-se</a></p>-->
    </form>
</div>
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 80px; /* Aumente a altura conforme a navbar */
        }

        .container {
            max-width: 500px; /* Limita a largura do formulário */
            margin: auto; /* Centraliza o formulário */
        }
    </style>
@endsection
