@extends('layouts.app')
@section('content')
<div class="about">
    <div class="container">
        <p class="title">
            <span class="upper_title">Products</span><br>
            <span class="downer_title">製作実績</span>
        </p>
        <div class="about_content about_content1">
            <p class="title">
                <span class="downer_title">ポスター</span>
            </p>
            <div class="row content">
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product1.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product2.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product3.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
            </div>

            <p class="title">
                <span class="downer_title">チラシ</span>
            </p>
            <div class="row content">
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product4.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product5.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
            </div>

            <p class="title">
                <span class="downer_title">小冊子・カタログ</span>
            </p>
            <div class="row content">
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product6.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product7.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product8.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product9.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
            </div>

            <p class="title">
                <span class="downer_title">パンフレット</span>
            </p>
            <div class="row content">
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product10.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product11.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
                <div class="col-3 p-4">
                    <img src="{{ asset('storage/products/product12.jpg') }}" class="product_img">
                    <p class="product_title"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
