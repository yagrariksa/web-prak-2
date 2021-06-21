<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>NAVBAR</strong>
                </a>
            </div>
        </div>
    </header>
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
                    <td>Add to Cart</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-grid gap-2 col-6 mx-auto"><button type="button" class="btn btn-outline-dark"><a href="#">Show More</a></button></div>
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </main>
</body>
</html>