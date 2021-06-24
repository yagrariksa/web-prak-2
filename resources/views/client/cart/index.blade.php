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
    <h1>Cart</h1>
    @php
    $total = 0;
    @endphp
    @if (sizeof($listcart) > 0)
        <div class="grid">
            @foreach ($listcart as $item)
                <div class="cart">
                    <img src="{{ url('storage/' . $item->game->img) }}" style="width: 50px" alt="">
                    <h3>{{ $item->game->name }}</h3> |
                    <span>jumlah barang ingin dibeli : <strong>{{ $item->jumlah }}</strong></span> |
                    <a href="{{ route('cart.hapus', $item->id) }}">Hapus Item</a>
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
            <button type="submit">Checkout</button>
        </form>
    @else
        <h3 style="color: red">Keranjang anda kosong</h3>
    @endif
@endsection

@section('extrajs')
    <script src="{{ url('assets/js/uang.js') }}"></script>
@endsection
