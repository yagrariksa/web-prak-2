@extends('admin.template.admin')

@section('title')
    welcome
@endsection

@section('head')
    <link rel="stylesheet" href="{{url('/assets/css/list.css')}}">

@endsection

@section('page-title')
    <span>
        List Product - Book
    </span>
    <span>
        <a href="{{route('book.create')}}" class="btn-add" style="margin: 0 10px;">
            + Create New Book
        </a>
        <a href="{{route('book.author')}}" class="btn-add">
            + Create Author
        </a>
    </span>
@endsection

@section('content')
    <a class="card" href="{{route('book.show',2)}}">
        <img src="" alt="" class="card-image">
        <div class="card-body">
            <div class="card-title">Lord of The Rings</div>
            <div class="card-subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere
                asperiores temporibus aliquam, cum sunt eum quibusdam repudiandae nesciunt fugit ipsum!
            </div>
        </div>
    </a>
    
@endsection

@section('js')
    <script src="{{url('assets/js/list.js')}}"></script>
@endsection