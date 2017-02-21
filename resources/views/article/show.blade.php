@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')

@section('my-css')
    <link href="/css/blog.css" rel="stylesheet">
@endsection

@section('container')
    @include('includes.nav')
    <div class="container">
        <div class="row">

            <div class="col-sm-12 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title">{{ $article->title }}</h2>
                    <p class="blog-post-meta">{{ $article->created_at }} by <a
                                href="#">{{ $article->user->nickname }}</a></p>
                    <blockquote>
                        <p>{{ $article->abstract }}</p>
                    </blockquote>
                    <img class="img-thumbnail"
                         src="/uploads/{{ $article->thumb }}">
                    {!! $article->content !!}
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->

        </div><!-- /.row -->

    </div><!-- /.container -->
    @include('includes.footer')
@endsection

@section('my-js')
@endsection
