@extends('header.header_auth')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/register.css') }}" />
@endsection

@section('content')

<main>
    <div class="container">
        <div class="container-title">会員登録</div>
        <div class="container-register">
            <form class="register-form" action="">
                <div class="register-form_inner">
                    <div class="register-form_content">
                        <div class="content_email">メールアドレス</div>
                        <input class="input_email" type="text" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="register-form_content">
                        <div class="content_password">パスワード</div>
                        <input class="input_email" type="text" name="password" value="{{ old('password') }}">
                    </div>
                </div>
                <div class="content_button">
                    <button class="form_button" type="submit">会員登録する</button>
                </div>
            </form>
        </div>
        <div class="login-button">
            <a class="login-button_inner" href="">ログインはこちら</a>
        </div>
    </div>
</main>

@endsection