@extends('layouts.app')
@section('content')
<div class="top">
    <p class="top_text top_text1">美しい仕上がり！短納期に対応！</p>
    <p class="top_text top_text2">多様な印刷物に対応しております！</p>
</div>
<div class="services">
    <div class="container">
        <p class="title">
            <span class="upper_title">OUR SERVICES</span><br>
            <span class="downer_title">私たちの強みとサービス</span>
        </p>
        <div class="description">
            出版・商業印刷物の企画・編集から製版、印刷、製本、梱包発送にいたるトータルシステムによる製品、サービスを提供して、紙メディアに関わる全ての問題をワンストップで提供する総合印刷会社です。また、デジタルメディアのメディアミックス展開にも柔軟に対応しています。
        </div>
        <div class="contents row">
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_quality"><img src="{{asset('storage/top_imgs/1.jpg')}}" class="link_img"></a>
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_services"><img src="{{asset('storage/top_imgs/2.jpg')}}" class="link_img"></a>
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_flow"><img src="{{asset('storage/top_imgs/3.png')}}" class="link_img"></a>
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_insert"><img src="{{asset('storage/top_imgs/4.png')}}" class="link_img"></a>
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_form"><img src="{{asset('storage/top_imgs/5.jpeg')}}" class="link_img"></a>
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_falboard"><img src="{{asset('storage/top_imgs/6.png')}}" class="link_img"></a>
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_scanning"><img src="{{asset('storage/top_imgs/7.jpg')}}" class="link_img"></a>
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_work"><img src="{{asset('storage/top_imgs/8.jpg')}}" class="link_img"></a>
            <a href="#" class="page_link col-lg-4 col-md-6 col-sm-12 link_blog"><img src="{{asset('storage/top_imgs/9.jpg')}}" class="link_img"></a>
        </div>
    </div>
</div>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p class="title">
                    <span class="upper_title">ABOUT OUR SKILLS</span><br>
                    <span class="downer_title">私たちが選ばれる理由</span>
                </p>
                <div class="about_content about_content1">
                    <p class="subtitle">長年培ってきた印刷ノウハウと、高い製版技術があります</p>
                    <p class="content">弊社では、創業以来製版環境の変化にいち早く対応し、製版技術を高めてきました。<br>
                    印刷物の品質を高められる理由は、充実した設備だけではなく、経験豊かなオペレーターがいることにあります。<br>
                    用途に応じて、卓越した技術でお客様のご要望に応えることができます。</p>
                </div>
                <div class="about_content about_content2">
                    <p class="subtitle">データ作成の際のポイントを製版会社の立場からアドバイスします</p>
                    <p class="content">印刷会社様とのやりとりの中で色に関するトラブルはつきものです。<br>
                    イメージ違いや、発色の問題などは綿密な打ち合わせと、データ作成段階でのちょっとした工夫で防げる問題です。<br>
                    高品質は当たり前、さらに対応面でも満足いただけるように努めています！</p>
                </div>
                <div class="about_content about_content3">
                    <p class="subtitle">急な対応、短納期にも対応いたします！</p>
                    <p class="content">急なトラブル、短納期でのご注文にもできる限り対応いたします！<br>
                    経験豊富な営業マンが印刷会社様に満足をお届けします！</p>
                </div>
                <a href="{{ route('about') }}" class="btn btn-light about-btn">会社情報 ></a>
            </div>
            <div class="col-lg-6">
                <img class="about_img" src="{{asset('storage/about.png')}}">
            </div>
        </div>
    </div>
</div>
<div class="knowlege">
    <div class="container">
        <p class="title">
            <span class="upper_title">Others</span><br>
            <span class="downer_title">その他</span>
        </p>
        <div class="row">
            <div class="col-lg-4 other_content">
                <span class="other_icon">
                    <img src="{{asset('storage/icons/point.png')}}" class="point_icon">
                </span>
                <div class="subtitle">PRINTING POINT<br>印刷のポイント</div>
                <div class="content">
                    <span class="bold">色数</span><br>
                    色数は印刷のコストに大きく関わる要素の１つです。<br>
                    基本的には最大4種の色数をかけ合わせ、<br>様々な色を表現します。<br>
                    更に使用するインクの種類によってもコストや<br>仕上がりに大きな差が生まれます。<br>
                    弊社では、まず目的をお聞きし、最適な色数を<br>設定していきます。<br>
                    <span class="bold">サイズ</span><br>
                    サイズも色数と同様に印刷コストに関わる<br>要素の一つです。<br>
                    例えば、規格寸法の場合は、用紙も<br>規格サイズを使えますので無駄なく印刷できます。<br>
                    更にカードやタグ類などの小物類は、<br>一度大きな用紙に印刷し、裁断することで<br>コスト削減をはかることも可能です。<br>
                    最適なサイズに関してもお気軽に<br>ご相談してください。<br>
                    <span class="bold">ページ数</span><br>
                    ページ数は、印刷物のコストに大きく<br>関わってくるわかりやすいポイントの一つです。<br>
                    皆様は何ページの印刷物を作りたいのですか？<br>
                    コストにあわせたページ数にすることが<br>大切になってきます。<br>
                    <span class="bold">ロット数</span><br>
                    ロット数もわかりやすい印刷物を選ぶ際の<br>ポイントになります。<br>
                    またこのロット数は、<br>印刷方法にも大きく関わってきます。<br>
                    小ロット印刷であればオンデマンド印刷、<br>ロット数が多いものであればオフセット印刷など、<br>最適な印刷方法を選ぶことが大切になります。<br>弊社ではオフセット印刷を得意としていますが、<br>他の印刷物にも対応可能です。<br>お気軽にご相談下さい。<br>
                    <span class="bold">用紙</span><br>
                    一般に印刷用紙は、木材パルプを原料として<br>作られています。紙と一口に言っても、<br>原料の違いなど、様々な書類の紙が用途によって<br>使いわけられています。<br>用途に合った用紙を選ぶのみ、<br>ポイントの1つになってきます。
                </div>
            </div>
            <div class="col-lg-4 other_content">
                <span class="other_icon">
                    <img src="{{asset('storage/icons/offset.png')}}" class="offset_icon">
                </span>
                <div class="subtitle">OFFSET PRINTING<br>オフセット印刷について</div>
                <div class="content">
                    <span class="bold">オフセット印刷の特徴</span><br>
                    オフセット印刷は、版から直接印刷するわけではなく、一旦ブランケットと呼ばれる胴に画像を転写させ、そこから紙に印刷します。<br>
                    印刷機に装着された版には常に水分とインキが供給されます。しかし、画線部という印刷をする部分は水をはじく性質を持っているので、印刷される部分には水分が残りません。水の付着した部分はインキをはじき、画像部分にのみインキが付着します。この画像は、いったんゴムのブランケットに移されてから、紙に転写されます。このようにオフセット印刷は、水とインキの微妙なバランスの上で成り立っているのです。<br>
                    下記にはオフセット印刷の大きな特徴を３つご紹介いたします。<br>
                    <span class="bold">美しい仕上がり！</span><br>
                    オフセット印刷は原稿からの再現性がよく、色調が豊かで美しい印刷が可能です。<br>
                    紙やインキの種類、配合を組み替えることで様々な色の原稿を再現できます。<br>
                    また、細かい文字や罫線、写真などもシャープに印刷できるため、精度の高い印刷をしたい場合に最適な印刷方法といえます。<br>
                    <span class="bold">短納期に対応！</span><br>
                    オフセット印刷は印刷スピードが速くて低コストという特徴があります。<br>
                    印刷時間が短く、大量印刷するとコストも抑えることができるので、チラシ、ポスター、カタログなど様々な現場で日々活用されています。また、データの修正が比較的容易なので、記念誌、同人誌などの小数部印刷にも最適です！<br>
                    <span class="bold">様々な用紙に対応可能！</span><br>
                    オフセット印刷は薄紙から厚紙まで多種多様な素材に印刷が可能です。<br>
                    オフセット印刷は、コート紙、マット紙、光沢紙、上質紙、厚紙などのほか、和紙などの特殊な紙にもきれいに印刷することができます。大きさもチラシのような一般的な大きさのものから、大型のポスターまで幅広く対応しています。
                </div>
            </div>
            <div class="col-lg-4 other_content">
                <span class="other_icon">
                    <img src="{{asset('storage/icons/printinc.png')}}" class="printinc_icon">
                </span>
                <div class="subtitle">FOR YOUR PRINTING CAMPANY<br>印刷会社の皆様にも</div>
                <div class="content">
                    「製版会社とのやりとりが煩雑」、「思い通りの発色にならない」など、今の製版会社の対応や品質に不満を感じられている印刷会社様のご相談にお応えしてまいりました。製版のプロとして、高品質と満足いただける対応を約束します。また、アナログ製版のご要望も承っております。
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
