@extends('layouts.app')
@section('content')
<div class="about">
    <div class="container">
        <p class="title">
            <span class="upper_title">About insert data</span><br>
            <span class="downer_title">データ入稿について</span>
        </p>
        <div class="about_content about_content1">
            <p class="title">
                <span class="downer_title">データ作成時の注意点</span>
            </p>
            <span class="content">
                <p class="flow_title">ファイル形式について</p>
                <p class="content">
                    大変お手数ですが印刷用のデータを作成される際には、データはAdobe Photoshop（アドビ-フォトショップ）か、Adobe Illustrator（アドビ-イラストレーター）で作成してください。弊社では下記の通り規定がございますので必ずご参照の上、規定内でデータを作成されるようお願い申し上げます。
                </p>
                <p class="flow_title">文字・書体について</p>
                <p class="content">
                    ■Adobe Illustratorの場合（Illustrator5.5以降）<br>
                    書体はATM書体やTrueTypeなどのアウトライン化が可能な書体を使用し、必ず、全ての文字をアウトライン化した後、データを入稿して下さい。<br><br>
                    ■Adobe Photoshopの場合（Photoshop5.x以降）<br>
                    書体はATM書体やTrueTypeなどのラスタライズ化が可能な書体を使用し、必ず、全ての文字をラスタライズ化した後、データを入稿して下さい。<br><br>
                    ラスタライズ化されていない状態で、データ入稿されたデータの文字は化けてしまう（設定した書体と違う書体で出力されるエラー）可能性が非常に高いです。<br>
                    （Photoshop6.0の場合は文字を選択し、「レイヤー」→「ラスタライズ」→「文字」で ラスタライズできます。）<br><br>
                    ※Adobe Photoshopで文字を書き込むときにはアンチエイリアスを使用した方が 印刷がきれいに仕上がります。<br>
                    また、スミ一色の文字を使用したい場合にはCMYKモードに変換してからK版に文字を書き込んだ方がきれいに仕上がります。<br>
                    ☆上記以外のアプリケーションにも対応しております。詳しくはご相談下さい。
                </p>
                <p class="flow_title">画像・写真について</p>
                <p class="content">
                    画像ファイル形式は、EPS形式（CMYK)または、JPEG（最高・低圧縮）でのご使用をお願いいたします。リンク画像の解像度は、300～350dpiにされることをお勧めします。また、当社では高品位スキャナによる分解作業も承っております。写真プリント・リバーサルフィルム等原稿をお持ちの場合、より美しく仕上がりすることが出来ます。
                </p>
            </span>
        </div>
        <div class="about_content about_content2">
            <p class="title">
                <span class="downer_title">データ入稿時の注意点</span>
            </p>
            <span class="content">
                <p class="flow_title">メディアについて</p>
                <p class="content">
                    データをお送りいただく際には、メディアにてお願いいたします。<br>
                    各種メディア対応しております。不明点ございましたら、お気軽にご相談下さい。
                </p>
                <p class="flow_title">データ郵送について</p>
                <p class="content">
                    データの郵送先は、ご来社・郵便・宅配便にて、下記宛にお願いいたします。<br><br>
                    〒546-0043<br>
                    大阪市東住吉区駒川1-14-26　フジイ・カラーリプロ 株式会社
                </p>
            </span>
        </div>
    </div>
</div>
@endsection
