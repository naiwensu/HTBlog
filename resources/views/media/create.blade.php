@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')

@section('my-css')
    <link rel="stylesheet" href="/css/webuploader.css">
    <link rel="stylesheet" href="/css/style.css">
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
                <label for="file">选择上传文件</label>
                <div id="uploader">
                    <div class="queueList">
                        <div id="dndArea" class="placeholder">
                            <div id="filePicker"></div>
                            <p>或将照片拖到这里，单次最多可选300张</p>
                        </div>
                    </div>
                    <div class="statusBar" style="display:none;">
                        <div class="progress">
                            <span class="text">0%</span>
                            <span class="percentage"></span>
                        </div><div class="info"></div>
                        <div class="btns">
                            <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                        </div>
                    </div>
                </div>
                <button type="button" id="submit" class="btn btn-block btn-primary">发表</button>
            </div>
        </div>
    </div>
@endsection

@section('my-js')
    {{--<script src="/js/ssi-uploader.js"></script>--}}
    {{--<script type="text/javascript">--}}
    {{--var id = Date.parse(new Date())+parseInt(Math.random() * 100000).toString();--}}
    {{--$('#ssi-upload').ssi_uploader({--}}
    {{--url: '/fileUpload',--}}
    {{--data: {--}}
    {{--_token: "{{ csrf_token() }}",--}}
    {{--reference: 'diary',--}}
    {{--id: id--}}
    {{--},--}}
    {{--maxFileSize: 6,--}}
    {{--allowed: ['jpg', 'gif', 'txt', 'png', 'pdf']--}}
    {{--});--}}
    {{--$('#submit').on('click', function () {--}}
    {{--var content = $('#diary').val();--}}
    {{--$.ajax({--}}
    {{--type : "POST",  //提交方式--}}
    {{--url : "/diary",//路径--}}
    {{--data : "_token={{ csrf_token() }}&id="+id+"content="+content,--}}
    {{--success : function(result) {//返回数据根据结果进行相应的处理--}}
    {{--console.log(result);--}}
    {{--}--}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}
    <script src="/js/webuploader.js"></script>
    <script src="/js/upload.js"></script>
@endsection
