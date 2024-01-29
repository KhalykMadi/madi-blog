@extends('layouts.main')
@section('content')
    <section class="news">
        <div class="container">
            <ul class="news-path">
                <li>
                    <a href="">Главная / </a>
                </li>
                <li>
                    <a href="#">Спорт / </a>
                </li>
{{--                <li>--}}
{{--                    <a href="#">{!!$content -> title_ru!!}</a>--}}
{{--                </li>--}}
            </ul>
            <div class="news-main-title">
                    <h3>{!!$content['title_' . App::getLocale()]!!}</h3>
                    <div class="news-photo">
                        <img src="{{urldecode(url('storage',$content->img))}}" alt="">
                    </div>
                    <div class="news-photo-wrapper">
                        <div class="col-md-8 col-md-push-1 news-text">
                            <p>{!!$content['description_' . App::getLocale()]!!}</p>
                            <div class="link-social">
                                <a href="">
                                    <img src="{{'assets/img/icon/tt.png'}}" alt="">
                                </a>
                                <a href="">
                                    <img src="{{'assets/img/icon/fb.png'}}" alt="">
                                </a>
                                <a href="">
                                    <img src="{{'assets/img/icon/tg.png'}}" alt="">
                                </a>
                                <a href="">
                                    <img src="{{'assets/img/icon/vk.png'}}" alt="">
                                </a>
                                <a href="">
                                    <img src="{{'assets/img/icon/wa.png'}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
