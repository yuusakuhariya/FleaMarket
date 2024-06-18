@extends('header.header_auth')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/listing.css') }}" />
@endsection

@section('content')

<main>
    <div class="container">
        <h1 class="container-title">商品の出品</h1>
        <form class="listing-content">
            <h3 class="goods-img">商品画像</h3>
            <div class="img-content">
                <div class="img-choice">
                    <a class="img-choice_button" href="">画像を選択する</a>
                </div>
            </div>
            <h2 class="detail-content">商品の詳細</h2>
            <h3 class="goods-category">カテゴリー</h3>
            <div class="goods-category_inner">
                <input class="goods-category_input" type="text">
            </div>
            <h3 class="goods-status">商品の状態</h3>
            <div class="goods-status_inner">
                <input class="goods-status_input" type="text">
            </div>
            <h2 class="explanation-content">商品名と説明</h2>
            <h3 class="goods-name">商品名</h3>
            <div class="goods-name_inner">
                <input class="goods-name_input" type="text">
            </div>
            <h3 class="goods-explanation">商品の説明</h3>
            <div class="goods-explanation_inner">
                <input class="goods-explanation_input" type="text">
            </div>
            <h2 class="price-content">販売価格</h2>
            <h3 class="goods-price">商品名</h3>
            <div class="goods-price_inner">
                <input class="goods-price_input" type="text" value="￥">
            </div>
            <div class="content_button">
                <button class="form_button" type="submit">出品する</button>
            </div>
        </form>
    </div>
</main>

@endsection