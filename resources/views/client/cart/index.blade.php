@extends('client.template.client')

@section('title')
    Cart
@endsection

@section('extracss')
    <style>
        .grid {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .cart {
            display: flex;
            flex-direction: row;
            padding: 5px;
            gap: 10px;
            border: 1px solid black;
            align-items: center
        }

    </style>
@endsection

@section('content')
<div class="container">
    <h1>Your Shopping Cart</h1>
    @php
    $total = 0;
    @endphp
    @if (sizeof($listcart) > 0)
        <div class="grid">
            @foreach ($listcart as $item)
                <div class="col-md-7 col-lg-8 order-md-last">
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{ $item->game->name }}</h6>
                                <small class="text-muted">{{ $item->game->desc }}</small>
                            </div>
                            <div>
                                <h6 class="my-0">Rp. {{ $item->game->price }}</h6>
                                <a href="{{ route('cart.hapus', $item->id) }}"><small class="text-muted">Remove</small></a>
                            </div>
                        </li>
                    <img src="{{ url('storage/' . $item->game->img) }}" style="width: 50px" alt="">
                    <span>jumlah barang ingin dibeli : <strong>{{ $item->jumlah }}</strong></span> 
                </div>
                @php
                    $total = $total + $item->game->price * $item->jumlah;
                @endphp
            @endforeach
        </div>

        <div class="" style="margin: 15px 0">
            TOTAL HARGA : <strong class="uang"> {{ $total }}</strong>
        </div>
        <form action="{{ route('cart.checkout') }}" method="POST">
            @csrf
            <button class="w-80 btn btn-primary btn-dark" type="submit">Checkout</button>
        </form>
        <a href="{{route('client.shop')}}"><button class="w-80 btn btn-primary btn-primary">Continue Shopping</button></a>

    @else
        <h3 style="color: red">Keranjang anda kosong</h3>
    @endif
    </div>
@endsection

@section('extrajs')
    <script src="{{ url('assets/js/uang.js') }}"></script>
@endsection
