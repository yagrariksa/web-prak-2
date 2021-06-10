<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <h1>login</h1>

    <form action="{{ route('client.login') }}" method="post">
        @csrf
        <div class="input-group">
            <label for="username">username</label>
            <input type="text" id="username" name="email" value="{{old('email')}}">
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-group">
            <label for="password">password</label>
            <input type="password" id="password" name="password">
            @error('password')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">LOGIN</button>
    </form>

    <a href="{{route('client.register')}}">Register</a>
</body>

</html>
