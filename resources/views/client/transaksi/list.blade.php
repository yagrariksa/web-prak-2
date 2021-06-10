@extends('client.template.client')

@section('title')
    Cart
@endsection

@section('extracss')
    <style>
        .box-list {
            padding: 10px;
            margin: 10px;
            border: solid black 1px;
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .box-list img {
            width: 100px;
        }

    </style>
@endsection

@section('content')
    <h1>List Transaksi</h1>
    @foreach ($transaksis as $transaksi)
        <div class="box-list">
            <img src="{{ url('storage/' . $transaksi->barang[0]->img) }}" alt="">
            <h3>Total Biaya beli : <span class="uang">{{ $transaksi->total_biaya }}</span> |
                {{ $transaksi->total_barang }} barang dibeli
            </h3>
            <a href="{{ route('transaksi.detail', $transaksi->id) }}">
                <button>DETAILS</button>
            </a>
        </div>
    @endforeach
@endsection

@section('extrajs')
    <script src="{{ url('/assets/js/uang.js') }}">
    </script>
@endsection
