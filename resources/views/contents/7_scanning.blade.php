@extends('layouts.app')
@section('content')
<div class="about">
    <div class="container">
        <p class="title">
            <span class="upper_title">Scanning Services</span><br>
            <span class="downer_title">スキャニングサービス</span>
        </p>
        <div class="about_content about_content1">
            <p class="title">
                <span class="downer_title">スキャニング</span>
            </p>
            <p class="content">フラットヘッドのみ対応</p>
            <div class="row list-table">
                <div class="col-4 list-title">メーカー</div>
                <div class="col-4 list-title">機種</div>
                <div class="col-4 list-title">原稿サイズ</div>
                <div class="col-4">富士フィルム</div>
                <div class="col-4">Lanovia Quattro</div>
                <div class="col-4">340mm×460mm</div>
                <div class="col-4">EPSON</div>
                <div class="col-4">ES-G1100</div>
                <div class="col-4">300mm×420mm</div>
            </div>
        </div>
        <div class="about_content about_content2">
            <p class="title">
                <span class="downer_title">スキャンデータ基本仕様</span>
            </p>
            <div class="row list-table">
                <div class="col-5 list-title">入力解像度</div>
                <div class="col-7">400　dpi</div>
                <div class="col-5 list-title">カラーモード</div>
                <div class="col-7">CMYK(8bit)</div>
                <div class="col-5 list-title">保存形式</div>
                <div class="col-7">macPhotoshop TIFF BinaryEncoding Preview付</div>
            </div>
            <p class="content">
                ※原稿のキズや汚れ修正は別途お見積りとなります。<br>
                ※ネガフィルムからのスキャニングも可能ですが、色再現の保証はできません。
            </p>
        </div>
    </div>
</div>
@endsection
