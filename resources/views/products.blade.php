@extends('layout')

@section('title', 'Добро пожаловать!')
{{-- border: 2px solid #007bff; /* Blue border */ --}}
@section('content')
    <div class="jura ms-3 mt-3">
        <h2>
            Продукция доступная к предзаказу
        </h2>
    </div>
    <div class="products-container d-flex mt-5">
        <div class="card me-5 ms-5" style="width: 18rem;">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="min-width: 200px; height: 300px; background-color: #c9c6c6" src="{{ asset('images/speaky-render-01.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item">
                        <img style="min-width: 200px; height: 300px; background-color: #333" src="{{ asset('images/speaky-render-02.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item">
                        <img style="min-width: 200px; height: 300px; background-color: #000" src="{{ asset('images/speaky-body.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Speaky</h5>
                <p class="card-text jura">Устройство для распознования жестов и воспроизведения их в слова</p>
                <a href="#" class="btn btn-primary"><i class="bi bi-info-square-fill"></i></a>
                <a href="#" class="btn btn-secondary"><i class="bi bi-cart-check-fill"></i></a>
            </div>
        </div>

        <div class="card me-2" style="width: 18rem;">
            <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="min-width: 200px; height: 300px; background-color: #000" src="{{ asset('images/speaky-glasses-01.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item">
                        <img style="min-width: 200px; height: 300px; background-color: #000" src="{{ asset('images/speaky-glasses-05.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item">
                        <img style="min-width: 200px; height: 300px; background-color: #000" src="{{ asset('images/speaky-glasses-04.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Speaky Glasses</h5>
                <p class="card-text jura">
                    Устройство для распознования голоса и воспроизведения слов в текст.
                </p>
                <a href="#" class="btn btn-primary"><i class="bi bi-info-square-fill"></i></a>
                <a href="#" class="btn btn-secondary"><i class="bi bi-cart-check-fill"></i></a>
            </div>
        </div>
        {{--<div class="card ms-2" style="width: 18rem;">
            <video autoplay loop muted playsinline>
                <source src="{{ asset('gif/0001-0090.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img src="{{ asset('gif/0001-0090.mp4') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>--}}
    </div>
@endsection
