<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<header>
    <div class="container">
        <div class="header-up">

            <a href="index.html" class="header-logo">
                <img src="{{asset('assets/img/logo.png')}}" alt="Uaqyt info">
            </a>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    {{App::getLocale()}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{route('locale', 'ru')}}">RU</a></li>
                    <li><a class="dropdown-item" href="{{route('locale', 'kz')}}">KZ</a></li>
                    <li><a class="dropdown-item" href="{{route('locale', 'en')}}">EN</a></li>
                </ul>
            </div>
        </div>
        <div class="header-down">
            <div class="header__swiper">
                <nav class="swiper headerSwiper">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <a href="#">{{__("Главные новости")}}</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">{{__("Культура")}}</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">Политика</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">Спорт</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">{{__("Общество")}}</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">{{__("Мир")}}</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">Экономика</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">Шоу-бизнес</a>
                        </li>
                    </ul>
                </nav>
                <div class="headerSwiper-control">
                    <div class="swiper-button-next-2">
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 1L2 7L8 13" stroke="#B2AEAB" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev-2">
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="#222222" stroke-width="1.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
