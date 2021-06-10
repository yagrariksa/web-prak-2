@extends('admin.template.admin')

@section('title')
    game publisher
@endsection

@section('page-title')
    List Game Publisher
@endsection

@section('page-subtitle')
    daftar Game Publisher / Game Developer
@endsection

@section('head')

    <link rel="stylesheet" href="{{ url('assets/css-admin/table.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css-admin/create.css') }}">
@endsection

@section('content')
    <div class="table-content">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Publisher</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $pub)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td class="content-single-table" data-url="{{route('game.publisher.update',$pub->id)}}">{{$pub->name}}</td>
                    <td>
                        <span class="btn btn-edit">Edit</span>
                        <span class="btn btn-delete" data-url="{{route('game.publisher.destroy',$pub->id)}}">Delete</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="#" method="POST" class="hide" id="form-edit">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <input type="hidden" name="id" id="id">
            <button type="submit" class="btn-submit btn-grad">
                Edit
            </button>
        </form>
    </div>

    <form class="hide" action="#" method="POST" id="form-delete">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('js')
    <script src="{{ url('assets/js-admin/table.js') }}"></script>
    <script>
        document.querySelector('#game-pub-list').classList.add('active');

    </script>
@endsection
