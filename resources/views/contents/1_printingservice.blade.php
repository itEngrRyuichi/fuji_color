@extends('layouts.app')
@section('content')
<div class="about">
    <div class="container">
        <p class="title">
            <span class="upper_title">Printing Service</span><br>
            <span class="downer_title">高品質な印刷サービス</span>
        </p>
        <div class="about_content about_content1">
            <p class="title">
                <span class="downer_title">弊社の製版技術について</span>
            </p>
            <div class="row">
                <div class="col-8">
                    <p class="content">
                        弊社の製版技術は豊富な知識と技術でお客様のニーズにより適切な方法でお応えいたします。<br>
                        また、技術と併せて製版の際には印刷会社様のイメージを汲み取って、実現するための対応力が欠かせません。<br><br>

                        たとえば赤。とくに色の多いこの日本では、赤といっても様々な色彩があります。しかし、お客様のイメージしておられる色に限りなく近づけるのがプロとしての使命です。そしてそれを支えるのが製版技術であり、この製版技術の差が色の差になるのです。上部の写真をご覧頂いてもご理解いただけるかと思います。<br><br>

                        右図：通常の印刷の色合い（上）、製版印刷の色合い（下）
                    </p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('storage/contents/before.jpg') }}" class="print_img">
                    <img src="{{ asset('storage/contents/after.jpg') }}" class="print_img">
                </div>
            </div>
        </div>
        <div class="about_content about_content2">
            <p class="title">
                <span class="downer_title">製版について</span>
            </p>
            <p class="content">
                印刷前工程のうち、特にフイルム撮りなどの、（写真をリス フイルムに撮り､修整､印刷網加工など）工程を「製版」といいます。<br>
                印刷が活版から、平版が主流に変わり、フイルム（感光性資材）の特徴をいかした「製版」が普及しました｡
            </p>
        </div>
        <div class="about_content about_content3">
            <p class="title">
                <span class="downer_title">製版工程について</span>
            </p>
            <span class="content">
                <p class="flow_title">版下編集</p>
                <p class="content">
                    レイアウトのクリーンアップ（データ上の不備等を意図したものへ正す作業）を行います。<br>
                    画像の貼りこみ、色調修正。ノセ、ケヌキ、カブセ等の指示を行います。
                </p>
                <img src="{{ asset('storage/icons/down_arrow.png') }}" class="d-flex mx-auto down_arrow">
                <p class="flow_title">集版</p>
                <p class="content">
                    【多面付】刷り上がった際、ページ順になるように、版上にドキュメントを並べる事をいいます。<br>
                    【多丁付】1枚の版に同様のドキュメントをつける事で、コスト削減がはかれます。<br>
                    その他、別にスキャニングした画像があれば、はりつけるなども行います。
                </p>
                <img src="{{ asset('storage/icons/down_arrow.png') }}" class="d-flex mx-auto down_arrow">
                <p class="flow_title">出力</p>
                <p class="content">
                    以下のものとして出力します。<br>
                    CTP、フィルム、デジタルコンセンサス（簡易校正）、プリント
                </p>
            </span>
        </div>
        <div class="about_content about_content4">
            <p class="title">
                <span class="downer_title">忘れてはならないプリプレス</span>
            </p>
            <p class="content">
                ”プリプレス”とは、「印刷の前工程」を意味しています。このプリプレスが印刷の品質を左右する重要な工程となります。
            </p>
        </div>
        <div class="about_content about_content5">
            <p class="title">
                <span class="downer_title">品質の秘密</span>
            </p>
            <p class="content">
                弊社はオフセット印刷に特化し、できるだけイメージに近い高品質な印刷物をお届けします。オフセット印刷では、多色刷り、高速印刷にも優れており、最も活用されている印刷方法です。ビジュアル化、カラー化の流れで需要がますます伸び、ポスター印刷にも幅広く使用されています。弊社では長年培った製版技術を活かし、ますます進化するデジタル製版の対応にも力を入れております。品質のいい印刷物をお望みの方、皆様の立場に立ってコストを意識した印刷方法のご提案をいたします。
            </p>
        </div>
    </div>
</div>
@endsection
