@extends('admin.template.admin')

@section('title')
    Craete Book
@endsection

@section('page-title')
    Create Product - Book
@endsection

@section('head')
    <link rel="stylesheet" href="{{ url('assets/css/form.css') }}">
@endsection

@section('content')
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input class="form-field" type="text" id="exampleOne" placeholder="Book Name">
            <label for="#exampleOne">Book Name</label>
        </div>
        <div class="form-group">
            <select name="" id="exampleTwo" class="form-field">
                <option value="satu">satu</option>
                <option value="dua">dua</option>
                <option value="tiga">tiga</option>
            </select>
            <label for="#exampleTwo">Book Author</label>
        </div>
        <div class="form-group">
            <textarea name="" id="example3" class="form-field"></textarea>
            <label for="#example3">Book Desc</label>
        </div>
        <div class="form-group">
            <input class="form-field" type="number" id="example4" placeholder="Book Price">
            <label for="#example4">Book Price</label>
        </div>

        <div class="form-group">
            <input class="custom-file-input form-field" type="file" id="docpicker" accept=".jpg,.jpeg,.png">
            <label for="#dicoucker">Upload</label>
        </div>

        <div class="form-group submit">
            <button type="submit" class="btn btn-submit">Submit</button>
        </div>
    </form>
@endsection
