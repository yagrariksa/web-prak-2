@extends('client.template.client')

@section('title')
    Detail Transaksi
@endsection

@section('content')
    <h1>Detail Transaksi</h1>
    @foreach ($transaksi->barang as $game)
        <div class="row bg-light p-4 border-dark border mb-2">
            <div class="col-2">
                <img src="{{ url('storage/' . $game->img) }}" alt="" style="width: 50px">
            </div>
            <div class="col">
                <h6 class="my-0">{{ $game->name }}</h6>
                <small class="text-muted">{{ $game->desc }}</small>
            </div>
            <div class="col-4">
                <h6 class="my-0">Rp {{ $game->price }}</h6>
            </div>
        </div>
    @endforeach
    <div class="">
        Total Harga : <strong class="uang">{{ $transaksi->total_biaya }}</strong>
        <br>
        Total Barang : <strong class="">{{ $transaksi->total_barang }}</strong>
    </div>


@endsection


@section('extrajs')
    <script src="{{ url('assets/js/uang.js') }}">
    </script>
@endsection
