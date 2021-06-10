@extends('admin.template.admin')

@section('title')
    game
@endsection

@section('page-title')
    Create game
@endsection

@section('page-subtitle')
    mendaftarkan suatu game baru
@endsection

@section('head')
    <link rel="stylesheet" href="{{ url('assets/css-admin/create.css') }}">
@endsection

@section('content')
    <form action="{{ route('game.store') }}" method="POST" enctype="multipart/form-data" id="main-form">
        @csrf
        @isset($data)
            
        @endisset
        <div class="form-group">
            <label for="field-name">Name</label>
            <input type="text" name="name" id="field-name" placeholder="Game name" value="{{ old('name') }}">
            @error('name')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="field-publisher">Game Publisher</label>
            <select name="publisher" id="field-publisher" class="form-field">
                <option value="" disabled {{ old('publisher') ? '' : 'selected' }} id="id-label">Pilih Publisher</option>
                @foreach ($publisher as $item)
                    <option id="{{ 'id-' . $item->id }}" value="{{ $item->id }}"
                        {{ old('publisher') == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}</option>
                @endforeach
            </select>
            @error('publisher')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="field-desc">Game Desc</label>
            <textarea name="desc" id="field-desc" class="form-field">{{ old('desc') }}</textarea>
            @error('desc')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="field-price">Game Price</label>
            <input class="form-field" type="number" name="price" id="field-price" placeholder="Book Price"
                value="{{ old('price') }}">
            @error('price')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="field-file">Upload</label>
            <input class="custom-file-input form-field" name="img" type="file" id="field-file" >
            @error('img')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn-submit btn-grad">
            Create
        </button>
    </form>
@endsection

@section('js')
    <script>
        document.querySelector('#game-add').classList.add('active');

    </script>
    @if (Session::has('edit'))
        @if (Session::get('edit'))
            @if (isset($data))
                <p class="hide" id="data-edit" data-url="{{ route('game.update', $data->id) }}"
                    data-name="{{ $data->name }}" data-publisher="{{ 'option#id-' . $data->pub_id }}"
                    data-desc="{{ $data->desc }}" data-price="{{ $data->price }}"></p>
                <script>
                    const form = document.querySelector('form#main-form');
                    const dataedit = document.querySelector('p#data-edit');

                    form.setAttribute('action', dataedit.dataset.url);
                    form.querySelector('#field-name').value = dataedit.dataset.name;
                    form.querySelector('#field-price').value = dataedit.dataset.price;
                    form.querySelector('#field-desc').textContent = dataedit.dataset.desc;
                    form.querySelector('#id-label').removeAttribute('selected');
                    form.querySelector(dataedit.dataset.publisher).setAttribute('selected', 'true');

                    document.querySelector('span.page-title').textContent = "Edit Game";
                    document.querySelector('span.page-subtitle').textContent =
                        "Mengganti informasi dari game yang sudah ada";
                    document.querySelector('#game-add').textContent = "Edit Game";

                </script>
            @endif
        @endif
    @endif
@endsection
