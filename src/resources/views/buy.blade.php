@extends('header.header_all')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/buy.css') }}" />
@endsection

@section('content')

<main>
    <div class="buy_container">
        <div class="left-buy_container">
            <div class="goods-container">
                <div class="goods-img">
                    <img class="img-content" src="" alt="商品画像">
                </div>
                <div class="goods-content">
                    <h2 class="goods-title">商品名</h2>
                    <div class="goods-price">￥値段が入る</div>
                </div>
            </div>
            <div class="payment-method">
                <h3 class="payment-method_change">支払い方法</h3>
                <a class="change-button" href="">変更する</a>
            </div>
            <div class="delivery-strategy">
                <h3 class="delivery-strategy_change">配送先</h3>
                <a class="change-button" href="">変更する</a>
            </div>
        </div>
        <div class="right-buy_container">
            <div class="price-content">
                <div class="price-content_goods">
                    <div class="price-content_goods-title">商品代金</div>
                    <div class="price-content_goods-price">￥値段が入る</div>
                </div>
                <div class="pay-content_goods">
                    <div class="pay-content_goods-title">支払金額</div>
                    <div class="pay-content_goods-price">￥値段が入る</div>
                </div>
                <div class="payment-content_goods">
                    <div class="payment-content_goods-title">お支払い金額</div>
                    <div class="payment-content_goods-price">支払い方法が入る</div>
                </div>
            </div>
            <div class="buy-button">
                <button class="buy-button_inner" type="submit">購入する</button>
            </div>
        </div>
    </div>
</main>

@endsection