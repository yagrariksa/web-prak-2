@extends('client.template.client')

<body>
@section('content')
<main>
        <div class="album py-5 bg-light">
            <div class="container">
                <h1>Trending in Game</h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="bg4.jpeg" alt="">
                            <div class="card-body">
                                <h2 class="card-text">Cuphead</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="bg1.jpeg" alt="">
                            <div class="card-body">
                                <h2 class="card-text">Sekiro Shadow Die Twice</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="bg3.jpeg" alt="">
                            <div class="card-body">
                                <h2 class="card-text">Red Dead Redemption</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>Top Selling</h1>
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
                    <td><img src="{{ url('storage/' . $game->img) }}" alt=" " style="max-width: 125px;"></td>
                    <td><a class="btn" href="{{ route('shop.product', $game->id) }}">{{ $game->name }}</a></td>
                    <td>{{ $game->desc }}</td>
                    <td class="uang">{{ $game->price }}</td>
                   <td> <a href="{{route('cart.tambah',['id'=>$game->id])}}">Add to Cart</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-grid gap-2 col-6 mx-auto"><button type="button" class="btn btn-outline-dark"><a href="#">Show More</a></button></div>
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </main>
</body>
</html>