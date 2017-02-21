@extends('basic')

@section('title', 'HTBlog,一个简单易用的个人博客')
@section('description', 'HTBlog,一个简单易用的个人博客')
@section('keywords', 'HTBlog,一个简单易用的个人博客')

@section('container')
    @include('includes.nav')
    <div class="table-responsive">
        <table class="table">
            <caption>今日访客</caption>
            <thead>
            <tr>
                <th>昵称</th>
                <th>真实姓名</th>
                <th>pv</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>产品1</td>
                <td>23/11/2013</td>
                <td>待发货</td>
            </tr>
            <tr>
                <td>产品2</td>
                <td>10/11/2013</td>
                <td>发货中</td>
            </tr>
            <tr>
                <td>产品3</td>
                <td>20/10/2013</td>
                <td>待确认</td>
            </tr>
            <tr>
                <td>产品4</td>
                <td>20/10/2013</td>
                <td>已退货</td>
            </tr>
            </tbody>
        </table>
    </div>
    @include('includes.footer')
@endsection