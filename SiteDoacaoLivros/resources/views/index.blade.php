@extends('components.app')

@section('title', 'Página Inicial')

@section('content')

  <hr class="mt-5" style="margin-bottom: 20px;">
  <img src="{{ asset('images/arranjo-de-livros-antigos-com-espaco-de-copia.jpg') }}" alt="" class="img-fluid">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <button class="btn btn-primary fazerParte" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Doe Aqui</button>
    </div>
  </div>
  <div class="container">
    <div class="row mt-5">
      <div class="col-auto">
      <div class="container mt-5">
    <h1 class="text-center mb-4">Bem-vindo ao ReadCycle!</h1>
    
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                No ReadCycle, acreditamos que cada livro tem uma história única e um propósito especial. Nossa missão é criar um ciclo de leitura onde livros que não são mais utilizados possam encontrar novos lares e novas histórias para contar. A leitura é uma porta que se abre para o conhecimento, a imaginação e a empatia, e queremos garantir que todos tenham acesso a essa porta.
            </p>
            
            <h4>Doe Livros</h4>
            <p class="card-text">
                Se você tem livros que não lê mais, por que não doá-los? Eles podem ser a chave que abrirá novas perspectivas para alguém que está ansioso por novas descobertas. Doar é simples: você pode se inscrever em nosso site, cadastrar seus livros e nós nos encarregaremos de conectá-los a novos leitores.
            </p>
            
            <h4>Explore Nossa Coleção</h4>
            <p class="card-text">
                Para aqueles que estão à procura de novos títulos, o ReadCycle é o lugar perfeito para você. Navegue em nossa coleção de livros disponíveis, que abrange diversos gêneros e temas. Temos certeza de que você encontrará algo que despertará seu interesse.
            </p>
            
            <h4>Participe da Comunidade</h4>
            <p class="card-text">
                Além disso, incentivamos a interação entre leitores e doadores. Compartilhe suas experiências, deixe comentários sobre os livros que você leu e participe de eventos comunitários que promovemos. O ReadCycle é mais do que um site de doação de livros; é uma comunidade dedicada à leitura e ao compartilhamento de conhecimento.
            </p>
            
            <h4>Junte-se a Nós!</h4>
            <p class="card-text">
                Junte-se a nós nessa jornada de redescoberta da leitura. Faça parte do ReadCycle e transforme livros em novas histórias!
            </p>
        </div>
    </div>
</div>
      </div>
    </div>
    
    <div class="row mt-5">
      <div class="boxList1">
        <p class="h5 mt-3 px-2">
          Disponiveis para Doação
        </p>
        <div class="boxList2 mb-3">
          <ul class="d-flex lista" style="list-style: none;">
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="{{ asset('images/des.jpg') }}" alt="" style="width: 300px; height: auto;">>
                <p class="mb-0">Lógica de programação: A construção de algoritmos e estruturas de dados com aplicações em Python</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="{{ asset('images/algoritmos.jpg') }}" alt="" style="width: 300px; height: auto;">>
                <p class="mb-0">Algoritmos e Programação: Teoria e prática</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
              <img src="{{ asset('images/harryPotter.jpg') }}" alt="" style="width: 300px; height: auto;">>
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
              <img src="{{ asset('images/gg.jpg') }}" alt="" style="width: 300px; height: auto;">>
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="d-flex align-items-center text-center">
              <a href="livros.php" class="text-decoration-none" style="padding-right: 40px;">Ver mais</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row mt-5 mb-5">
      <div class="boxList1">
        <p class="h5 mt-3 px-2">
          Você pode gostar
        </p>
        <div class="boxList2 mb-3">
          <ul class="d-flex lista" style="list-style: none;">
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="mt-3 text-center">
              <a href="#" class="text-decoration-none text-dark">
                <img src="https://placehold.co/150x200/png" alt="">
                <p class="mb-0">Nome do Livro</p>
                <p class="mb-0">Autor</p>
              </a>
            </li>
            <li class="d-flex align-items-center text-center">
              <a href="livros.php" class="text-decoration-none" style="padding-right: 40px;">Ver mais</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- FORMULARIO DE DOAÇÃO -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="formulario modal-dialog-top modal-fullscreen-md-down">
          <div class="container-fluid">
            <div class="row">
              <div class="col-10 px-4">
                <h4 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Faça sua doação</h4>
              </div>
              <div class="col-2">
                <div class="d-flex justify-content-end">
                  <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
                </div>
              </div>
            </div>
            <div class="row px-3">
              <p class="mt-2">
                Deixe aqui as principais informações do livro no qual você está afim de doar, não esqueça de deixar seu telefone pra que o interessado entre em contato com você.
              </p>
            </div>
            <div class="row px-3 mt-2">
              <form action="">
                <div class="row">
                  <div class="col-6">
                    <label for="nome-livro">Nome do Livro</label>
                    <input class="mt-1" type="text" placeholder="Digite o nome do livro" id="nome-livro" required>
                  </div>
                  <div class="col-6">
                    <label for="autor">Autor do Livro</label>
                    <input class="mt-1" type="text" placeholder="Digite o nome do autor" id="autor" required>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-12">
                    <label for="tel">Telefone</label>
                    <input class="mt-1" type="tel" placeholder="Deixe aqui seu contato" id="tel" required>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-12">
                    <label for="estado-livro">Estado de consevação</label>
                    <select id="estado-livro" class="select mt-1">
                      <option value="">Selecione o estado de conservação</option>
                      <option value="novo">Novo</option>
                      <option value="bom">Bom</option>
                      <option value="usado">Usado</option>
                      <option value="desgastado">Desgastado</option>
                    </select>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-12">
                    <label for="sinopse">Sinopse</label>
                    <textarea class="textarea mt-1" placeholder="Conte um pouco sobre oque o livro fala" id="sinopse" required></textarea>
                  </div>
                </div>

                <div class="custom-file-upload">
                  <label for="file-upload" class="file-label">Foto do livro</label>
                  <input type="file" id="file-upload" name="file">
                  <span id="file-name">Coloque aqui uma foto do livro</span>
                </div>

                <div id="image-preview">
                  <div id="preview-container" style="display: none;">
                    <img id="preview-img" src="" alt="Pré-visualização da imagem" style="max-width: 200px; margin-top: 10px;">
                    <span id="remove-img"><img style="width: 30px; cursor:pointer;" src="img/icons8-close-window-50.png" alt=""></span>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-12">
                    <button class="botao" type="submit">CONCLUIR DOAÇÃO</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
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
  </script>
</body>

@endsection


