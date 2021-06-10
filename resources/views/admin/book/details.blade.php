@extends('admin.template.admin')

@section('title')
    welcome
@endsection

@section('page-title')
    Details Product - Book
@endsection

@section('head')
    <link rel="stylesheet" href="{{ url('assets/css/details.css') }}">
@endsection

@section('js')
    <script src="{{ url('assets/js/details.js') }}"></script>
@endsection

@section('content')
    <div class="image-preview">
        <img class="preview" src="{{ url('assets/image/dump-image.png') }}" alt="">
        <div class="img-thumb-list">
            <img src="{{ url('assets/image/dump-image.png') }}" alt="" class="thumb">
            <img src="{{ url('assets/image/dump-image.png') }}" alt="" class="thumb">
            <img src="{{ url('assets/image/dump-image.png') }}" alt="" class="thumb">
            <img src="{{ url('assets/image/dump-image.png') }}" alt="" class="thumb">
            <img src="{{ url('assets/image/dump-image.png') }}" alt="" class="thumb">
            <img src="{{ url('assets/image/dump-image.png') }}" alt="" class="thumb">
        </div>
    </div>

    <div class="text-details">
        <div class="title">Lord of The Rings</div>

        <div class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum voluptatibus quae
            nihil voluptate magni repellendus eaque accusantium fuga impedit incidunt debitis dolorum
            numquam culpa id voluptas recusandae animi ducimus et, distinctio dicta consequatur tempore est
            saepe? Consequatur, natus. Nihil, ullam minus quos perferendis est beatae sequi odit et
            perspiciatis fuga?</div>

        <div class="price">PRICE : Rp 100.000 ,00</div>

        <div class="button-list">
            <a href="#" class="button edit">edit</a>
            <a href="#" class="button delete">delete</a>
        </div>
    </div>
@endsection
