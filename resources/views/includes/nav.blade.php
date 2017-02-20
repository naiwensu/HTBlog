<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">HTBlog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::getRequestUri() == '/' ? 'active' : ''  }}"><a href="/">首页 <span
                                class="sr-only">(current)</span></a></li>
                @if(session('user'))
                    @if(session('user')->role<10)
                        <li class="{{ Request::getRequestUri() == '/visit' ? 'active' : ''  }}"><a
                                    href="/visit">访问日志 </a>
                        </li>
                        <li class="{{ Request::getRequestUri() == '/article' ? 'active' : ''  }}"><a href="/">文章 </a>
                        </li>
                        <li class="{{ Request::getRequestUri() == '/diary' ? 'active' : ''  }}"><a href="/diary">日记 </a>
                        </li>
                        <li class="{{ Request::getRequestUri() == '/photo' ? 'active' : ''  }}"><a
                                    href="/photo">照片墙 </a>
                        </li>
                    @else
                        <li class="{{ Request::getRequestUri() == '/article' ? 'active' : ''  }}"><a href="/">文章 </a>
                        </li>
                        <li class="{{ Request::getRequestUri() == '/diary' ? 'active' : ''  }}"><a href="/diary">日记 </a>
                        </li>
                        <li class="{{ Request::getRequestUri() == '/photo' ? 'active' : ''  }}"><a
                                    href="/photo">照片墙 </a>
                        </li>
                    @endif
                @else
                    <li class="{{ Request::getRequestUri() == '/article' ? 'active' : ''  }}"><a href="/">文章 </a>
                @endif
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="站内搜索">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(session()->get('user'))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">欢迎您！{{ session()->get('user')->nickname }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/personal">个人中心</a></li>
                            <li><a href="#">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout">登出</a></li>
                        </ul>
                    </li>
                @else
                    <li class="{{ Request::getRequestUri() == '/login' ? 'active' : ''  }}"><a href="/login">登录</a></li>
                    <li class="{{ Request::getRequestUri() == '/register' ? 'active' : ''  }}"><a
                                href="/register">注册</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>