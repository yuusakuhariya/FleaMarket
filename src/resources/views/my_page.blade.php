@extends('header.header_all')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/my_page.css') }}" />
@endsection

@section('content')

<main>
    <div class="profile-container">
        <div class="profile-content">
            <div class="profile-content_img">
                <img class="profile-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="商品画像">
            </div>
            <h2 class="profile-user_name">ユーザー名</h2>
        </div>
        <div class="profile-edit">
            <a class="profile-edit_button" href="">プロフィールを編集</a>
        </div>
    </div>
    <div class="bottom_bar">
        <div class="content">
            <div class="listing-goods">
                <a class="listing-goods_button" href="">出品した商品</a>
            </div>
            <div class="buy-goods">
                <a class="buy-goods_button" href="">購入した商品</a>
            </div>
        </div>
    </div>
    <div class="goods-img_container">
        <div class="goods-img_content">
            <a class="goods-img_detail" href="">
                <img class="goods-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="">
            </a>
        </div>
        <div class="goods-img_content">
            <a class="goods-img_detail" href="">
                <img class="goods-img" src="" alt="">
            </a>
        </div>
        <div class="goods-img_content">
            <a class="goods-img_detail" href="">
                <img class="goods-img" src="" alt="">
            </a>
        </div>
        <div class="goods-img_content">
            <a class="goods-img_detail" href="">
                <img class="goods-img" src="" alt="">
            </a>
        </div>
        <div class="goods-img_content">
            <a class="goods-img_detail" href="">
                <img class="goods-img" src="" alt="">
            </a>
        </div>
        <div class="goods-img_content">
            <a class="goods-img_detail" href="">
                <img class="goods-img" src="" alt="">
            </a>
        </div>
    </div>
</main>

@endsection