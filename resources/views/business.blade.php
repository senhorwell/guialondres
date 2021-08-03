@extends('layouts.app')

@section('content')
<div id="banner-principal">
    <img class="w-100" src="{{ asset('/img/bg_business_awards.png') }}"/>
</div>
@include('aboutbusiness')
@include('patrocinio')
@include('participe')
@include('footer')
@endsection