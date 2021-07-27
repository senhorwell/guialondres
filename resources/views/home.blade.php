@extends('layouts.app')

@section('content')
<div id="banner-principal">
    <img class="w-100" src="{{ asset('/img/banner-principal.PNG') }}"/>
</div>
<div id="about" class="container-fluid py-4">
    <div class="container justify-content-center">
        <h3 class="text-center w-100 font-weight-bold pb-3">Guia Londres Publicity</h3>
        <div class="d-inline-flex">
            <div class="col-7">
                <p>O Guia Londres faz parte da Planet Faith LTD que começou suas operações em 2013 em Londres Inglaterra</p>
                <p>Agenor A Jr é idealizador dos projetos Guia Londres networking dentro da comunidade latina americana em Londres e apresentou o melhor da comunidade para a comunidade Britânica em 2016 quando foi lançado o Guia Londres Awards.</p>
                <p>Temos mais de 50 mil votos, com mais de 100 mil visualizações em nossas enquetes, com distribuição online em toda Inglaterra e internacionalmente.</p>
                <p>Premiamos mais de 600 empresas e pessoas até 2019 com inúmeros testemunhos de gratidão e resultados. Portanto hoje trabalhamos em 2 frentes, Guia Londres Publicity e Guia Londres awards.</p>
            </div>
            <div class="col-5">
                <img class="awards" src="{{ asset('/img/awards.PNG') }}"/>
            </div>
        </div>
    </div>
</div>
<div id="awards" class="container-fluid">
    <div class="container justify-content-center">
    </div>
</div>
<div id="testemunhos" class="container-fluid">
    <div class="row justify-content-center flex-column align-items-center py-3">
        <h3 class="text-center w-100 font-weight-bold py-3">Testemunho</h3>
        <div class="container">
            <div class="item d-flex justify-content-center align-items-center">
                <div class="card card-text p-2 overflow-hidden">
                    <h4 class="p-0 m-0">lorem Ipsum</h4>
                    <p class="p-0 m-0 gray">Lorem Ipsum<p>
                    <p class="p-0 m-0 text gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna<p>
                </div>
                <div class="card card-video">
                    <video controls>
                        <source src="{{ asset('/video/londres.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="hall" class="container-fluid">
    <div class="row justify-content-center">
        <h3>Hall da Fama</h3>
    </div>
</div>
<div id="participe" class="container-fluid">
    <div class="row justify-content-center">
        <h3>Participe</h3>
    </div>
</div>
@endsection
