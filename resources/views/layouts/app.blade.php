<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>印刷・製版 |大阪 フジイカラーリプロ</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
        <header class="header">
            <div class="upper">
                <div class="container">
                    <a class="phone" href="tel:06-6714-8587">
                        06-6714-8587
                    </a>
                    <a class="email" href="mailto:example@example.com">info@f-cr.co.jp</a>
                </div>
            </div>
            <div class="downer">
                <div class="container downer-wrapper">
                    <ul class="navigation ">
                        <li class="navigation-item">
                            <a href="{{ route('index') }}" class="main_logo_link">
                                <img class="main_logo" src="{{asset('storage/main_logo.png')}}">
                            </a>
                        </li>
                    </ul>
                    <ul class="navigation navigation-right">
                        <li class="navigation-item">
                            <a href="{{ route('index') }}" class="navigation-link">Home</a>
                        </li>
                        <li class="navigation-item">
                            <a href="{{ route('about') }}" class="navigation-link">会社案内</a>
                        </li>
                        <li class="navigation-item">
                            <a href="{{ route('mail') }}" class="navigation-link">メールフォーム</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <p class="footer_title">フジイ・カラーリプロ株式会社</p>
                        <small class="footer_sub_title">Copyright © フジイ・カラーリプロ株式会社. All Rights Reserved.</small>
                    </div>
                    <div class="col-lg-4 offset-3">
                        <p class="footer_title2">Our information</p>
                        <div class="footer_sub_title2 row">
                            <div class="col-1 footer_i">
                                <img class="footer_icon" src="{{asset('storage/icons/home.png')}}">
                            </div>
                            <div class="col-11">
                                〒546-0043<br>
                                大阪府大阪市東住吉区駒川1-14-26
                            </div>
                            <div class="col-1 footer_i">
                                <img class="footer_icon" src="{{asset('storage/icons/mail2.png')}}">
                            </div>
                            <div class="col-11">
                                info@f-cr.co.jp
                            </div>
                            <div class="col-1 footer_i">
                                <img class="footer_icon" src="{{asset('storage/icons/call2.png')}}">
                            </div>
                            <div class="col-11">
                                06-6714-8587
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
