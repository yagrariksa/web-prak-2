<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @yield('extracss')
</head>

<body>
    @include('client.template.nav')

    @if (Session::has('error'))
        <h4 style="color: red">{{ Session::get('error') }}</h4>
    @endif

    @if (Session::has('success'))
        <h4 style="color: green">{{ Session::get('success') }}</h4>
    @endif

    @yield('content')

    @yield('extrajs')
</body>

</html>
