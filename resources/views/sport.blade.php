@extends('layouts.app')

@section('content')
<div id="banner-principal">
    <img class="w-100" src="{{ asset('/img/bg_sport_league.png') }}"/>
</div>
@include('aboutsport')
@include('patrocinio')
@include('participe')
@include('footer')
@endsection