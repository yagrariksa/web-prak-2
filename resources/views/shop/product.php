<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $game->name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

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
        <div class="content container">
            <h1>{{$game->name}}</h1>
            <div id="carouselExampleIndicators" class="carouselslide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="bg2.jpeg" class="d-block w-100" alt="...">
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
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
            <div class="game-info">
                <div class="description">
                    <h1>About The Game</h1>
                    <hr>
                    <p>{{ $game->desc }}</p>
                </div>

                <div class="reviews">
                    <h1>Reviews</h1>
                    <hr>
                </div>
                <div class="system-req">
                    <h1>System Requirement</h1>
                    <hr>
                    <p>For System Requirement Click <a href="https://www.pcgamebenchmark.com/it-takes-two-system-requirements"">here</a></p>
                </div>
                <div class="buy">
                    <h1>Buy It Takes Two</h1>
                    <hr>
                    <div class="standard">
                        <h2>{{ $game->desc }}</h2>
                        <div class="price">
                            <h3>{{ $game->price }}</h2>
                            <button type="button" class="btn btn-dark">Add to Cart</button>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </main>
</body>
</html>