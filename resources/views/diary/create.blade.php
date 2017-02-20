@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')

@section('my-css')
    <link rel="stylesheet" href="/css/ssi-uploader.css">
    {{--<link rel="stylesheet" href="/css/style.css">--}}
    <style>
        #diary {
            border: 1px solid lightgrey;
            width: 100%;
        }
    </style>
@endsection

@section('container')
    @include('includes.nav')
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="content">发生了什么事，与大家分享吧</label>
                    <br>
                    <textarea name="content" id='diary' rows="5" placeholder="限150字"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" multiple id="ssi-upload"/>
                    </div>
                </div>
                <hr>
                <button type="button" id="submit" class="btn btn-block btn-primary">发表</button>
            </div>
        </div>
    </div>
@endsection

@section('my-js')
    <script src="/js/ssi-uploader.js"></script>
    <script type="text/javascript">
        $('#ssi-upload').ssi_uploader({
            url: '/fileUpload',
            data: {
                _token: "{{ csrf_token() }}",
                id: Date.parse(new Date())+parseInt(Math.random() * 100000).toString()
            },
            maxFileSize: 6,
            allowed: ['jpg', 'gif', 'txt', 'png', 'pdf']
        });
    </script>
    <script>
        $('#submit').on('click', function () {
            var content = $('#diary').val();
            console.log(content);
        });
    </script>
@endsection
