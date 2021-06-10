@extends('client.template.client')

@section('title')
    Dashboard
@endsection

@section('extracss')
    <style>
        .grid {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 5px;
        }

        .card {
            padding: 5px;
            border: solid 1px black;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

    </style>
@endsection

@section('content')
    <h1>Dashboard</h1>
    <hr>
    <div class="grid">
        @foreach ($listgame as $game)
            <div class="card">
                <img src="{{ url('storage/' . $game->img) }}" alt="" style="width: 100px">
                <h3>{{ $game->name }}</h3>
                <p>{{ $game->desc }}</p>
                <h4 class="uang">{{ $game->price }}</h4>
                <a href="{{ route('cart.tambah', $game->id) }}">Add to Cart</a>
            </div>
        @endforeach
    </div>

@endsection


@section('extrajs')
    <script src="{{ url('assets/js/uang.js') }}">

    </script>
@endsection
