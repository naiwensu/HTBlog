@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客系统')
@section('description', 'HTBlog,一个简单易用的个人博客系统')
@section('keywords', 'HTBlog,一个简单易用的个人博客系统')

@section('container')
    @include('includes.nav')
    <div class="container">
        @foreach ($articles as $article)
            <h1>内容：{{ $article->content }}</h1>
            <hr>
        @endforeach
    </div>
    <nav style="text-align: center">
        {!! $articles->render() !!}
    </nav>
    @include('includes.footer')
@endsection
