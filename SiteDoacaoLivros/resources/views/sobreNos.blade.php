@extends('components.app')

@section('title', 'Sobre Nós')

@section('content')

<head>
    <!-- Dependências do Bootstrap e jQuery -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>

<!-- Página de conteúdo -->
<hr class="mt-5" style="margin-bottom: 70px;">

<div class="container">
    <!-- Título da Página -->
    <h1 class="text-center" style="font-family: 'Montserrat', sans-serif; color: #4A90E2;">Sobre Nós</h1>
    </div>
<hr class="mt-5 mb-5" style="border-color: #4A90E2;">
    <!-- Seção com Imagem de Fundo -->
    <div class="row mt-4 d-flex justify-content-center align-items-center animate__animated" 
         id="about-section"
         style="border-radius: 8px; background-image: url('{{ asset('images/pexels-pixabay-159711.jpg') }}'); background-size: cover; background-position: center; padding: 40px; margin: 10px;">
        <div style="background-color: rgba(245, 245, 245, 0.8); padding: 20px; border-radius: 8px;">
            
            <p style="color: #4F4F4F; font-family: 'Roboto', sans-serif; text-align: justify; line-height: 1.6;">
                A ReadCycle nasceu da paixão pelos livros e do desejo de promover a leitura e a educação. Fundada por um grupo de leitores que acreditam no poder transformador dos livros, começamos como uma pequena iniciativa de doação de livros usados, permitindo que leitores compartilhassem histórias, conhecimento e cultura com outros.
            </p>
            <p style="color: #4F4F4F; font-family: 'Roboto', sans-serif; text-align: justify; line-height: 1.6;">
                Com o tempo, percebemos que muitos também buscavam acesso temporário a livros. Assim, decidimos expandir nossos serviços, oferecendo um sistema de aluguel que permite que todos possam ler mais, de forma acessível e sem acumular exemplares em casa.
            </p>
            <p style="color: #4F4F4F; font-family: 'Roboto', sans-serif; text-align: justify; line-height: 1.6;">
                Hoje, nossa missão é clara: facilitar o acesso à leitura, seja por meio da doação ou do aluguel. Acreditamos que cada livro merece uma nova vida e que cada leitor merece a chance de explorar novos mundos. Junte-se à ReadCycle e faça parte dessa jornada de transformação e descoberta!
            </p>
        </div>
    </div>
    <hr class="mt-5 mb-5" style="border-color: #4A90E2;">
    <!-- Seções de Missão e Objetivo com Destaque -->
    <div class="row d-flex justify-content-center align-items-start gap-4 mt-5">
        <!-- Imagem Inspiradora -->
        <div class="col-auto">
            <img class="img-fluid" src="{{ asset('images/inss.jpg') }}" alt="Imagem inspiradora" style="width: 300px; border-radius: 8px;">
        </div>

        <!-- Seção Missão com Efeito Hover -->
        <div class="col-auto section-box" style="border: 1px solid #A4D65E; background-color: #F5F5F5; width: 300px; padding: 20px; border-radius: 8px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#missionModal">
            <h1 class="text-center" style="font-family: 'Montserrat', sans-serif; color: #4A90E2;">Missão</h1>
            <p class="mt-4" style="text-align: justify; color: #4F4F4F; font-family: 'Roboto', sans-serif; line-height: 1.6;">
                Democratizar a leitura, proporcionando a oportunidade de cada livro encontrar novos leitores.
            </p>
        </div>

        <!-- Seção Objetivo com Efeito Hover e Modal -->
        <div class="col-auto section-box" style="border: 1px solid #FDD835; background-color: #F5F5F5; width: 300px; padding: 20px; border-radius: 8px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#objectiveModal">
            <h1 class="text-center" style="font-family: 'Montserrat', sans-serif; color: #4A90E2;">Objetivo</h1>
            <p class="mt-4" style="text-align: justify; color: #4F4F4F; font-family: 'Roboto', sans-serif; line-height: 1.6;">
                Tornar a leitura acessível, prática e sustentável, criando um ambiente onde leitores possam se conectar, compartilhar e contribuir para um mundo mais culto e informado.
            </p>
        </div>
    </div>
</div>


<div class="modal fade" id="objectiveModal" tabindex="-1" aria-labelledby="objectiveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="objectiveModalLabel">Objetivo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tornar a leitura acessível, prática e sustentável, criando um ambiente onde leitores possam se conectar, compartilhar e contribuir para um mundo mais culto e informado.
            </div>
        </div>
    </div>
</div>
<section class="text-center py-5" style="background-color: #f5f5f5;">
    <h2>Como Funciona o ReadCycle?</h2>
    <p class="lead">Doar e receber livros é simples! Veja como você pode contribuir e se beneficiar:</p>
    <div class="row mt-4">
        <div class="col-md-4">
            <h5>1. Doe um Livro</h5>
            <p>Cadastre os livros que não utiliza mais e ajude outros leitores a explorarem novas histórias.</p>
        </div>
        <div class="col-md-4">
            <h5>2. Explore e Solicite</h5>
            <p>Encontre livros de diversos gêneros e solicite aqueles que te interessam.</p>
        </div>
        <div class="col-md-4">
            <h5>3. Receba e Compartilhe</h5>
            <p>Receba os livros em sua casa e continue o ciclo da leitura ao terminar!</p>
        </div>
    </div>
</section>
<section class="text-center py-5" style="background-color: #e8f4e9;">
    <h2>Faça Parte da Comunidade ReadCycle</h2>
    <p class="lead">Cadastre-se agora para doar, solicitar e interagir com outros amantes da leitura.</p>
    <a href="{{ route('login.form') }}" class="btn btn-primary btn-lg px-4">Quero Participar!</a>
</section>


<hr class="mt-5 mb-5" style="border-color: #4A90E2;">

<script>
    // Adiciona animação ao rolar a página
    $(window).on("scroll", function() {
        $("#about-section").addClass("animate__fadeInUp");
    });

    // Adiciona efeito de hover nas seções Missão e Objetivo
    $(".section-box").hover(
        function() {
            $(this).css("box-shadow", "0px 4px 15px rgba(0, 0, 0, 0.2)");
        },
        function() {
            $(this).css("box-shadow", "none");
        }
    );
</script>

<!-- CSS adicional para animação -->
<style>
    .animate__animated { opacity: 0; transition: opacity 0.5s ease-in-out; }
    .animate__fadeInUp { opacity: 1; }
</style>


@endsection
