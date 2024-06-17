@extends('header.header_all')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page_detail.css') }}" />
@endsection

@section('content')

<main>
    <div class="detail_container">
        <div class="goods-img_content">
            <div class="goods-img_detail"><img class="goods-img" src="" alt="商品画像"></div>
        </div>
        <div class="detail_content">
            <div class="goods-title">
                <h1 class="goods-name">商品名が入る</h1>
                <div class="goods-name_brand">ブランド名</div>
            </div>
            <div class="goods-price">￥ここに値段入る(値段)</div>
            <div class="detail_inner">
                <div class="favorite_button">
                    <form action="" method="">
                        <input type="hidden" name="heart-icon">
                        <button class="favorite-logo" type="submit">
                            <img class="favorite-icon" src="" alt="☆">
                        </button>
                    </form>
                </div>
                <div class="comment_button">
                    <form action="" method="">
                        <input type="hidden" name="comment-icon">
                        <button class="comment-logo" type="submit">
                            <img class="comment-icon" src="" alt="◎">
                        </button>
                    </form>
                </div>
            </div>
            <div class="goods-buy">
                <a class="goods-buy_button" href="">購入する</a>
            </div>
            <div class="goods-description_content">
                <h2 class="goods-description">商品説明</h2>
                <div class="goods-color">カラー：グレー（ここに色入れる）</div>
                <div class="goods-description_text">（ここに説明入れる、文字数指定）</div>
            </div>
            <div class="goods-product_content">
                <h2 class="goods-category">商品の情報</h2>
                <div class="goods-category_inner">
                    <div class="category-title">カテゴリー</div>
                    <div class="category-inner">
                        <div class="category-name">洋服</div>
                        <div class="category-sex">メンズ</div>
                    </div>

                </div>
                <div class="goods-condition_inner">
                    <div class="condition-title">商品の状態</div>
                    <div class="condition-name">ここに状態が入る</div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection