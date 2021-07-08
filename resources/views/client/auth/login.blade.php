@extends('client.template.client')
@section('content')
    <div class="d-flex justify-content-center mt-4 ">
        <div class="card">
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <form class="card-body  p-4" action="{{ route('client.login') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="username">Username :</label>
                    <input class="form-control" type="text" id="username" name="email" value="{{ old('email') }}"
                        placeholder="Your Username">
                    @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password :</label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                    @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" value="submit">Login</button>
            </form>
            <div class="card-footer">
                New to Tumbasbarang? <a href="{{ route('client.register') }}">Register</a>
            </div>
        </div>
    </div>
@endsection
