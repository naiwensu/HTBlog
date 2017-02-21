@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')

@section('my-css')
    <link href="/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <style>
        #myEditor {
            width: 100%;
            height: 450px;
        }
    </style>
@endsection

@section('container')
    @include('includes.nav')
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <form role="form" method="post" action="/article" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputTitle">文章标题</label>
                        <input type="text" name="title" class="form-control" id="inputTitle"/>
                    </div>
                    <div class="form-group">
                        <label for="inputAbstract">文章摘要</label>
                        <textarea name="abstract" rows="5" style="border: 1px solid darkgrey; width: 100%;"></textarea>
                    </div>
                    <label for="thumb">上传缩略图：</label>
                    <br/>
                    <input type="file" name="thumb">
                    <!--style给定宽度可以影响编辑器的最终宽度-->
                    <div type="text/plain" name="content" id="myEditor"></div>
                    <hr>
                    <button type="submit" class="btn btn-block btn-primary">发表</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('my-js')
    <script type="text/javascript" src="/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/umeditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">
        //实例化编辑器
        var um = UM.getEditor('myEditor');
    </script>
@endsection
