@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客')
@section('description', 'HTBlog,一个简单易用的个人博客')
@section('keywords', 'HTBlog,一个简单易用的个人博客')

@section('container')
    @include('includes.nav')
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form role="form" method="post" action="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputNickname">昵称</label><input type="text" name="nickname" value="{{ old('nickname') }}" class="form-control" id="inputNickname" placeholder="请输入昵称" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">邮箱</label><input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" placeholder="请输入邮箱" />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">密码</label><input type="password" name="password" value="{{ old('password') }}" class="form-control" id="inputPassword" placeholder="密码至少8个字符" />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword2">再次输入密码</label><input type="password" value="{{ old('password2') }}" name="password2" class="form-control" id="inputPassword2" placeholder="请再次输入密码" />
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    @include('includes.footer')
@endsection