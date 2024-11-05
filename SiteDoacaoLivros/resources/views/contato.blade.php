@extends('components.app')

@section('title', 'Página Inicial')

@section('content')
   <body>
    
    <hr class="mt-5" style="margin-bottom: 100px;">
    <div style="background-color:#ededec; margin-bottom: 30px;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="mt-4">Contate-nos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <p>Caso tenha alguma dúvida sobre como doar ou receber livros, ou se desejar saber mais sobre nossa missão, entre em contato conosco.</>
                </div>
            </div>
            <div class="row">
                <form action="">
                    <div class="row mt-4">
                        <div class="col-6 contato1">
                            <div class="row d-flex justify-content-end"><input type="text" placeholder="Nome"></div>
                            <div class="row mt-2 d-flex justify-content-end"><input type="text" placeholder="Email"></div>
                            <div class="row mt-2 d-flex justify-content-end"><input type="text" placeholder="Telefone"></div>
                        </div>
                        <div class="col-6 contato2 px-4">
                            <div class="row d-flex justify-content-start">
                            <textarea name="Digite sua mensagem aqui..." id="" placeholder="Digite sua mensagem aqui..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 mb-4 d-flex justify-content-center">
                        <button class="enviar">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="row">
                <p class="d-flex justify-content-center">Entre em contato conosco e faça parte dessa corrente do bem!</>
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
</body> 
@endsection


