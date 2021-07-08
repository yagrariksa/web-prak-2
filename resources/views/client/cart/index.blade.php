@extends('client.template.client')

@section('title')
    Cart
@endsection


@section('content')
    <h1 class="mb-4">Your Shopping Cart</h1>
    @php
    $total = 0;
    @endphp
    @if (sizeof($listcart) > 0)
        @foreach ($listcart as $item)
            @php
                $subtotal = $item->game->price * $item->jumlah;
            @endphp
            <div class="row bg-light p-4 border-dark border mb-2">
                <div class="col-2">
                    <img src="{{ url('storage/' . $item->game->img) }}" alt="" style="width: 50px">
                </div>
                <div class="col">
                    <h6 class="my-0">{{ $item->game->name }}</h6>
                    <small class="text-muted">{{ $item->game->desc }}</small>
                </div>
                <div class="col-4">
                    <h6 class="my-0">Rp {{ $item->game->price }}</h6>
                    <h6>jumlah: <strong>{{ $item->jumlah }}</strong></h6>
                    <h6>Subtotal ={{ $subtotal }}</h6>
                    <a class="btn btn-warning" href="{{ route('cart.hapus', $item->id) }}">Remove</a>
                </div>
            </div>
            @php
                $total = $total + $item->game->price * $item->jumlah;
            @endphp
        @endforeach

        <div class="row my-4 p-3 bg-light border border-primary">
            <div class="col-3">
                TOTAL HARGA : <strong class="uang"> {{ $total }}</strong>
            </div>

            <form class="col" action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button class="btn btn-primary" type="submit">Checkout</button>
                <a class="btn btn-dark" href="{{ route('client.shop') }}">Continue Shopping</a>
            </form>
        </div>


    @else
        <h3 style="color: red">Keranjang anda kosong</h3>
    @endif
    </div>
@endsection

@section('extrajs')
    <script src="{{ url('assets/js/uang.js') }}"></script>
@endsection
