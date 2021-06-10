@extends('admin.template.admin')

@section('title')
    Order
@endsection

@section('page-title')
    Order List
@endsection

@section('page-subtitle')
    Daftar order yang masuk, konfirmasi atau batalkan
@endsection

@section('head')
<link rel="stylesheet" href="{{url('assets/css-admin/order.css')}}">
    
@endsection

@section('content')
<div class="grid-system">
    <div class="card">
        <span class="user">user : <strong>rendo123</strong></span>
        <span class="card-title">game : <strong>NBA 2k21</strong></span>
        <span class="date">tanggal beli : <strong>24 Nov 2021</strong></span>
        <span class="price">harga : <strong>Rp 210.000</strong></span>
        <div class="card-action">
            <span class="btn btn-edit">Konfirmasi</span>
            <span class="btn btn-delete">Gagalkan</span>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#order-list').classList.add('active');
    </script>
@endsection