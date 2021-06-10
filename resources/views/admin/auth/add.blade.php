@extends('admin.template.admin')

@section('title')
    Add Admin
@endsection

@section('page-title')
    Tambah Admin
@endsection

@section('content')

    <form action="{{ route('admin.add') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" id="name" placeholder="admin name">
        </div>

        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" id="username" placeholder="admin username">
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="admin password">
        </div>

        <button type="submit">Add Admin</button>
    </form>
@endsection

@section('js')
    <script>
        document.querySelector('#admin-add').classList.add('active');

    </script>
@endsection
