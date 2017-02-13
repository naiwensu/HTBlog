@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')

@section('my-css')
    <link rel="stylesheet" href="/css/bootstrap-markdown.min.css">
@endsection

@section('container')
    @include('includes.admin_nav')
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <form role="form" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputTitle">文章标题</label>
                        <input type="text" name="title" class="form-control" id="inputTitle" />
                    </div>
                    <div class="form-group">
                        <label for="inputAbstract">文章摘要</label>
                        <textarea name="abstract" rows="5" style="border: 1px solid darkgrey; width: 100%;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thumb">缩略图</label>
                        <input type="file" name="thumb" id="thumb" />
                    </div>
                    <textarea name="content" data-provide="markdown" rows="10"></textarea>
                    <hr>
                    <button type="submit" class="btn btn-block btn-primary">发表</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('my-js')
    <script src="/js/bootstrap-markdown.js"></script>
@endsection
