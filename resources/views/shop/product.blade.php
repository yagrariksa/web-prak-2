@extends('client.template.client')

@section('content')

    <h1>{{ $game->name }}</h1>
    <div id="carouselExampleIndicators" class="carouselslide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('storage/' . $game->img) }}" class="d-block w-20" alt="...">
            </div>
            <div class="carousel-item">
                <img src="#" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="#" class="d-block w-100" alt="...">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
        </div>
    </div>
    <div class="game-info">
        <div class="description">
            <p>About The Game</p>
            <p class="h3">{{ $game->desc }}</p>
        </div>
        <hr>
        <div class="system-req">
            <p>System Requirement</p>
            <p class="h3">For System Requirement Click <a
                    href="https://www.pcgamebenchmark.com/it-takes-two-system-requirements">here</a></p>
        </div>
        <hr>
        <div class=" buy">
            <p>Buy {{ $game->name }}</p>
            <div class="standard">
                <h2>{{ $game->desc }}</h2>
                <div class="price">
                    <h3> Rp {{ $game->price }}</h2>
                        <a href="{{ route('cart.tambah', ['id' => $game->id]) }}"><button type="button"
                                class="btn btn-dark">Add to Cart</button></a>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection
