@extends('basic')
@section('my-css')
    <link rel="stylesheet" href="/css/login.css">
@endsection
@section('container')
    @include('includes.nav')
    <div class="am-g">
        <!-- LOGO -->
        <div class="am-u-sm-12 am-text-center">
            <img class="am-img-thumbnail am-radius" src="/i/favicon.jpg" style="height: 150px; margin-bottom: 20px;">
        </div>
        <!-- 登陆框 -->
        <div class="am-u-sm-11 am-u-sm-centered">
            <form class="am-form">
                <fieldset class="myapp-login-form am-form-set">
                    <div class="am-form-group am-form-icon">
                        <i class="am-icon-envelope"></i>
                        <input type="text" class="myapp-login-input-text am-form-field" placeholder="请输入您的邮箱">
                    </div>
                    <div class="am-form-group am-form-icon">
                        <i class="am-icon-lock"></i>
                        <input type="text" class="myapp-login-input-text am-form-field" placeholder="请输入密码">
                    </div>
                </fieldset>
                <button type="submit" class="myapp-login-form-submit am-btn am-btn-primary am-btn-block ">登 陆</button>
            </form>
        </div>
        <div class="am-text-center am-u-sm-11 am-u-sm-centered myapp-login-form-shortcut">
            <hr class="myapp-login-form-hr"/>
            <span class="myapp-login-form-hr-font">第三方登陆</span>
        </div>

        <div class="am-u-sm-12 am-text-center myapp-login-form-listico">
            <div class="am-u-sm-4 am-text-center">
                <i class="am-icon-btn am-primary am-icon-qq"></i>
            </div>
            <div class="am-u-sm-4 am-text-center">
                <i class="am-icon-btn am-danger am-icon-weibo"></i>
            </div>
            <div class="am-u-sm-4 am-text-center">
                <i class="am-icon-btn am-success am-icon-weixin"></i>
            </div>
        </div>

    </div>
@section('my-js')
    <script src="/js/login.js"></script>
@endsection
@endsection