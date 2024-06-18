@extends('header.header_all')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/comment.css') }}" />
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
            <div class="comment-wrap_outside">
                <div class="comment-profile_outside">
                    <div class="profile_outside-img"><img class="outside-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""></div>
                    <div class="profile_outside-name">名前が入る</div>
                </div>
                <div class="outside-comment">データベースから取り出したコメントが入る</div>
            </div>
            <div class="comment-wrap_user">
                <div class="comment-profile_user">
                    <div class="profile_user-img"><img class="user-img" src="" alt=""></div>
                    <div class="profile_user-name">名前が入る</div>
                </div>
                <div class="user-comment">データベースから取り出したコメントが入る</div>
            </div>
            <form class="comment-form" action="">
                <div class="comment-form_content">
                    <div class="content_comment">商品へのコメント</div>
                    <input class="input_comment" type="text" name="comment" value="">
                </div>
                <div class="comment-submit">
                    <button class="comment-submit_button" href="">コメントを送信する</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection