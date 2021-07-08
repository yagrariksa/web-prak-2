@extends('client.template.client')

@section('content')
    <div class="d-flex justify-content-center mt-4">
        <div class="card">
            <div class="card-header">
                <h1>Register</h1>
            </div>
            <form class="card-body p-4" action="{{ route('client.register') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Name">
                    @error('name')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" id="username" name="email" value="{{ old('email') }}"
                        placeholder="Email">
                    @error('email')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                    @error('password')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="pwd">Password Confirmation</label>
                    <input class="form-control" type="password" id="pwd" name="password_confirmation"
                        placeholder="Re-Type Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <div class="card-footer">
                Already have an Account? <a href="{{ route('client.login') }}">Login</a>
            </div>
        </div>
    @endsection
