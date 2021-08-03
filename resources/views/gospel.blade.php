@extends('layouts.app')

@section('content')
<div id="banner-principal">
    <img class="w-100" src="{{ asset('/img/bg_gospel.png') }}"/>
</div>
@include('aboutgospel')
@include('patrocinio')
@include('participe')
@include('footer')
@endsection