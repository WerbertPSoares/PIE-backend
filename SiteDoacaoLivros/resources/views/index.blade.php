@extends('components.app')

@section('title', 'Página Inicial')

@section('content')
<head>
  <style>
    /* Estilização dos cards de livros */
.card {
  border: 2px solid #ddd; /* Adiciona borda */
  border-radius: 8px; /* Arredonda as bordas do card */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave nos cards */
  overflow: hidden; /* Garante que nada ultrapasse as bordas do card */
}

.card-img-top {
  width: 100%; /* Faz a imagem ocupar toda a largura do card */
  height: 250px; /* Altura fixa para todas as imagens */
  object-fit: cover; /* Ajusta a imagem para cobrir o espaço sem distorção */
  border-bottom: 2px solid #ddd; /* Borda inferior para separar a imagem do conteúdo */
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

/* Estilização do botão */
.btn-primary {
  background-color: #4A90E2; /* Cor primária azul suave */
  border-color: #4A90E2;
}

.btn-primary:hover {
  background-color: #357ABD; /* Cor ao passar o mouse */
  border-color: #357ABD;
}
.hero-banner-container {
    position: relative;
    width: 100%;
    height: auto;
  }

  .fazerParte {
    font-size: 1.2rem; /* Aumenta o tamanho da fonte do botão */
    text-transform: uppercase;
    letter-spacing: 1.5px;
    transition: all 0.3s ease-in-out; /* Transição suave no hover */
  }

  .fazerParte:hover {
    background-color: #FDD835; /* Altera a cor do botão ao passar o mouse */
    transform: scale(1.1); /* Leve aumento no tamanho ao passar o mouse */
  }

  /* Garantir que a imagem ocupe toda a largura da página */
  .img-fluid {
    object-fit: cover;
    height: 400px; /* Altura da imagem (pode ser ajustada conforme necessário) */
  }
  /* Efeito de animação para a imagem hero */
  #heroImage {
    transition: transform 1s ease, opacity 1s ease;
  }

  #heroImage:hover {
    transform: scale(1.05); /* Aumenta a imagem ao passar o mouse */
    opacity: 0.9; /* Torna a imagem um pouco mais opaca */
  }

  /* Estilo para o botão "Doe Aqui" */
  .fazerParte {
    font-size: 1.3rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  }

  .fazerParte:hover {
    background-color: #FDD835; /* Altera a cor do botão */
    transform: scale(1.1); /* Leve aumento ao passar o mouse */
  }

  /* Animação do texto "Bem-vindo ao ReadCycle!" */
  .welcome-text {
    font-family: 'Montserrat', sans-serif;
    font-size: 2.5rem;
    font-weight: bold;
    opacity: 0;
    animation: fadeIn 2s forwards;
  }

  /* Definindo a animação de fade-in */
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

  /* Estilo para a seção do botão (garante que o conteúdo centralizado e responsivo) */
  .container {
    position: relative;
  }

  /* Adicionando mais espaçamento entre os elementos */
  .container.mt-5 {
    margin-top: 50px;
  }
/* Animação de fade-in para os textos */
.fade-in-text {
        opacity: 0;
        animation: fadeInText 2s forwards;
    }

    /* Definindo a animação de fade-in */
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

    /* Efeito interativo nos títulos */
    .interactive-title {
        cursor: pointer;
        transition: color 0.3s ease, transform 0.3s ease;
        color: #4F4F4F; /* Cor inicial */
    }

    .interactive-title:hover {
        color: #A4D65E; /* Cor ao passar o mouse */
        transform: scale(1.05); /* Leve aumento do tamanho */
    }

    /* Efeito de hover nos parágrafos */
    .card-text:hover {
        color: #4A90E2; /* Cor ao passar o mouse */
        transition: color 0.3s ease;
    }
    /* Efeito interativo nos títulos */
    .interactive-title {
        cursor: pointer;
        transition: color 0.3s ease, transform 0.3s ease;
        color: #4F4F4F;
    }

    .interactive-title:hover {
        color: #A4D65E;
        transform: scale(1.05);
    }

    /* Efeito de hover nas cards */
    .book-card:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efeito de hover nos botões */
    .btn-interactive:hover {
        background-color: #4A90E2;
        color: white;
        transform: scale(1.1);
        transition: all 0.3s ease;
    }

    /* Animação de fade-in para os cards e modais */
    .fade-in-card {
        opacity: 0;
        animation: fadeInCard 1s forwards;
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

    /* Adicionando uma animação suave no modal */
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
<div class="card">
    <div class="card-body">
        <!-- Parágrafo com animação -->
        <p class="card-text fade-in-text">
            No ReadCycle, acreditamos que cada livro tem uma história única e um propósito especial. Nossa missão é criar um ciclo de leitura onde livros que não são mais utilizados possam encontrar novos lares e novas histórias para contar. A leitura é uma porta que se abre para o conhecimento, a imaginação e a empatia, e queremos garantir que todos tenham acesso a essa porta.
        </p>

        <!-- Título com efeito de hover -->
        <h4 class="interactive-title">Doe Livros</h4>
        <p class="card-text">
            Se você tem livros que não lê mais, por que não doá-los? Eles podem ser a chave que abrirá novas perspectivas para alguém que está ansioso por novas descobertas. Doar é simples: você pode se inscrever em nosso site, cadastrar seus livros e nós nos encarregaremos de conectá-los a novos leitores.
        </p>
        
        <!-- Título com efeito de hover -->
        <h4 class="interactive-title">Explore Nossa Coleção</h4>
        <p class="card-text">
            Para aqueles que estão à procura de novos títulos, o ReadCycle é o lugar perfeito para você. Navegue em nossa coleção de livros disponíveis, que abrange diversos gêneros e temas. Temos certeza de que você encontrará algo que despertará seu interesse.
        </p>
        
        <!-- Título com efeito de hover -->
        <h4 class="interactive-title">Participe da Comunidade</h4>
        <p class="card-text">
            Além disso, incentivamos a interação entre leitores e doadores. Compartilhe suas experiências, deixe comentários sobre os livros que você leu e participe de eventos comunitários que promovemos. O ReadCycle é mais do que um site de doação de livros; é uma comunidade dedicada à leitura e ao compartilhamento de conhecimento.
        </p>
        
        <!-- Título com efeito de hover -->
        <h4 class="interactive-title">Junte-se a Nós!</h4>
        <p class="card-text">
            Junte-se a nós nessa jornada de redescoberta da leitura. Faça parte do ReadCycle e transforme livros em novas histórias!
        </p>
    </div>
</div>
    
<h1 class="text-center interactive-title mb-4">Explore Nossa Coleção</h1>

<h1 class="text-center mb-4">Livros Disponíveis para Doação</h1>

<div class="row">
    @foreach($livros as $livro)
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-primary book-card">
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
                        @if(Auth::check())
                            <form action="{{ route('solicitacao.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="livro_id" value="{{ $livro->id }}">
                                <button type="submit" class="btn btn-success">Solicitar Doação</button>
                            </form>
                        @else
                            <a href="{{ route('login.form') }}" class="btn btn-warning">Solicitar Doação</a>
                        @endif
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>

    
  

 
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
    <!-- Script para animações de fade-in -->
<script>
    window.addEventListener('scroll', function() {
        const cards = document.querySelectorAll('.book-card');
        const screenPosition = window.innerHeight / 1.5;

        cards.forEach(function(card) {
            const cardPosition = card.getBoundingClientRect().top;
            if (cardPosition < screenPosition) {
                card.classList.add('fade-in-card');
            }
        });
    });
  </script>
</body>

@endsection


