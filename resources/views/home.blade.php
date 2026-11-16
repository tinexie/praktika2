<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROBUX SHOP — Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container header-content">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="ROBUX SHOP" class="logo">
            <nav>
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('array') }}">Каталог</a>
            </nav>
        </div>
    </header>
    <main class="container">
        <section class="hero">
            <img src="{{ Vite::asset('resources/images/banner.png') }}" alt="Баннер ROBUX SHOP" class="banner">
            <h1>Добро пожаловать в ROBUX SHOP!</h1>
            <p> ROBUX SHOP — онлайн магазин игровой валюты Robux для Roblox. <br>
                Здесь ты можешь посмотреть различные пакеты Robux и выбрать подходящий вариант.</p>
            <a href="{{ route('array') }}" class="btn">Смотреть товары</a>
        </section>
    </main>
    <footer>
        <p>© 2026 ROBUX SHOP | Кузьменко Кристина Валерьевна</p>
    </footer>
</body>
</html>