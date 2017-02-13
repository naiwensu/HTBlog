<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <title>@yield('title')</title>
    <link rel="icon" type="image/jpeg" href="/favicon.jpg">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

@section('my-css')
@show

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv3.7.3.min.js"></script>
    <script src="/js/respond1.4.2.min.js"></script>
    <![endif]-->
</head>
<body>
@section('container')
@show

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery1.12.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
@section('my-js')
@show
</body>
</html>