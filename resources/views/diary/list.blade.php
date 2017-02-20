@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')

@section('container')
    @include('includes.nav')
    <div class="container">
        @if(session('user')->role < 10)
            <div class="media"><a class="btn btn-primary pull-right" href="/diary/create"><i class="glyphicon glyphicon-plus"></i>添加日记 </a></div>
        @endif
        @foreach ($diaries as $diary)
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-circle .img-thumbnail .img-responsive" src="/uploads/{{ $diary->user->picture }}" width="50px" height="50px" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{ $diary->user->nickname }}</h4>
                    {{ $diary->content }}
                    <br>
                    <small>{{ $diary->created_at }}</small>
                </div>
            </div>
            <br>
            <div class="row">
                @foreach($diary->medium as $media)
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="/uploads/{{ $media->path }}" alt="...">
                        </a>
                    </div>
                @endforeach
            </div>
            <hr>
        @endforeach
    </div>

    <nav style="text-align: center">
        {!! $diaries->render() !!}
    </nav>
    @include('includes.footer')
@endsection
