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
                        <label for="inputTitle">旧密码：</label>
                        <input type="text" name="title" value="" class="form-control"
                               id="inputTitle"/>
                    </div>
                    <div class="form-group">
                        <label for="inputTitle">新密码：</label>
                        <input type="text" name="title" value="" class="form-control"
                               id="inputTitle"/>
                    </div>
                    <div class="form-group">
                        <label for="inputTitle">重复新密码：</label>
                        <input type="text" name="title" value="" class="form-control"
                               id="inputTitle"/>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">更改</button>
                </form>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection

