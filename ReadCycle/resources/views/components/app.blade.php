<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
/* Navbar */
.navbar {
    z-index: 1050;
}

/* Navbar Links */
.navbar-nav .nav-link {
    color: #4A90E2;
    font-family: 'Roboto', sans-serif;
    transition: color 0.3s ease, transform 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #FDD835;
    transform: scale(1.1); /* Aumenta o tamanho do link ao passar o mouse */
}

/* Botão de Login */
.register {
    background-color: #4A90E2;
    border-radius: 5px;
    padding: 8px 15px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.register:hover {
    background-color: #A4D65E;
    transform: scale(1.1);
}

/* Animação do Menu Mobile */
.navbar-toggler img {
    transition: transform 0.3s ease;
}

.navbar-toggler.collapsed img {
    transform: rotate(0deg);
}

.navbar-toggler:not(.collapsed) img {
    transform: rotate(90deg);
}

/* Navbar ao Rolar a Página */
.navbar-scrolled {
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

/* Footer */
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

/* Ícones Sociais */
.social-icons img {
    width: 40px;
    transition: transform 0.3s;
}

.social-icons img:hover {
    transform: scale(1.1);
}

/* Informações de Contato e Sobre */
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

<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <!-- Social Media Section -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Siga-nos nas redes sociais</h5>
                <ul class="list-inline d-flex">
                    <li class="list-inline-item">
                        <a href="#" class="text-white me-3">
                            <img src="{{ asset('images/icons8-instagram.svg') }}" alt="Instagram" class="social-icon">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white me-3">
                            <img src="{{ asset('images/icons8-facebook.svg') }}" alt="Facebook" class="social-icon">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            <img src="{{ asset('images/icons8-twitter.svg') }}" alt="Twitter" class="social-icon">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Information Section -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Entre em contato</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Rua da Sorte, 1233, Caxias, MA</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> <a href="mailto:Readycycle@exemplo.com" class="text-white">Readycycle@exemplo.com</a></li>
                    <li><i class="fas fa-phone me-2"></i> (99) 99987-6543</li>
                </ul>
            </div>

            <!-- About Section -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Sobre a ReadCycle</h5>
                <p>A ReadCycle é uma plataforma que conecta pessoas com o desejo de compartilhar livros, expandindo o acesso à leitura. Junte-se a nós para transformar páginas em pontes e mudar destinos!</p>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="row mt-4">
            <div class="col text-center">
                <p class="mb-0">&copy; {{ date('Y') }} ReadCycle. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Alteração visual da navegação ao rolar a página
    const navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function() {
        if (window.scrollY > 50) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    });
});

// Adiciona uma classe para o efeito de navegação fixa ao rolar
document.querySelector('.navbar').classList.toggle('navbar-scrolled', window.scrollY > 50);
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</html>
