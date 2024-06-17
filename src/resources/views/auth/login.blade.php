@extends('header.header_auth')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/login.css') }}" />
@endsection

@section('content')

<main>
    <div class="container">
        <div class="container-title">ログイン</div>
        <div class="container-login">
            <form class="login-form" action="">
                <div class="login-form_inner">
                    <div class="login-form_content">
                        <div class="content_email">メールアドレス</div>
                        <input class="input_email" type="text" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="login-form_content">
                        <div class="content_password">パスワード</div>
                        <input class="input_password" type="text" name="password" value="{{ old('password') }}">
                    </div>
                </div>
                <div class="content_button">
                    <button class="form_button" type="submit">ログインする</button>
                </div>
            </form>
        </div>
        <div class="register-button">
            <a class="register-button_inner" href="">会員登録はこちら</a>
        </div>
    </div>
</main>

@endsection