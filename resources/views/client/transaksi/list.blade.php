@extends('client.template.client')

@section('title')
    List Transaksi
@endsection

@section('extracss')

@endsection

@section('content')
    <h1>List Transaksi</h1>
    <div class="row"></div>
    @foreach ($transaksis as $transaksi)
        <div class="col-12 bg-light mb-4 border border-dark">
            <div class="row bg-dark text-light p-2">
                <h4>Invoice : {{ $transaksi->id }} - {{ $transaksi->created_at }}</h4>
            </div>
            <div class="row p-3">
                <div class="col-2">
                    <img src="{{ url('storage/' . $transaksi->barang[0]->img) }}" class="border border-dark" alt=""
                        style="width: 100px; height: 100px">
                </div>
                <div class="col">
                    <h3>Total Biaya beli : <span class="uang">{{ $transaksi->total_biaya }}</span> |
                        {{ $transaksi->total_barang }} barang dibeli
                    </h3>
                </div>
                <div class="col-3">
                    <a href="{{ route('transaksi.detail', $transaksi->id) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>

    @endforeach
@endsection

@section('extrajs')
    <script src="{{ url('/assets/js/uang.js') }}">
    </script>
@endsection
