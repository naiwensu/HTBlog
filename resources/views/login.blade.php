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
                <form role="form" method="post" action="/login">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputEmail">邮箱</label><input type="email" name="email" class="form-control" id="inputEmail" placeholder="请输入邮箱" />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">密码</label><input type="password" name="password" class="form-control" id="inputPassword" placeholder="请输入密码" />
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">登录</button>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @include('includes.footer')
@endsection