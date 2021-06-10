@extends('client.template.client')

@section('title')
    Cart
@endsection

@section('extracss')
    <style>
        table {
            margin-top: 50px;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 3px 8px;
            border: 1px solid black;
        }

        td img {
            width: 50px;
        }

    </style>

@endsection

@section('content')
    <h1>Detail Transaksi</h1>

    <div class="">
        Total Harga : <strong class="uang">{{ $transaksi->total_biaya }}</strong>
        <br>
        Total Barang : <strong class="">{{ $transaksi->total_barang }}</strong>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>game</th>
                <th>img</th>
                <th>token</th>
                <th>harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi->barang as $game)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $game->name }}</td>
                    <td><img src="{{ url('storage/' . $game->img) }}" alt=""></td>
                    <td>{{ $game->token }}</td>
                    <td class="uang">{{ $game->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


@section('extrajs')
    <script src="{{ url('assets/js/uang.js') }}">
    </script>
@endsection
