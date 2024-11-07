<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .navbar {
                z-index: 1050; 
            }

            /* Adicionando o espaçamento para o footer */
            footer {
                margin-top: 50px; /* Distância do conteúdo principal */
                padding-top: 30px;
                padding-bottom: 30px;
                background-color: #0e0e52;
                color: white;
            }

            footer a {
                color: white;
                text-decoration: none;
            }

            footer a:hover {
                text-decoration: underline;
                color: #fdd835;
            }

            .social-icons img {
                width: 40px;
                transition: transform 0.3s;
            }

            .social-icons img:hover {
                transform: scale(1.1);
            }

            .contact-info, .about-info {
                margin-bottom: 15px;
            }

            .contact-info p, .about-info p {
                margin: 5px 0;
            }
        </style>
    
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
                        <a href="{{ route('livros.disponiveis') }}" class="nav-link">Livros</a>
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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="h5">Siga-nos nas redes sociais:</p>
                <div class="social-icons">
                    <ul class="d-flex list-unstyled">
                        <li><a href="#" class="me-3"><img src="{{ asset('images/icons8-instagram.svg') }}" alt="Instagram"></a></li>
                        <li><a href="#" class="me-3"><img src="{{ asset('images/icons8-facebook.svg') }}" alt="Facebook"></a></li>
                        <li><a href="#" class="me-3"><img src="{{ asset('images/icons8-twitter.svg') }}" alt="Twitter"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 contact-info">
                <p class="h5">Entre em contato</p>
                <p>Endereço: Rua Exemplo, 123, Cidade, Estado</p>
                <p>E-mail: <a href="mailto:contato@readcycle.com">contato@readcycle.com</a></p>
                <p>Telefone: (XX) XXXX-XXXX</p>
            </div>
            <div class="col-md-4 about-info">
                <p class="h5">Sobre Nós</p>
                <p>A ReadCycle é uma plataforma que conecta pessoas que desejam compartilhar livros e expandir o acesso à leitura.</p>
                <p>Junte-se a nós para transformar páginas em pontes e mudar destinos!</p>
            </div>
        </div>
        <div class="row">
            <p class="text-center">&copy; {{ date('Y') }} ReadCycle. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</html>
