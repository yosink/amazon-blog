<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{ asset('css/amazeui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wap.css') }}">
    <title>首页</title>
</head>
<body>
<div data-am-widget="gotop" class="am-gotop am-gotop-fixed">
    <a href="#top" title="">
        <img class="am-gotop-icon-custom" src="/img/goTop.png" />
    </a>
</div>

<div class="pet_mian" id="top">

    @yield('content')

    @include('layouts.foot')
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/amazeui.min.js') }}"></script>
@yield('my-script')

</body>
</html>