@extends('layouts.app')

@section('content')
<div id="bannerHome" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#bannerHome" data-slide-to="0" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('/img/bg_home_guia.png') }}" alt="Guia Londres"/>
      <img class="d-block logo" src="{{ asset('/img/logo.png') }}" alt="Logo"/>
      <p>A central de negócios<br>para brasileiros em Londres</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#bannerHome" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#bannerHome" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
@include('aboutpublicity')
@include('awards')
@include('testemunho')
@include('hall')
@include('footer')
@endsection
