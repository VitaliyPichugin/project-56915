<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, minimum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://h2oweb.com/xmlrpc.php" />
    <link rel='stylesheet' id='mtnc-style-css'  href='https://h2oweb.com/wp-content/plugins/maintenance/load/css/style.css?ver=1569406018' type='text/css' media='all' />
    <link rel='stylesheet' id='mtnc-fonts-css'  href='https://h2oweb.com/wp-content/plugins/maintenance/load/css/fonts.css?ver=1569406018' type='text/css' media='all' />
    <style type="text/css">body {background-color: #111111}.preloader {background-color: #111111}body {font-family: Open Sans; }.site-title, .preloader i, .login-form, .login-form a.lost-pass, .btn-open-login-form, .site-content, .user-content-wrapper, .user-content, footer, .maintenance a{color: #ffffff;} a.close-user-content, #mailchimp-box form input[type="submit"], .login-form input#submit.button  {border-color:#ffffff} input[type="submit"]:hover{background-color:#ffffff} input:-webkit-autofill, input:-webkit-autofill:focus{-webkit-text-fill-color:#ffffff} </style>		<!--[if IE]>
    <style type="text/css"></style>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic:300">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body class="home">

<div class="main-container">
    <div class="preloader"><i class="fi-widget" aria-hidden="true"></i></div>	<div id="wrapper">
        <div class="center logotype"><header></header>
        </div>
        <div id="content" class="site-content">
            <div class="center">

            </div>
        </div>
    </div> <!-- end wrapper -->
    <footer>
        <div class="center">
            <div style="font-weight:300;font-style:normal">© Endless Loneliness</div>		</div>
    </footer>
    <picture class="bg-img">
        <img src="{{asset('/img/login.jpg')}}">
    </picture>
</div>

<div class="login-form-container">
    <input type="hidden" id="mtnc_login_check" name="mtnc_login_check" value="9c88e1e269" /><input type="hidden" name="_wp_http_referer" value="/" /><form name="login-form" id="login-form" class="login-form active error" method="post"><label>User Login</label><span class="login-error">Login and password are incorrect!</span><span class="licon error"><input type="text" name="log" id="log" value="" size="20"  class="input username" placeholder="Username"/></span><span class="picon error"><input type="password" name="pwd" id="login_password" value="" size="20"  class="input password" placeholder="Password" /></span><a class="lost-pass" href="https://h2oweb.com/wp-login.php?action=lostpassword" title="Lost Password">Lost Password</a><input type="submit" class="button" name="submit" id="submit" value="Login" tabindex="4" /><input type="hidden" name="is_custom_login" value="1" /><input type="hidden" id="mtnc_login_check" name="mtnc_login_check" value="9c88e1e269" /><input type="hidden" name="_wp_http_referer" value="/" /></form>		  <div id="btn-open-login-form" class="btn-open-login-form">
        <i class="fi-lock"></i>

    </div>
    <div id="btn-sound" class="btn-open-login-form sound">
        <i id="value_botton" class="fa fa-volume-off" aria-hidden="true"></i>
    </div>
</div>
<!--[if lte IE 10]>
<script type='text/javascript' src='https://h2oweb.com/wp-includes/js/jquery/jquery.js?ver=5.3'></script>
<![endif]-->
<!--[if !IE]><!--><script type='text/javascript' src='https://h2oweb.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://h2oweb.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://h2oweb.com/wp-content/plugins/maintenance/load/js/jquery.frontend.js?ver=1569406018'></script>

</body>
</html>
