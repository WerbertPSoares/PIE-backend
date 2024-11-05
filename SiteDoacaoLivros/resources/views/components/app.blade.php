<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ReadCycle</title>
</head>
<header>
    <div class="fixed-top" style="background-color: #EEF0F2;">
        <div class="d-none d-sm-block">
            <div class="d-flex justify-content-center" style="background-color: #0e0e52; color: #ffff;">
                <img src="{{ asset('images/icons8-literature-50.png') }}" class="mt-1 mb-1" style="width: 20px; height: 20px;" alt="Ícone de literatura">
                <p class="px-3 h6 mt-1 mb-1">Transforme páginas em pontes: doe um livro, mude um destino!</p>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a href="{{ route('home') }}" class="navbar-brand d-flex">
                    <img src="{{ asset('images/Brown and Beige Modern Bookstore Logo (1).png') }}" style="width: 120px;" alt="Logo ReadCycle">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
                    <span class=""><img src="{{ asset('images/icons8-menu-48.png') }}" style="width: 38px;" alt="Menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuNavbar">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('home') }}" class="nav-link active">Home</a>
                        <a href="{{ route('livro') }}" class="nav-link">Livros</a>
                        <a href="{{ route('sobreNos') }}" class="nav-link">Sobre Nós</a>
                        <a href="{{ route('contato') }}" class="nav-link" style="margin-right: 10px;">Contatos</a>
                    </div>
                    <a class="register d-flex align-items-center px-3 text-center text-decoration-none text-light" href="{{ route('login.form') }}">Entrar</a>
                </div>
            </nav>
        </div>
    </div>
</header>

<main>
@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
    @yield('content')
</main>

<footer>
    <div style="background-color: #0e0e52; color: #ffff !important;">
        <p style="text-align: center;">&copy; {{ date('Y') }} ReadCycle. Todos os direitos reservados.</p>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5 mb-4">
                    <div class="row">
                        <ul class="d-flex px-4" style="gap: 20px;">
                            <li><a href="#"><img src="{{ asset('images/icons8-instagram.svg') }}" style="width: 35px;" alt="Instagram"></a></li>
                            <li><a href="#"><img src="{{ asset('images/icons8-facebook.svg') }}" style="width: 35px;" alt="Facebook"></a></li>
                            <li><a href="#"><img src="{{ asset('images/icons8-twitter.svg') }}" style="width: 35px;" alt="Twitter"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5 mb-4 px-4">
                    <div class="row">
                        <p class="h5 px-0">Entre em contato</p>
                    </div>
                    <div class="row">Endereço: Rua Exemplo, 123</div>
                    <div class="row">E-mail: contato@readcycle.com</div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5 mb-4 px-4">
                    <div class="row">
                        <p class="h5 px-0">Sobre Nós</p>
                    </div>
                    <div class="row">Nossa missão é promover a leitura.</div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</html>
