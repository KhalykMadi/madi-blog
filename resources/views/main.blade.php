@extends('layouts.main')
@section('content')
    <section class="main-content">
        <div class="container">
            <div class="row main-wrapper">
                <div class="col-md-8 main-wrapper-one">
                    <div class="first-row row">
                        <div class="col-md-12 one-wrapper">
                            <div class="main__swiper">
                                <div class="swiper mainSwiper">
                                    <div class="swiper-wrapper">
                                        @foreach($contents as $content)
                                        <div class="swiper-slide">
                                            <div class="carousel">
                                                <div class="inner-carousel">
                                                    <img src="{{urldecode(url('storage',$content->img))}}" alt="">
                                                    <a href="{{$content -> id}}news.html" class="news-info">
                                                        <p>{!! $content['category_' . App::getLocale()] !!}</p>
                                                        <h4>{!! $content['title_' . App::getLocale()] !!}</h4>
                                                        <span>15:55</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="mainSwiper-control">
                                        <div class="swiper-button-next-1">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect width="30" height="30" rx="6" fill="white"/>
                                                <path d="M18 9L12 15L18 21" stroke="#555555" stroke-width="1.5"/>
                                            </svg>
                                        </div>
                                        <div class="swiper-button-prev-1">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect width="30" height="30" rx="6" fill="white"/>
                                                <path d="M12 9L18 15L12 21" stroke="#555555" stroke-width="1.5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="second-row row">

                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12 sidebar-inner">
                            <div class="aqparat">
                                <h4 class="aqparat-title">
                                    {{__("Главные новости")}}
                                </h4>
                                {{--                                @dd(session())--}}
                                <div class="aqparat-info">
                                    @foreach($contents as $content)
                                        <div class="aqparat-info-block">
                                            <a href="{{route('news', $content -> id)}}" class="aqparat-info-text">
                                                <h4 class="info-text-category">{!!  $content['category_' . App::getLocale()]!!}</h4>
                                                <h3>{!!$content['title_' . App::getLocale()]!!}</h3>
                                                <span><img src="{{asset('assets/img/icon/time.svg')}}" alt="">  в 17:00</span>
                                            </a>
                                            <div class="aqparat-info-img">
                                                <img src="{{urldecode(url('storage',$content->img))}}" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-banner">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrapper-banner">
                                <a href="#" class="inner-banner">
                                    @foreach($banners as $banner) @endforeach
                                    <img src="{{urldecode(url('storage',$banner->img))}}" alt="banner">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-logo">
                    <img src="./img/logo.png" alt="">
                    <a href="#">Уақыт.kz</a>
                </div>
                <ul class="footer-nav">
                    <li>
                        <a href="#"><img src="img/icon/Group.svg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icon/Group-1.svg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icon/Group-2.svg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icon/Group-3.svg" alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="footer-down">
                <ul class="footer-menu">
                    <li>
                        <a href="#">Главные новости</a>
                    </li>
                    <li>
                        <a href="#">Культура</a>
                    </li>
                    <li>
                        <a href="#">Политика</a>
                    </li>
                    <li>
                        <a href="#">Спорт</a>
                    </li>
                    <li>
                        <a href="#">Общество</a>
                    </li>
                    <li>
                        <a href="#">Мир</a>
                    </li>
                    <li>
                        <a href="#">Экономика</a>
                    </li>
                    <li>
                        <a href="#">Шоу-бизнес</a>
                    </li>
                    <li>
                        <a href="contacts.html">Контакты</a>
                    </li>
                </ul>
                <div class="privacy">
                    <a href="position.html">Правила пользования сайтом </a>
                </div>
            </div>
        </div>
    </footer>
@endsection
