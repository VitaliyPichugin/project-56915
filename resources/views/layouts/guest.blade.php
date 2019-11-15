<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, minimum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/guest.js') }}" defer></script>
</head>

<body class="home">
<div class="main-container" >
    <div class="preloader">
        <i class="spinner-border text-light"></i>
    </div>	<div id="wrapper">
        <div class="center logotype"><header></header></div>
        <div id="content" class="site-content">
            <div class="center"></div>
        </div>
    </div>
    <footer>
        <div class="center">
            <div style="font-weight:300;font-style:normal">© Endless Loneliness</div>		</div>
    </footer>
    <picture class="bg-img">
        <img src="{{asset('/img/login.jpg')}}">
    </picture>
</div>

<div class="login-form-container" id="app">
    <auth></auth>
    <div id="btn-open-login-form" class="btn-open-login-form">
        <img src="{{asset('img/red_lock.png')}}" width="40px">
    </div>
    <div id="btn-sound" class="btn-open-login-form sound">
        <i id="value_botton" class="fa fa-volume-off" aria-hidden="true"></i>
    </div>
</div>

</body>
</html>
