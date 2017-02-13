@extends('basic')
@section('my-css')
    <link rel="stylesheet" href="/css/admin-login.css">
@endsection

<body data-type="login">
<div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                HTBlog<span> Login</span> <i class="am-icon-skyatlas"></i>
            </div>
        </div>

        <div class="login-font">
            <i>Log In </i> or <span> Sign Up</span>
        </div>
        <div class="am-u-sm-10 login-am-center">
            <form class="am-form" method="post" action="">
                {{ csrf_field() }}
                <fieldset>
                    <div class="am-form-group">
                        <input type="email" name="email" class="" id="doc-ipt-email-1" placeholder="输入电子邮件">
                    </div>
                    <div class="am-form-group">
                        <input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="输入密码">
                    </div>
                    <p>
                        <button type="submit" class="am-btn am-btn-default">登录</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@section('my-js')
    <script src="/js/admin-login.js"></script>
@endsection

