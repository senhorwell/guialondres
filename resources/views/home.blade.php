@extends('layouts.app')

@section('content')
<div id="banner-principal">
    <img class="w-100" src="{{ asset('/img/banner-principal.PNG') }}"/>
</div>
@include('aboutpublicity')
@include('awards')
@include('testemunho')
@include('hall')
@include('footer')
@endsection
