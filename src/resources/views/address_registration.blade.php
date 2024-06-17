@extends('header.header_auth')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/address_registration.css') }}" />
@endsection

@section('content')

<main>
    <div class="container">
        <div class="container-title">住所の変更</div>
        <div class="container-login">
            <form class="login-form" action="">
                @csrf
                <div class="login-form_inner">
                    <div class="login-form_content">
                        <div class="content_post-code">郵便番号</div>
                        <input class="input_post-code" type="text" name="post-code" value="">
                    </div>
                    <div class="login-form_content">
                        <div class="content_address">住所</div>
                        <input class="input_address" type="text" name="address" value="">
                    </div>
                    <div class="login-form_content">
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