@extends('layouts.app')
@section('content')
<div class="about">
    <div class="container">
        <p class="title">
            <span class="upper_title">How to order</span><br>
            <span class="downer_title">ご依頼の流れ</span>
        </p>
        <div class="about_content about_content1">
            <p class="title">
                <span class="downer_title">お問い合わせ</span>
            </p>
            <p class="content">
                お問い合わせは電話、FAX、メールで受け付けております。<br>
                弊社スタッフが対応させていただきますので、お気軽にご相談下さい。<br>
                TEL：06-6714-8587<br>
                FAX：06-6714-6554
            </p>
            <a href="{{ route('mail') }}" class="btn btn-light about-btn">メールはこちらから ></a>
        </div>
        <img src="{{ asset('storage/icons/down_arrow.png') }}" class="d-flex mx-auto down_arrow">
        <div class="about_content about_content2">
            <p class="title">
                <span class="downer_title">お見積り</span>
            </p>
            <p class="content">
                お送りいただいたお見積り依頼に基づいて、お見積りをさせていただきます。<br>
                お見積りに際しては、弊社よりお客様に内容等確認をさせていただくことも ございますので、よろしくお願いいたします。
            </p>
        </div>
        <img src="{{ asset('storage/icons/down_arrow.png') }}" class="d-flex mx-auto down_arrow">
        <div class="about_content about_content3">
            <p class="title">
                <span class="downer_title">打ち合わせ</span>
            </p>
            <p class="content">
                ご予算・納期・内容などをもとに、サイズ・枚数（部数）・紙の種類・刷り色・加工（折り・製本・ミシン目など） の有無を打ち合わせます。
            </p>
        </div>
        <img src="{{ asset('storage/icons/down_arrow.png') }}" class="d-flex mx-auto down_arrow">
        <div class="about_content about_content4">
            <p class="title">
                <span class="downer_title">注文・データ入稿</span>
            </p>
            <p class="content">
                ご来店、宅配便、郵便のいずれかによる入稿方法でメディアにてお願いいたします。<br>
                また、出力サンプル（校了紙）も添えてお送りください。
            </p>
            <a href="{{ route('datainsert') }}" class="btn btn-light about-btn">データ入稿について ></a>
        </div>
        <img src="{{ asset('storage/icons/down_arrow.png') }}" class="d-flex mx-auto down_arrow">
        <div class="about_content about_content5">
            <p class="title">
                <span class="downer_title">製版</span>
            </p>
            <p class="content">
                打ち合わせの内容にしたがって、製版を行います。<br>
                仕上がるまでの日数は、仕様により異なります。<br>
                納期のご相談はお問い合わせください。
            </p>
        </div>
        <img src="{{ asset('storage/icons/down_arrow.png') }}" class="d-flex mx-auto down_arrow">
        <div class="about_content about_content6">
            <p class="title">
                <span class="downer_title">発送・納品</span>
            </p>
            <p class="content">
                ご納品日にお客様のご指定の場所に宅配便又は、運送業者による納品方法となります。
            </p>
        </div>
    </div>
</div>
@endsection
