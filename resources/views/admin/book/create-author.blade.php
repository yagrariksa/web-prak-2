@extends('admin.template.admin')

@section('title')
    Craete Author
@endsection

@section('page-title')
    Create Author - Book
@endsection

@section('head')
    <link rel="stylesheet" href="{{ url('assets/css/form.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/table.css') }}">
@endsection

@section('content')
    <table class="table-owner">
        <thead>
            <tr>
                <th>#</th>
                <th>Author Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Eko</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Booyah</td>
            </tr>
        </tbody>
    </table>
    <form action="{{ route('book.author.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input class="form-field" type="text" id="exampleOne" placeholder="Book Name">
            <label for="#exampleOne">Author Name</label>
        </div>

        <div class="form-group submit">
            <button type="submit" class="btn btn-submit">Submit</button>
        </div>
    </form>
@endsection
