@extends('layouts.app')
@section('content')
<div class="about">
    <div class="container">
        <p class="title">
            <span class="upper_title">Services</span><br>
            <span class="downer_title">印刷サービス一覧</span>
        </p>
        <div class="about_content about_content1">
            <p class="title">
                <span class="downer_title">小冊子・カタログの印刷</span>
            </p>
            <div class="row">
                <div class="col-8">
                    <p class="content">
                        小冊子やカタログは、商品の詳細や会社の詳細を写真を使い伝えることができるツールです。<br>
                        情報の量はもちろん、各商品のイメージや微妙なニュアンスも大切な要素となります。
                    </p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('storage/contents/service1.jpg') }}" class="service_img">
                </div>
            </div>
        </div>
        <div class="row list-table">
            <div class="col-12 list-title">
                ポスターの印刷の際のお悩みとその解決方法を、過去にご提案した例を通してご紹介いたします。
            </div>
            <div class="col-2 list-title left_list-title">
                お客様のお悩み
            </div>
            <div class="col-10">
                ある雑貨屋さんより店舗OPEN記念のポスターを作りたいというご要望をいただきました。扱っている商品を掲載するだけではどうしてもポスターとしてのインパクトが少なく、人目を引くにはどのようにすればよいかとのご要望でした。
            </div>
            <div class="col-2 list-title left_list-title">
                弊社からのご提案
            </div>
            <div class="col-10">
                弊社で過去に作った何種類かのサンプル（紙質、表面加工）を見てもらい参考にしていただきました。また、規格外のサイズでの提案もさせていただきました。<br>
                お客様の思い通りの色がでたということで、非常に喜んでいただきました。<br>
                皆様も思い通りの色がでないといった場合にはお気軽に弊社までご相談下さい。
            </div>
        </div>
        <div class="about_content about_content2">
            <p class="title">
                <span class="downer_title">チラシの印刷</span>
            </p>
            <div class="row">
                <div class="col-8">
                    <p class="content">
                        チラシは新商品発売時やキャンペーンの際には必須となります。<br>
                        大量のチラシの中で大切になってくるのは「目にとまること」。どんなに内容にこだわって作っても、目にとまらなければ意味がありません。
                    </p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('storage/contents/service2.jpg') }}" class="service_img">
                </div>
            </div>
        </div>
        <div class="row list-table">
            <div class="col-12 list-title">
                チラシ印刷の際のお悩みとその解決方法を、過去にご提案した例を通してご紹介いたします。
            </div>
            <div class="col-2 list-title left_list-title">
                お客様のお悩み
            </div>
            <div class="col-10">
                あるお客様より、店舗の新装開店にともなうチラシをお願いしたいというご要望をいただきました。<br>
                その店舗はお寿司やさん。つまりネタの新鮮さや美味しさをチラシを使って伝えることが必要でした。<br>
                飲食店様の開店時には必須なご要望です。
                またチラシだけでなく開店にともなうメニューの印刷もして欲しいとのご依頼でした。
            </div>
            <div class="col-2 list-title left_list-title">
                弊社からのご提案
            </div>
            <div class="col-10">
                弊社では技術とノウハウを駆使することで、商品を引き立たせるような画像修正、色合いを出します。これはチラシ全般にいえることですが、値段がぎりぎりまで決まらないので納期が厳しく、素早い対応が必要となります。この点においても、満足をいただくことが出来、非常に喜んでいただきました。
            </div>
        </div>
        <div class="about_content about_content3">
            <p class="title">
                <span class="downer_title">ポスターの印刷</span>
            </p>
            <div class="row">
                <div class="col-8">
                    <p class="content">
                        ポスターを印刷する際に必要なポイントはわかりやすさです。パッとみて伝えたいことが伝わるポスターにするためには、ポスターの色合い、発色がポイントになってきます。
                    </p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('storage/contents/service3.jpg') }}" class="service_img">
                </div>
            </div>
            <div class="row list-table">
                <div class="col-12 list-title">
                    ポスターの印刷の際のお悩みとその解決方法を、過去にご提案した例を通してご紹介いたします。
                </div>
                <div class="col-2 list-title left_list-title">
                    お客様のお悩み
                </div>
                <div class="col-10">
                    ある雑貨屋さんより店舗OPEN記念のポスターを作りたいというご要望をいただきました。扱っている商品を掲載するだけではどうしてもポスターとしてのインパクトが少なく、人目を引くにはどのようにすればよいかとのご要望でした。
                </div>
                <div class="col-2 list-title left_list-title">
                    弊社からのご提案
                </div>
                <div class="col-10">
                    弊社からは表面加工（PP貼り）のご提案をいたしました。PP貼りとは、光沢に優れた表面加工のことをいいます。次にそのポスターを貼る場所をうかがい、室内に貼るのであればＰＰ貼り、屋外に貼るのであれば耐光性のあるPP貼り、もしくは耐光インキ、というように、用途に合わせた加工をしました。そうすることで、目を引くことと耐久性の両面で満足していただくことができました。
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
