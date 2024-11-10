@extends('components.app')

@section('title', 'Página Inicial')

@section('content')
<head>
<style>
    /* ====================== Cards de Livros ====================== */
    .card {
        border: 2px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .card-img-top {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-bottom: 2px solid #ddd;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.2em;
        font-weight: bold;
        color: #4F4F4F;
    }

    .card-text {
        color: #6c757d;
        font-size: 0.9em;
    }

    /* ====================== Botões ====================== */
    .btn-primary {
        background-color: #4A90E2;
        border-color: #4A90E2;
    }

    .btn-primary:hover {
        background-color: #357ABD;
        border-color: #357ABD;
    }

    .fazerParte {
        font-size: 1.3rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .fazerParte:hover {
        background-color: #FDD835;
        transform: scale(1.1);
    }

    .btn-interactive:hover {
        background-color: #4A90E2;
        color: white;
        transform: scale(1.1);
        transition: all 0.3s ease;
    }

    /* ====================== Hero Banner ====================== */
    .hero-banner-container {
        position: relative;
        width: 100%;
        height: auto;
    }

    .img-fluid {
        object-fit: cover;
        height: 400px;
    }

    #heroImage {
        transition: transform 1s ease, opacity 1s ease;
    }

    #heroImage:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }

    .welcome-text {
        font-family: 'Montserrat', sans-serif;
        font-size: 2.5rem;
        font-weight: bold;
        opacity: 0;
        animation: fadeIn 2s forwards;
    }

    /* ====================== Animações ====================== */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInText {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-text {
        opacity: 0;
        animation: fadeInText 2s forwards;
    }

    .fade-in-card {
        opacity: 0;
        animation: fadeInCard 1s forwards;
    }
    @keyframes fadeInText {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInCard {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .modal-content {
        animation: fadeInModal 0.5s ease-in-out;
    }

    @keyframes fadeInModal {
        0% {
            opacity: 0;
            transform: scale(0.95);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* ====================== Efeitos Interativos ====================== */
    .interactive-title {
        cursor: pointer;
        transition: color 0.3s ease, transform 0.3s ease;
        color: #4F4F4F;
    }

    .interactive-title:hover {
        color: #A4D65E;
        transform: scale(1.05);
    }

    .card-text:hover {
        color: #4A90E2;
        transition: color 0.3s ease;
    }

    .book-card:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* ====================== Seção e Containers ====================== */
    .container {
        position: relative;
    }

    .container.mt-5 {
        margin-top: 50px;
    }
/* ====================== testimonials ====================== */
    .testimonials {
        background-color: #f5f5f5;
        padding: 50px 0;
    }

    .testimonials h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #333;
    }

    .testimonials .lead {
        font-size: 1.25rem;
        margin-bottom: 2rem;
        color: #666;
    }

    .testimonial {
        max-width: 700px;
        margin: 0 auto;
        padding: 20px;
        font-style: italic;
    }

    .testimonial .quote {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #555;
    }

    .testimonial .author {
        margin-top: 15px;
        font-weight: bold;
        color: #333;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #333;
        border-radius: 50%;
    }

    .carousel-indicators [data-bs-target] {
        background-color: #333;
    }
    .faq {
        background-color: #f5f5f5;
        padding: 50px 0;
    }

    .faq h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #333;
    }

    .faq .accordion-button {
        background-color: #4A90E2;
        color: white;
        font-size: 1.25rem;
        padding: 15px;
        text-align: left;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .faq .accordion-button:not(.collapsed) {
        background-color: #A4D65E;
        color: #333;
    }

    .faq .accordion-body {
        background-color: #fff;
        color: #555;
        font-size: 1.1rem;
        padding: 15px;
    }

    .faq .accordion-item {
        margin-bottom: 15px;
    }

    .faq .accordion-button:focus {
        box-shadow: none;
    }

    .faq .accordion-button:hover {
        background-color: #4A90E2;
        color: #fff;
    }
    
</style>

</head>

<hr class="mt-5" style="border: none; height: 2px; background-color: #4A90E2; margin-bottom: 20px;"> <!-- Linha de separação customizada -->

<div class="hero-banner-container">
  <img src="{{ asset('images/premio.jpeg') }}" alt="Hero Banner" class="img-fluid w-100" id="heroImage">
</div>

<!-- Conteúdo centralizado com botão responsivo -->
<div class="container position-relative">
  <div class="row justify-content-center">
    <div class="col-auto">
    <a href="{{ route('login.form') }}">
    <button class="btn btn-primary btn-lg px-5 py-3 rounded-3 shadow-lg border-0 fazerParte" 
            data-bs-toggle="modal" 
            data-bs-target="#exampleModal" 
            type="button">
        Doe Aqui
    </button>
</a>
    </div>
  </div>
</div>

<!-- Seção de boas-vindas com animação de texto -->
<div class="container mt-5">
  <div class="row">
    <div class="col-12 text-center">
      <h1 class="mb-4 welcome-text">Bem-vindo ao ReadCycle!</h1>
      <p class="lead text-muted mb-4">Sua contribuição pode fazer a diferença. Doe um livro, compartilhe conhecimento!</p>
    </div>
  </div>
</div>
<hr class="mt-5" style="border: none; height: 2px; background-color: #4A90E2; margin-bottom: 20px;">

<div class="card" style="background-image: url('{{ asset('images/sua-imagem-de-fundo.jpg') }}') background-size: cover; background-position: center; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); color: black; text-align: justify;">
    <div class="card-body">

        <!-- Parágrafo com animação -->
        <p style="font-size: 1.5rem; color: black; opacity: 0; animation: fadeInText 2s forwards;">
            No ReadCycle, acreditamos que cada livro tem uma história única e um propósito especial. Nossa missão é criar um ciclo de leitura onde livros que não são mais utilizados possam encontrar novos lares e novas histórias para contar. A leitura é uma porta que se abre para o conhecimento, a imaginação e a empatia, e queremos garantir que todos tenham acesso a essa porta.
        </p>

        <!-- Título com efeito de hover -->
        <h2 style="text-align: center; font-size: 1.5rem; color: black; cursor: pointer; transition: color 0.3s ease, transform 0.3s ease;" onmouseover="this.style.color='#A4D65E'; this.style.transform='scale(1.05)'" onmouseout="this.style.color='black'; this.style.transform='scale(1)'">Doe Livros</h2>
        <p style="font-size: 1.5rem; color: black;">
            Se você tem livros que não lê mais, por que não doá-los? Eles podem ser a chave que abrirá novas perspectivas para alguém que está ansioso por novas descobertas. Doar é simples: você pode se inscrever em nosso site, cadastrar seus livros e nós nos encarregaremos de conectá-los a novos leitores.
        </p>
        
        <!-- Título com efeito de hover -->
        <h2 style="text-align: center;font-size: 1.5rem; color: black; cursor: pointer; transition: color 0.3s ease, transform 0.3s ease;" onmouseover="this.style.color='#A4D65E'; this.style.transform='scale(1.05)'" onmouseout="this.style.color='black'; this.style.transform='scale(1)'">Explore Nossa Coleção</h2>
        <p style="font-size: 1.5rem; color: black;">
            Para aqueles que estão à procura de novos títulos, o ReadCycle é o lugar perfeito para você. Navegue em nossa coleção de livros disponíveis, que abrange diversos gêneros e temas. Temos certeza de que você encontrará algo que despertará seu interesse.
        </p>
        
        <!-- Título com efeito de hover -->
        <h2 style=" text-align: center;font-size: 1.5rem; color: black; cursor: pointer; transition: color 0.3s ease, transform 0.3s ease;" onmouseover="this.style.color='#A4D65E'; this.style.transform='scale(1.05)'" onmouseout="this.style.color='black'; this.style.transform='scale(1)'">Participe da Comunidade</h2>
        <p style="font-size: 1.5rem; color: black;">
            Além disso, incentivamos a interação entre leitores e doadores. Compartilhe suas experiências, deixe comentários sobre os livros que você leu e participe de eventos comunitários que promovemos. O ReadCycle é mais do que um site de doação de livros; é uma comunidade dedicada à leitura e ao compartilhamento de conhecimento.
        </p>
        
        <!-- Título com efeito de hover -->
        <h2 style="text-align: center; font-size: 1.5rem; color: black; cursor: pointer; transition: color 0.3s ease, transform 0.3s ease;" onmouseover="this.style.color='#A4D65E'; this.style.transform='scale(1.05)'" onmouseout="this.style.color='black'; this.style.transform='scale(1)'">Junte-se a Nós!</h2>
        <p style="font-size: 1.5rem; color: black;">
            Junte-se a nós nessa jornada de redescoberta da leitura. Faça parte do ReadCycle e transforme livros em novas histórias!
        </p>
    </div>
</div>



<hr class="mt-5" style="border: none; height: 2px; background-color: #4A90E2; margin-bottom: 20px;">
<h1 class="text-center interactive-title mb-4">Explore Nossa Coleção</h1>
<hr class="mt-5" style="border: none; height: 2px; background-color: #4A90E2; margin-bottom: 20px;">
<h1 class="text-center mb-4">Livros Disponíveis para Doação</h1>

<div id="bookCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($livros as $index => $livro)
            <div class="carousel-item @if($index === 0) active @endif">
                <div class="card shadow-lg border-primary book-card mx-auto" style="width: 18rem;">
                    <img src="{{ asset($livro->capa) }}" class="card-img-top" alt="{{ $livro->titulo }}" style="height: 300px; object-fit: cover;">

                    <div class="card-body">
                        <h5 class="card-title">{{ $livro->titulo }}</h5>
                        <p class="card-text">Autor: {{ $livro->autor }}</p>
                        <button type="button" class="btn btn-info btn-lg btn-interactive" data-bs-toggle="modal" data-bs-target="#livroModal{{ $livro->id }}">
                            Ver Detalhes
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="livroModal{{ $livro->id }}" tabindex="-1" aria-labelledby="livroModalLabel{{ $livro->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="livroModalLabel{{ $livro->id }}">{{ $livro->titulo }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <img src="{{ asset($livro->capa) }}" class="img-fluid" alt="{{ $livro->titulo }}">
                            
                            <h6>Autor: {{ $livro->autor }}</h6>
                            <p><strong>Gênero:</strong> {{ $livro->genero }}</p>
                            <p><strong>ISBN:</strong> {{ $livro->isbn }}</p>
                            <p><strong>Editora:</strong> {{ $livro->editora }}</p>
                            <p><strong>Ano:</strong> {{ $livro->ano }}</p>
                            <p><strong>Páginas:</strong> {{ $livro->paginas }}</p>
                            <p><strong>Sinopse:</strong> {{ $livro->sinopse }}</p>
                        </div>

                        <div class="modal-footer">
                            <a href="{{ route('login.form') }}">
                                <button class="btn btn-primary btn-lg px-5 py-3 rounded-3 shadow-lg border-0 fazerParte" type="button">
                                    Solicitar Doação
                                </button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Controles do carrossel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>
<section class="testimonials text-center py-5">
    <h2>Depoimentos de Usuários</h2>
    <p class="lead">Veja o que nossos leitores e doadores têm a dizer:</p>
    <div class="container">
        <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Depoimento 1 -->
                <div class="carousel-item active">
                    <div class="testimonial">
                        <p class="quote">"Descobri tantos livros incríveis no ReadCycle! É ótimo saber que estou contribuindo para que livros circulem entre pessoas."</p>
                        <p class="author">— Ana Silva</p>
                    </div>
                </div>
                <!-- Depoimento 2 -->
                <div class="carousel-item">
                    <div class="testimonial">
                        <p class="quote">"Doar livros que estavam parados na estante foi muito gratificante. Agora eles têm novos leitores!"</p>
                        <p class="author">— Carlos Pereira</p>
                    </div>
                </div>
                <!-- Depoimento 3 -->
                <div class="carousel-item">
                    <div class="testimonial">
                        <p class="quote">"Receber livros que me interessam, sem custo, é incrível. Estou sempre checando as novidades no ReadCycle!"</p>
                        <p class="author">— Maria Souza</p>
                    </div>
                </div>
            </div>
            <!-- Controles do Carrossel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section class="faq py-5">
    <h2 class="text-center mb-4">Perguntas Frequentes</h2>
    <div class="container">
        <div class="accordion" id="faqAccordion">
            <!-- Pergunta 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        O que é o ReadCycle?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        O ReadCycle é uma plataforma para doação e troca de livros. Seu objetivo é conectar pessoas que têm livros que não utilizam mais com aqueles que estão em busca de novos títulos para ler.
                    </div>
                </div>
            </div>
            <!-- Pergunta 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Como posso doar meus livros?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Para doar seus livros, basta se cadastrar em nossa plataforma, adicionar seus livros e pronto! Entraremos em contato com novos leitores interessados.
                    </div>
                </div>
            </div>
            <!-- Pergunta 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Como posso buscar livros para ler?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Para buscar livros, basta navegar pela nossa coleção, filtrar por gênero, autor ou outros critérios, e entrar em contato com o doador.
                    </div>
                </div>
            </div>
            <!-- Pergunta 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        É necessário pagar para usar o ReadCycle?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Não, o ReadCycle é completamente gratuito! Não cobramos nada pelas doações ou solicitações de livros.
                    </div>
                </div>
            </div>
            <!-- Pergunta 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Como posso me inscrever no ReadCycle?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Para se inscrever, clique em "Cadastre-se" no canto superior direito, preencha os dados e pronto! Você estará pronto para começar a doar ou solicitar livros.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="mt-5" style="border: none; height: 2px; background-color: #4A90E2; margin-bottom: 20px;">
  

 
  <div class="link-top">
    <a href="#">
      <img src="img/icons8-up-squared-50.png" alt="" style="width:50px;">
    </a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   
    crossorigin="anonymous"></script>

  <script>
    const fileInput = document.getElementById("file-upload");
    const fileName = document.getElementById("file-name");
    const previewContainer = document.getElementById("preview-container");
    const previewImg = document.getElementById("preview-img");
    const removeImg = document.getElementById("remove-img");

    fileInput.addEventListener("change", function() {
      const file = fileInput.files[0];

      if (file && file.type.startsWith("image/")) {
        fileName.textContent = file.name;

        const reader = new FileReader();
        reader.onload = function(e) {
          previewImg.src = e.target.result;
          previewContainer.style.display = "block";
        };
        reader.readAsDataURL(file);
      } else {
        resetPreview();
      }
    });

    removeImg.addEventListener("click", function() {
      resetPreview();
      fileInput.value = "";
    });

    function resetPreview() {
      fileName.textContent = "Coloque aqui uma foto do livro";
      previewContainer.style.display = "none";
      previewImg.src = "";
    }
     // Efeito ao rolar a página (a partir de um ponto específico)
  window.addEventListener("scroll", function() {
    const textElement = document.querySelector('.welcome-text');
    const textPosition = textElement.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.5;

    if (textPosition < screenPosition) {
      textElement.classList.add('fade-in');
    }
  });
  // Efeito de fade-in quando o conteúdo entra na tela (scroll)
  window.addEventListener('scroll', function() {
        const elements = document.querySelectorAll('.fade-in-text');
        const screenPosition = window.innerHeight / 1.5;

        elements.forEach(function(element) {
            const elementPosition = element.getBoundingClientRect().top;
            if (elementPosition < screenPosition) {
                element.classList.add('fade-in-text');
            }
        });
    });

    window.addEventListener('scroll', function() {
        const cards = document.querySelectorAll('.book-card');
        const screenPosition = window.innerHeight / 1.5;

        cards.forEach(function(card) {
            const cardPosition = card.getBoundingClientRect().top;
            if (cardPosition <script screenPosition) {
                card.classList.add('fade-in-card');
            }
        });
    });
  </script>
</body>

@endsection


