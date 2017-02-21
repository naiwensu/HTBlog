@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')

@section('container')
    @include('includes.nav')
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <form role="form" method="post" action="/article" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputTitle">我的昵称：</label>
                        <input type="text" name="title" value="{{ $user->nickname }}" class="form-control"
                               id="inputTitle"/>
                    </div>
                    <div class="form-group">
                        <label for="inputTitle">我的真实姓名：</label>
                        <input type="text" name="title" value="{{ $user->realname }}" class="form-control"
                               id="inputTitle"/>
                    </div>
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="inputTitle">我的邮箱：</label>
                            <input type="text" name="title" value="{{ $user->email }}" class="form-control disabled"
                                   id="inputTitle"/>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="inputTitle">我的个性签名：</label>
                        <input type="text" name="title" value="{{ $user->signature }}" class="form-control"
                               id="inputTitle"/>
                    </div>
                    <div class="form-group">
                        <label for="inputTitle">我的简介：</label>
                        <textarea rows="5" style="width: 100%; border: 1px solid yellowgreen">{{ $user->intro }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">更改</button>
                </form>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection

