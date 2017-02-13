@extends('basic')
@section('container')
    @include('includes.nav')
    <div style="padding: 10px 0 0 10px; font-size: 20px;">about 博主：</div>
    <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
    <!-- 显示我的照片 -->
    <figure data-am-widget="figure" class="am am-figure am-figure-default " data-am-figure="{  pureview: 'true' }">
        <img style="width: 400px;"
             src=""
             data-rel=""
             alt=""/>
    </figure>
    <p class="medescribe">姓名：

    </p>
    <p class="medescribe">QQ：

    </p>
    <p class="medescribe">职业：

    </p>
    <p class="medescribe">爱好：

    </p>
    <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
    <p style="padding: 0 20px 0 20px; text-indent: 2em;">

    </p>
@endsection