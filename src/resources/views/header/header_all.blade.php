<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleaMarket</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/header_all.css') }}" />
    @yield('css')
</head>

<body>

    <header class="header">
        <div class="header-inner">
            <a class="logo" href="">
                <img class="logo-inner" src="/image/logo.svg" alt="">
            </a>
            <div class="goods-search">
                <form class="goods-search_form" action="" method="get">
                    @csrf
                    <input class="goods-search_input" type="text" name="keyword" value="" placeholder="なにをお探しですか？">
                </form>
            </div>
            <!-- @でログインチェックを入れる -->
            <div class="logout-message">
                <form class="logout-form" action="/logout" method="post">
                    <!-- action="/logout"　を入れる -->
                    @csrf
                    <button class="logout-button">ログアウト</button>
                </form>
            </div>
            <div class="myPage-message"><a class="myPage-message_inner" href="">マイページ</a></div>
            <!-- @でログインチェック終了を入れる -->
            <!-- <div class="login-message"><a class="login-message_inner" href="">ログイン</a></div> -->
            <!-- <div class="register-message"><a class="register-message_inner" href="">会員登録</a></div> -->
            <div class="listing-message"><a class="listing-message_inner" href="">出品</a></div>
        </div>
    </header>

    @yield('content')

</body>

</html>