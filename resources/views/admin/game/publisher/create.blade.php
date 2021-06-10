@extends('admin.template.admin')

@section('title')
    game publisher
@endsection

@section('page-title')
    Add Game Publisher
@endsection

@section('page-subtitle')
    form untuk menambahkan Game Publisher / Game Developer
@endsection

@section('head')
    <link rel="stylesheet" href="{{ url('assets/css-admin/create.css') }}">
@endsection

@section('content')
    <form action="{{ route('game.publisher.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Publisher Name / Game Developer</label>
            <input type="text" name="name" id="name">
            @error('name')
                <small class="error">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn-submit btn-grad">
            Create
        </button>
    </form>
@endsection

@section('js')
    <script>
        document.querySelector('#game-pub-add').classList.add('active');

    </script>
@endsection
