<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleaMarket</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/header_auth.css') }}" />
    @yield('css')
</head>

<body>

    <header class="header">
        <div class="header-inner">
            <a class="logo" href="">
                <img class="logo-inner" src="/image/logo.svg" alt="">
            </a>
        </div>
    </header>

    @yield('content')

</body>

</html>