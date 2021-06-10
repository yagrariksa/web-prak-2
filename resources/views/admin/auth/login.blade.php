<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ url('assets/css-admin/login.css') }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>

    <section>
        <div class="left">
            <span class="title">TumbasBarang</span>
            <span class="greetings">Welcome Admin</span>
            <span class="copyright">
                copyright 2020
            </span>
        </div>
        <div class="right">
            <span class="title">Login</span>
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Your Email ..."
                        value="{{ old('email') }}">
                    @error('email')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Your Password ...">
                    @error('password')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit">Login</button>
            </form>
            <span class="info">Doesn't Have an Account ? <a href="#" class="link">Register</a></span>
        </div>
    </section>
</body>

</html>
