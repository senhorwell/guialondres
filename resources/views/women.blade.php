@extends('layouts.app')

@section('content')
<div id="banner-principal">
    <img class="w-100" src="{{ asset('/img/bg_women_awards.png') }}"/>
</div>
@include('aboutwomen')
@include('patrocinio')
@include('participe')
@include('footer')
@endsection