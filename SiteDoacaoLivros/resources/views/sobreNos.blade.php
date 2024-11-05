@extends('components.app')

@section('title', 'Sobre Nós')

@section('content')
<hr class="mt-5" style="margin-bottom: 70px;">

<div class="container">
    <div class="row">
        <h1 class="d-flex justify-content-center mt-5" style="font-family:'Times New Roman', Times, serif;">Sobre nós</h1>
    </div>
    <div class="row mt-4 d-flex justify-content-center" style="border: solid; border-width: 1px; border-color: gray; margin: 5px;">
        <div class="col-xxl-6 col-xl-6 col-lg-12 col-sm-12" style="padding: 50px">
            <p>Nascemos da paixão por livros e da vontade de promover a leitura e a educação. Nossa empresa foi fundada por um grupo de leitores que acreditavam no poder dos livros para transformar vidas. Iniciamos como uma pequena iniciativa de doação de livros usados, permitindo que leitores pudessem compartilhar histórias, conhecimento e cultura com outros.</p>
            <p>Com o tempo, percebemos que muitos também buscavam um acesso temporário a livros. Foi assim que decidimos expandir, oferecendo um serviço de aluguel, permitindo que todos possam ler mais com um custo acessível e sem acumular tantos exemplares em casa.</p>
            <p>Hoje, nossa missão é clara: facilitar o acesso à leitura, seja por meio da doação ou do aluguel. Acreditamos que cada livro merece uma nova vida e que cada leitor merece a chance de explorar novos mundos. Junte-se a nós e faça parte dessa história!</p>
        </div>
        <div class="col-auto d-none d-md-block align-self-center" style="padding-bottom: 10px;">
            <img src="{{ asset('images/pexels-pixabay-159711.jpg') }}" style="width: 500px;" alt="Imagem de livros">
        </div>
    </div>
    <div class="row mt-5">
        
    </div>
    <div class="row mt-2 d-flex justify-content-center" style="gap: 40px;">
        <div class="col-auto">
            <img class="img-fluid" src="{{ asset('images/pexels-rickyrecap-1907785.jpg') }}" alt="Imagem inspiradora" style="width:300px">
        </div>
        <div class="col-auto" style="border: solid; border-width: 1px; border-color: gray; width: 300px; height: 450px;">
            <h1 class="mt-4" style="font-family:'Times New Roman', Times, serif;">Missão</h1>
            <p class="mt-4" style="padding: 0px 50px 0px 0px;">Nossa missão é democratizar a leitura, proporcionando a oportunidade de cada livro encontrar novos leitores. Seja por meio da doação ou do aluguel, queremos que mais pessoas tenham acesso a conhecimento e cultura, ampliando seus horizontes e estimulando o hábito de ler.</p>
        </div>
        <div class="col-auto" style="border: solid; border-width: 1px; border-color: gray; width: 300px; height: 450px;">
            <h1 class="mt-4" style="font-family:'Times New Roman', Times, serif;">Objetivo</h1>
            <p class="mt-4" style="padding: 0px 50px 0px 0px;">Nosso objetivo é tornar a leitura acessível, prática e sustentável, criando um ambiente onde leitores possam se conectar, compartilhar e contribuir para um mundo mais culto e informado.</p>
        </div>
    </div>
</div>

<div class="link-top">
    <a href="#">
        <img src="img/icons8-up-squared-50.png" alt="Voltar ao topo" style="width:50px;">
    </a>
</div>
@endsection
