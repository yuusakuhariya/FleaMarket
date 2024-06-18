@extends('header.header_all')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/profile.css') }}" />
@endsection

@section('content')

<main>
    <div class="container">
        <div class="container-title">プロフィール設定</div>
        <div class="profile-content">
            <div class="profile-content_img">
                <img class="profile-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="商品画像">
            </div>
            <div class="profile-edit">
                <a class="profile-edit_button" href="">プロフィールを編集</a>
            </div>
        </div>
        <div class="container-profile">
            <form class="profile-form" action="">
                @csrf
                <div class="profile-form_inner">
                    <div class="user-name-form_content">
                        <div class="content_user-name">郵便番号</div>
                        <input class="input_user-name" type="text" name="user-name" value="">
                    </div>
                    <div class="address-form_content">
                        <div class="content_post-code">郵便番号</div>
                        <input class="input_post-code" type="text" name="post-code" value="">
                    </div>
                    <div class="address-form_content">
                        <div class="content_address">住所</div>
                        <input class="input_address" type="text" name="address" value="">
                    </div>
                    <div class="address-form_content">
                        <div class="content_building-name">建物名</div>
                        <input class="input_building-name" type="text" name="building-name" value="">
                    </div>
                </div>
                <div class="content_button">
                    <button class="form_button" type="submit">更新する</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection