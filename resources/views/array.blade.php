<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROBUX SHOP — Товары</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container header-content">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="ROBUX SHOP" class="logo">
            <nav>
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('array') }}">Массивы</a>
            </nav>
        </div>
    </header>
    <main class="container">
        <section class="catalog">
            <h1>Пакеты Robux</h1>
            <p>Выберите подходящий пакет игровой валюты.</p>
            <div class="array-actions">
                <a href="{{ route('array') }}">Все товары</a>

                <a href="{{ route('array.shuffle') }}">
                    Перемешать массив
                </a>

                <a href="{{ route('array.sort') }}">
                    Сортировать по цене
                </a>

                <a href="{{ route('array.filter') }}">
                    Отфильтровать массив
                </a>
            </div>
            <div class="products">
                @foreach($array as $item)
                    <div class="product-card">
                        <img src="{{ Vite::asset('resources/images/' . $item['path']) }}" alt="{{ $item['title'] }}">
                        <h3>{{ $item['title'] }}</h3>
                        <p class="price">{{ $item['price'] }} ₽</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <footer>
        <p>© 2026 ROBUX SHOP | Кузьменко Кристина Валерьевна</p>
    </footer>
</body>
</html>