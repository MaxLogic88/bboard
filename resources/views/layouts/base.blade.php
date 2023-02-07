<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') :: Объявления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a href="{{ route('index') }}"
           class="navbar-brand mr-auto ">Главная</a>
        @guest
            <a href="{{ route('register') }}"
               class="nav-item nav-link ">Регистрация</a>
            <a href="{{ route('login') }}"
               class="nav-item nav-link">Вход</a>
        @endguest
        @auth
            <a href="{{ route('home') }}"
               class="nav-item nav-link">Мои объявления</a>
            <form action="{{ route('logout') }}" method="POST"
                  class="form-inline">
                @csrf
                <input type="submit" class="btn btn-danger"
                       value="Выход">
            </form>
        @endauth
    </nav>
    <h1 class="my-3 text-center">Объявления</h1>
    @yield('main')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
