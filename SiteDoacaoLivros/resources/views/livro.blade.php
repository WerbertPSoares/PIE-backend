@extends('components.app')

@section('content')
<body>
  <hr class="mt-5" style="margin-bottom: 64px;">

  <!-- BARRA DE PESQUISA -->

  <div class="container">
    <div class="row">
      <form class="d-flex mt-5">
        <input style="border-radius: 30px;" type="search" class="form-control me-2" placeholder="Pesquisar" aria-label="Pesquisar" oninput="filterBooks()">
      </form>
    </div>
  </div>

  <!-- LISTA DE GENEROS -->

  <div class="container">
    <div class="row">
      <div class="d-flex justify-content-center mt-5">
        <div class="row d-flex justify-content-center" style="list-style: none; gap: 50px;">
          <div class="col-auto">
            <img src="img/romance.jpg" alt="" style="width:150PX; border-radius:50%;">
            <p class="text-center">Romance</p>
          </div>
          <div class="col-auto">
            <img src="img/autoajuda.jpg" alt="" style="width:150PX; border-radius:50%;">
            <p class="text-center">Autoajuda</p>
          </div>
          <div class="col-auto">
            <img src="img/ficção.jpg" alt="" style="width:150PX; border-radius:50%;">
            <p class="text-center">Ficção cientifica</p>
          </div>
          <div class="col-auto">
            <img src="img/terror.jpg" alt="" style="width:150PX; border-radius:80%;">
            <p class="text-center">Terror</p>
          </div>
          <div class="col-auto">
            <img src="img/hqs.jpg" alt="" style="width:150PX; border-radius:50%;">
            <p class="text-center">Quadrinhos</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- LISTA DE LIVROS -->

  <div class="container">
    <div class="row mt-5">
      <h3 class="text-center">Nossos livros</h3>
    </div>
    <div class="row mt-5 d-flex justify-content-center" style="list-style: none; gap: 120px;">
      <div class="col-auto text-center livro limite " data-bs-toggle="modal" data-bs-target="#HarryPotter">
        <img src="img/harryPotter.jpg" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Harry Potter e a Pedra Filosofal: 1</h6>
        <p>Ficção Cientifica</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="HarryPotter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Harry Potter e a Pedra Filosofal: 1</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Harry Potter é um garoto cujos pais, feiticeiros, foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. Ele foi levado, então, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. Descobre sua verdadeira história e seu destino: ser um aprendiz de feiticeiro até o dia em que terá que enfrentar a pior força do mal, o homem que assassinou seus pais. O menino de olhos verde, magricela e desengonçado, tão habituado à rejeição, descobre, também, que é um herói no universo dos magos. Potter fica sabendo que é a única pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa é a causa da marca em forma de raio que ele carrega na testa. Ele não é um garoto qualquer, ele sequer é um feiticeiro qualquer ele é Harry Potter, símbolo de poder, resistência e um líder natural entre os sobrenaturais. A fábula, recheada de fantasmas, paredes que falam, caldeirões, sapos, unicórnios, dragões e gigantes, não é, entretanto, apenas um passatempo.</p>
              <h6 class="mt-5">Doado por: Johann</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#it-a-coisa">
        <img src="img/it a coisa.jpg" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">It: A coisa</h6>
        <p>Horror</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="it-a-coisa" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">It: A coisa</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Durante as férias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos começa a ver coisas estranhas. Um conta que viu um palhaço, outro que viu uma múmia. Finalmente, acabam descobrindo que estavam todos vendo a mesma coisa: um ser sobrenatural e maligno que pode assumir várias formas. É assim que Bill, Beverly, Eddie, Ben, Richie, Mike e Stan enfrentam a Coisa pela primeira vez.
Quase trinta anos depois, o grupo volta a se encontrar. Mike, o único que permaneceu em Derry, dá o sinal ― uma nova onda de terror tomou a pequena cidade. É preciso unir forças novamente. Só eles têm a chave do enigma. Só eles sabem o que se esconde nas entranhas de Derry. Só eles podem vencer a Coisa.
“Mesmo depois de tantos anos, o público continua obcecado por IT. Ficamos obcecados porque todos temos medos. Todos temos algo que nos assusta, sejam palhaços e aranhas ou coisas que se escondem em um lugar muito mais profundo de nossa mente. Este livro fala com todo mundo. É o romance mais assustador de King, e duvido que isso vá mudar” ― The Guardian</p>
              <h6 class="mt-5">Doado por: João</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#homem-aranha">
        <img src="img/homem aranha.jpg" alt="" style="width: 250px; height: 320px;">
        <h6 class="limite mb-0 mt-2">Marvel Saga: o Espetacular Homem-aranha - Volume 1: Capa Dura</h6>
        <p>HQ</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="homem-aranha" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Marvel Saga: o Espetacular Homem-aranha - Volume 1: Capa Dura</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Produto em pré-venda, com início de postagem a partir da 1º quinzena de Maio/20. A vida de Peter Parker está prestes a sofrer a mais incrível reviravolta de todos os tempos. Quem é o misterioso Ezekiel, o estranho que surgiu do nada exibindo os mesmos poderes do Homem-Aranha? Amigo ou inimigo? Herói ou vilão? Em meio a revelações surpreendentes, o Amigão da Vizinhança descobre que o maior adversário que jamais conheceu está em seu encalço para acabar com sua vida, e suas únicas opções são fugir. ou morrer! A Panini Comics orgulhosamente apresenta o primeiro volume da coleção Marvel Saga: O Espetacular Homem-Aranha, trazendo o início da aclamada fase escrita por Joe Michael Straczynski (criador da série de TV Babylon 5) e ilustrada por John Romita Jr. (Kick-Ass, X-Men). Um verdadeiro clássico moderno, que marcou para sempre a carreira de um dos heróis mais amados da Casa das Ideias, numa luxuosa edição de 208 páginas. (The Amazing Spider-Man (vol. 2) 30-35, 37-38)</p>
              <h6 class="mt-5">Doado por: Heloisa</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#abc">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="abc" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- NOVO LIVRO -->
      <div class="col-auto text-center livro limite" data-bs-toggle="modal" data-bs-target="#">
        <img src="https://placehold.co/250x300/png" style="width: 250px; height: 320px;" alt="">
        <h6 class="limite mb-0 mt-2">Titulo do livro</h6>
        <p>lancamento</p>
      </div>
      <!-- NESSE ID E NO data-bs-target A CIMA É PRECISO COLOCAR O NOME DO LIVRO -->
      <div class="modal fade" id="" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border: solid #449DD1; border-radius:10px">
            <div class="modal-header">
              <h5 class="modal-title">Titulo do livro</h5>
              <img data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer; width:40px;" src="img/icons8-close-window-50 (1).png" alt="">
            </div>
            <div class="modal-body">
              <h6>Sinopse:</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, id quod. Ut voluptatem aliquam soluta impedit ullam ab. Atque expedita nam nobis omnis odio debitis labore quis est illo impedit!</p>
              <h6 class="mt-5">Doado por:</h6>
            </div>
            <div class="modal-footer">
            <a class="container-fluid" href="{{ route('solicitacao.create') }}">
    <button type="button" class="botao">Contatar</button>
</a>

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

  <script>
    function filterBooks() {
      const searchValue = document.querySelector('input[type="search"]').value.toLowerCase();
      const books = document.querySelectorAll('.livro');

      books.forEach(book => {
        const title = book.querySelector('p').textContent.toLowerCase();

        if (title.includes(searchValue)) {
          book.style.display = 'block';
        } else {
          book.style.display = 'none';
        }
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
@endsection
