@extends('client.template.client')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade bg-light " data-ride="carousel"
        style="">
        <div class="carousel-inner">
            @foreach ($listgame as $game)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <img class="d-block mx-auto img-fluid w-30" src="{{ url('storage/' . $game->img) }}" alt="Image">
                    <div class="carousel-caption d-none d-md-block text-light" style="background-color: rgba(0,0,0,0.3)">
                        <h5>{{$game->name}}</h5>
                        <p>{{$game->desc}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev bg-dark" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only text-light">Previous</span>
        </a>
        <a class="carousel-control-next bg-dark" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only text-light">Next</span>
        </a>
    </div>
    <h1 class="my-4">Top Selling</h1>
    <table class="table">
        <thead>
            <th>Picture</th>
            <th>Game Title</th>
            <th>Game Desc</th>
            <th>Game Price</th>
            <th>Add to cart</th>
        </thead>
        <tbody>
            @foreach ($listgame as $game)
                <tr>
                    <td class="align-middle"><img src="{{ url('storage/' . $game->img) }}" alt="" style="max-width: 100px;"></td>
                    <td class="align-middle"><a class="btn" href="{{ route('shop.product', $game->id) }}">{{ $game->name }}</a></td>
                    <td class="align-middle">{{ $game->desc }}</td>
                    <td class="align-middle" class="uang">{{ $game->price }}</td>
                    <td class="align-middle"> <a class="btn btn-primary" href="{{ route('cart.tambah', ['id' => $game->id]) }}">Add to Cart</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <div class="d-grid gap-2 col-6 mx-auto"><button type="button" class="btn btn-outline-dark"><a href="#">Show
                        More</a></button></div>
            <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
    </main>
    </body>
@endsection

@section('extrajs')
    <script>
        $('.carousel').carousel()
    </script>
@endsection
