@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="logo">
            <img src="image/logosuperbello.png" style="width: 200px" alt="">
        </div>
        <h1 class="display-5 fw-bold">
                Benvenuto in questa pagina bellissima creata da Alessandro, Anas, Arianna, Francesco, Giovanni J. e Giuseppe.
            </h1>


            <p class="col-md-8 fs-4"></p>
            <a href="{{ route('login') }}" class="btn btn-outline-primary" type="button">Vai al login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary" type="button">Registrati</a>
    </div>
</div>

<div class="content">
    <div class="container text-black">

    </div>
</div>
@endsection
