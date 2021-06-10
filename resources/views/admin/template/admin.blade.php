<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>

    <!-- styling -->
    <link rel="stylesheet" href="{{ url('assets/css-admin/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css-admin/nav.css') }}">

    <!-- font -->
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> --}}


    @yield('head')
</head>

<body>

    <div class="topnav">
        menu
    </div>
    <div class="sidenav">
        <div class="top">
            <div class="header" onclick="location.href='{{ route('admin.home') }}';" style="cursor: pointer ">
                <span class="title">TumbasBarang
                </span>
                <span class="subtitle">Admin</span>
            </div>
            <div class="menu">
                <div class="menu-group">
                    <span class="menu-title collapse">
                        Game
                        <span class="col-positive">+</span>
                        <span class="col-negative">-</span>
                    </span>
                    <hr>
                    <a href="{{ route('game.create') }}" class="menu-a" id="game-add">Tambah Game</a>
                    <a href="{{ route('game.index') }}" class="menu-a" id="game-list">List Game</a>
                    <a href="{{ route('game.publisher.create') }}" class="menu-a" id="game-pub-add">Tambah
                        Publisher</a>
                    <a href="{{ route('game.publisher.index') }}" class="menu-a" id="game-pub-list">List Publisher</a>
                </div>
                {{-- <div class="menu-group">
                    <span class="menu-title">
                        Book
                        <span class="col-positive">+</span>
                        <span class="col-negative">-</span>
                    </span>
                    <hr>
                    <a href="#" class="menu-a">Tambah Book</a>
                    <a href="#" class="menu-a">List Book</a>
                    <a href="#" class="menu-a">Tambah Writer</a>
                    <a href="#" class="menu-a">List Writer</a>
                </div>
                <div class="menu-group">
                    <span class="menu-title">
                        Movie
                        <span class="col-positive">+</span>
                        <span class="col-negative">-</span>
                    </span>
                    <hr>
                    <a href="#" class="menu-a">Tambah Movie</a>
                    <a href="#" class="menu-a">List Movie</a>
                    <a href="#" class="menu-a">Tambah Producer</a>
                    <a href="#" class="menu-a">List Producer</a>
                </div>
                <div class="menu-group">
                    <span class="menu-title">
                        Music
                        <span class="col-positive">+</span>
                        <span class="col-negative">-</span>
                    </span>
                    <hr>
                    <a href="#" class="menu-a">Tambah Music</a>
                    <a href="#" class="menu-a">List Music</a>
                    <a href="#" class="menu-a">Tambah Singer</a>
                    <a href="#" class="menu-a">List Singer</a>
                </div> --}}
                <div class="menu-group">
                    <span class="menu-title">
                        Lain-Lain
                        <span class="col-positive">+</span>
                        <span class="col-negative">-</span>
                    </span>
                    <hr>
                    <a href="{{ route('other.order') }}" class="menu-a" id="order-list">Daftar Order</a>
                    <a href="{{ route('admin.add') }}" class="menu-a" id="admin-add">Tambah Admin</a>
                    <a href="{{ route('admin.list') }}" class="menu-a" id="admin-list">list Admin</a>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.logout') }}" class="footer">
            Logout
        </a>
    </div>
    <div class="content">
        <span class="page-title">@yield('page-title')</span>
        <span class="page-subtitle">@yield('page-subtitle')</span>


        @if ($message = Session::get('success'))
            <div class="flash success">
                {{ $message }}
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="flash error">
                {{ $message }}
            </div>
        @endif

        @if ($message = Session::get('info'))
            <div class="flash info">
                {{ $message }}
            </div>
        @endif

        @if ($message = Session::get('warning'))
            <div class="flash warning">
                {{ $message }}
            </div>
        @endif

        @yield('content')
    </div>


    @yield('js')
    <script src="{{ url('assets/js-admin/nav.js') }}"></script>
</body>

</html>
