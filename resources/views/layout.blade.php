<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Speaky')</title>
    <link rel="stylesheet" href="../css/style.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&family=Orbitron:wght@400..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img alt="logo" src="{{ asset('images/logo.png') }}" width="80" height="80">
            <p class="pt-3">speaky</p>
        </div>
        <nav>
            <a href="/">Главная</a>
            <a href="{{ route('about') }}">О Нас</a>
            <a href="{{ route('events') }}">Мероприятия</a>
            <a href="{{ route('products') }}">Продукция</a>
        </nav>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer d-flex justify-content-end">
        <div class="jura">

            <a href="https://www.instagram.com/speaky.tech?igsh=MXowd3YxMzhuZHJq" target="_blank"><i style="color: hotpink" class="bi bi-instagram h4"></i></a>
            <a href="https://t.me/SalikhP" target="_blank"><i style="color: #24A1DE" class="bi bi-telegram h4"></i></a>
            <a href="mailto:pernebek.sm@gmail.com?subject=Вопрос касательно устройств Speaky" target="_blank"><i style="color: #f1e9e9" class="bi bi-envelope-fill h4"></i></a>
            |
            <a href="tel:+1234567890">+7 708 931 8914</a>
            |
            Все права защищены
        </div>
    </div>
</body>
</html>
