@extends('header.header_all')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page_top.css') }}" />
@endsection

@section('content')

<main>
    <div class="bottom_bar">
        <div class="content">
            <div class="recommendation">
                <a class="recommendation_button" href="">おすすめ</a>
            </div>
            <div class="myList">
                <a class="myList_button" href="">マイリスト</a>
            </div>
        </div>
    </div>
    <div class="goods-img_container">
        <div class="goods-img_content">
            <a class="goods-img_detail" href="">
                <img class="goods-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg
" alt="">
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