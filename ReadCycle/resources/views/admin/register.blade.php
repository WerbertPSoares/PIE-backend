@extends('components.app')

@section('title', 'Cadastro - Admin')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Cadastro de Administrador</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.register.submit') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Digite seu nome" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu email" required>
        </div>
        <div class="form-group mb-3">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha" required>
        </div>
        <div class="form-group mb-3">
            <label for="password_confirmation">Confirme a Senha</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirme sua senha" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        <p class="mt-4 text-center">Já tem uma conta? <a href="{{ route('admin.login') }}" class="text-decoration-none">Entre aqui</a></p>
    </form>
</div>
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 70px; /* Ajuste conforme a altura da sua navbar */
        }

        .container {
            max-width: 500px; /* Limita a largura do formulário */
            margin: auto; /* Centraliza o formulário */
        }
    </style>
@endsection

