@extends('admin.template.admin')

@section('title')
    game
@endsection

@section('page-title')
    List game
@endsection

@section('page-subtitle')
    daftar game yang akan dipasarkan
@endsection

@section('head')
    <link rel="stylesheet" href="{{url('assets/css-admin/list.css')}}">
@endsection

@section('content')
<div class="grid-system">
    @foreach ($game as $g)
    <div class="card">
        <div class="card-img">
            <img src="{{url('storage/' . $g->img)}}" alt="{{$g->img}}">
        </div>
        <div class="card-body">
            <span class="card-title">{{$g->name}}</span>
            <span class="card-desc">
                {{$g->desc}}</span>
            <span class="card-auth">{{$g->publisher->name}}</span>
            <span class="card-price"></span>
            <span class="card-action">
                <a href="{{route('game.edit', $g->id)}}" class="btn-edit btn-badge">Edit</a>
                <a href="{{route('game.destroy', $g->id)}}" class="btn-delete btn-badge modal-btn-trigger"
                data-modal="#modal-delete" data-title="title">Delete</a>
            </span>
        </div>
    </div>
    @endforeach
    
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#game-list').classList.add('active');
    </script>

@endsection
