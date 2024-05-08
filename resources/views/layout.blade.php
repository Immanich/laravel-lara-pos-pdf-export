<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point of Sale</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div id="main">
        <div id="sidebar">
            <div id="branding">
                <img src="{{ asset('logo.png') }}" alt="">
                <h1>ShopLift</h1>
            </div>

            <nav id="main-nav">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/product-index') }}">Products</a>
                <a href="{{ url('/pos') }}">POS</a>
                <a href="{{ url('/about') }}">About</a>
            </nav>
        </div>
        <div id="content">
            @yield('content')
        </div>
    </div>

</body>
</html>
