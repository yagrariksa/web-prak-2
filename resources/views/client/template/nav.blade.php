
<header class="site-header sticky-top">
<div class="p-3 bg-dark text-white">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('client.shop')}}" class="nav-link px-2 text-white"><strong>Store</strong></a></li>
            @if (Auth::user())
            <li><a href="{{ route('cart.index') }}" class="nav-link px-2 text-white"><strong>Cart</strong></a></li>
            <li><a href="{{route('client.profile',['id'=>Auth::user()->id])}}" class="nav-link px-2 text-white"><strong>My Profile</strong></a></li>
            <li><a href="{{ route('transaksi.list') }}" class="nav-link px-2 text-white"><strong>Transaksiku</strong></a></li>
            @endif
        </ul>
        @if (Auth::user())
        <div class="text-end">
            <a href="{{ route('client.logout') }}"><button type="button" class="btn btn-outline-light me-2">Logout</button></a>
        </div>
        @else
        <div class="text-end">
            <a href="{{ route('client.login') }}"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
            <a href="{{ route('client.register') }}"><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
        @endif
    </div>
</div>
</header>