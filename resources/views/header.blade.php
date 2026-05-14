<header class="navbar">

    <div class="logo-area">
        <img src="{{ asset('storage/lele/logo fix.png') }}" class="logo">

        <div class="logo-text">
            Ternak Lele Saiful
        </div>
    </div>

    <nav class="menu">
        <a href="{{ route('landing') }}">Beranda</a>
        <a href="{{ route('product') }}">Product</a>    
        <a href="{{ route('login') }}">tentang kami</a>

        <a href="{{ route('login') }}" class="login-btn">
            Login
        </a>
    </nav>

</header>