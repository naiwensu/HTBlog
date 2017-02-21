@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')

@section('my-css')
    <link href="/css/blog.css" rel="stylesheet">
@endsection

@section('container')
    @include('includes.nav')
    <div class="container">
        @if((session('user')) && (session('user')->role < 10))
            <div class="media"><a class="btn btn-primary pull-right" href="/article/create"><i
                            class="glyphicon glyphicon-plus"></i>添加文章 </a></div>
        @endif
        <hr>
        <div class="row">
            <div class="col-sm-8 blog-main">
                @foreach($articles as $article)
                    <div class="blog-post">
                        <a href="/article/{{ $article->id }}"><h2 class="blog-post-title">{{ $article->title }}</h2></a>
                        <p class="blog-post-meta">{{ $article->created_at }} by <a
                                    href="#">{{ $article->user->nickname }}</a></p>
                        <blockquote>
                            <p>文章摘要：{{ $article->abstract }}</p>
                        </blockquote>
                        <a href="/article/{{ $article->id }}"><img class="img-thumbnail"
                                                                   src="/uploads/{{ $article->thumb }}"></a>
                    </div><!-- /.blog-main -->
                    <hr>
                @endforeach
            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module">
                    <h4>文章归档</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Follow Me</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->
        <nav style="text-align: center">
            {!! $articles->render() !!}
        </nav>
    </div><!-- /.container -->

    @include('includes.footer')
@endsection