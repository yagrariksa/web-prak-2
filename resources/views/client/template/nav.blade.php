@if (Auth::user())
    <h4>Halo, {{ Auth::user()->name }}</h4>
@endif
<ul>
    <li><a href="{{ route('client.home') }}">Dashboard</a></li>
    @if (Auth::user())
        <li><a href="{{ route('cart.index') }}">Cart</a></li>
        <li><a href="{{ route('transaksi.list') }}">Transaksiku</a></li>
        <li><a href="#">My Profile</a></li>
        <li><a href="{{ route('client.logout') }}">Logout</a></li>
    @else
        <li><a href="{{ route('client.login') }}">Login</a></li>
        <li><a href="{{ route('client.register') }}">Register</a></li>
    @endif
</ul>
