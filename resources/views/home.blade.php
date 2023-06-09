@extends('layouts.app')
@section('content')

<header class="py-5 bg-panna">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-team1  mb-4"><div class="text-uppercase">Design &middot; Development &middot; Fun</div></div>
                    <div class="fs-3 fw-light text-muted">Get ready</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Benvenuto!</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('login') }}" type="button">Vai al login</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('register') }}" type="button">Registrati</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" src="https://img.freepik.com/free-vector/skull-gaming-with-joy-stick-emblem-modern-style_32991-492.jpg"/>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Us</span></h2>
                    <p class="lead fw-light mb-4">Questa pagina bellissima è stata creata da Alessandro, Anas, Arianna, Francesco, Giovanni J. e Giuseppe.</p>
                    <p class="text-muted">Made with &hearts;</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<!-- Footer-->
<footer class="bg-white border-top py-4 mt-auto">
<div class="container px-5">
    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
        <div class="col-auto">
            <a class="small" href="#!">Privacy</a>
            <span class="mx-1">&middot;</span>
            <a class="small" href="#!">Terms</a>
            <span class="mx-1">&middot;</span>
            <a class="small" href="#!">Contact</a>
        </div>
    </div>
</div>
</footer>

{{-- <div class="bg-height p-5 mb-4 bg-light">
    <div class="px-3 py-5 bg-team rounded-3 col-6">
        <div class="logo">
            <img src="image/logosuperbello.png" style="width: 200px" alt="">
        </div>
        <h1 class="display-5 fw-bold"> Benvenuto</h1>
        <p>Questa pagina bellissima è stata creata da Alessandro, Anas, Arianna, Francesco, Giovanni J. e Giuseppe.</p>
        <p class="col-md-8 fs-4"></p>
        <a href="{{ route('login') }}" class="btn btn-outline-primary" type="button">Vai al login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary" type="button">Registrati</a>
    </div>
    <div class="col-6">

    </div>
</div> --}}

@endsection
