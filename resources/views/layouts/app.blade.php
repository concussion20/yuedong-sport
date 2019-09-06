<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
 
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">

    <!--bootstrap.css-->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- bootstrap-datetimepicker.css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}">

    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- bootstrap-datetimepicker.js -->
    <script src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ URL::asset('js/locales/bootstrap-datetimepicker.fr.js') }}"></script>
    <!-- Modernizr JS -->
    <script src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://cdn.webfont.youziku.com/wwwroot/js/wf/youziku.api.min.js"></script>
    <!--youziku font-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
    <header id="fh5co-header" role="banner">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                @if (Auth::check())
                <a class="navbar-brand" href="{{URL::route('index')}}" style="line-height: 28px">&nbsp&nbsp&nbsp跃动</a>
                @else
                <a class="navbar-brand" href="{{URL::route('index_nli')}}" style="line-height: 28px">跃动</a>
                @endif
                </div>
                <div id="fh5co-navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{URL::route('index')}}"><span >首页 <span class="border"></span></span></a></li>
                        <li id="exer"><a href="{{URL::route('exer/myExerRecords')}}"><span>运动 <span class="border"></span></span></a></li>
                        <li id="act"><a href="{{URL::route('act/actSquare')}}"><span>活动 <span class="border"></span></span></a></li>
                        <li id="group"><a href="{{URL::route('group')}}"><span>小组 <span class="border"></span></span></a></li>
                        <li id="statsAnls"><a href="{{URL::route('statsAnls')}}"><span>统计分析 <span class="border"></span></span></a></li>
                        <li id="message"><a href="{{URL::route('message')}}"><span>消息 <span class="border"></span></span></a></li>
                        @if (Auth::check())
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}&nbsp<span><img src="{{ URL::asset('images/avatar.jpg') }}" width="45px" height="30px" /></span> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{URL::route('userCenter/profile')}}">
                                            用户中心
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            退出
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li ><a ><span><span></span></span></a></li>
                        @endif
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END .header -->

    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fh5co-page-heading-lead">
                        <div id="title"> </div>
                        <span class="fh5co-border"></span>
                    </h1>
                    
                </div>
            </div>
        </div>
    </aside>

    <div id="fh5co-main">
        
        <div class="container">
            <div class="row">

                <div class="col-md-3">

                    <div class="fh5co-sidebox">
                        @yield('sidebox1')
                    </div>

                    @yield('sideboxx')
                </div>

                <div class="col-md-9">
                    <div id="tag">
                        
                    </div>
                    <div id="mainContent">
                        @yield('mainContent')
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="fh5co-spacer fh5co-spacer-lg"></div>

    <footer id="fh5co-footer">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="fh5co-footer-widget">
                        <h2 class="fh5co-footer-logo">跃动</h2>
                        <p>你的运动定制专家<br>在这里，发现你的好友</p>
                    </div>
                    <div class="fh5co-footer-widget">
                        <ul class="fh5co-social">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="fh5co-footer-widget top-level">
                        <h4 class="fh5co-footer-lead ">公司</h4>
                        <ul>
                            <li><a href="#">关于跃动</a></li>
                            <li><a href="#">联系我们</a></li>
                            <li><a href="#">新闻</a></li>
                            <li><a href="#">支持</a></li>
                            <li><a href="#">职位</a></li>
                        </ul>
                    </div>
                </div>

                <div class="visible-sm-block clearfix"></div>

                <div class="col-md-2 col-sm-6">
                <div class="fh5co-footer-widget top-level">
                    <h4 class="fh5co-footer-lead">特性</h4>
                    <ul class="fh5co-list-check">
                        <li><a href="#">运动管理</a></li>
                        <li><a href="#">活动管理</a></li>
                        <li><a href="#">小组管理</a></li>
                        <li><a href="#">数据分析</a></li>
                        <li><a href="#">社交功能</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="fh5co-footer-widget top-level">
                    <h4 class="fh5co-footer-lead ">产品</h4>
                    <ul class="fh5co-list-check">
                        <li><a href="#">产品1</a></li>
                        <li><a href="#">产品2</a></li>
                        <li><a href="#">产品3</a></li>
                        <li><a href="#">产品4</a></li>
                        <li><a href="#">产品5</a></li>
                    </ul>
                </div>
            </div>
            </div>

            <div class="row fh5co-row-padded fh5co-copyright">
                <div class="col-md-5">
                    <p><small>&copy;2016 yuedong.com, All Rights Reserved.悦动科技有限公司 </small></p>
                </div>
            </div>
        </div>

    </footer>

    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ url('/logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--@yield('content')--}}
    {{--</div>--}}

    <!-- Owl carousel -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ URL::asset('js/main.js') }}"></script>

    <!-- youzikuload -->
    <script type="text/javascript">
        $youziku.load("body", "27a58d47a08c4274bf173138037e3c2f", "Source-Han-Light");
        $youziku.load("h1,h2,h3,h4", "27a58d47a08c4274bf173138037e3c2f", "Source-Han-Light");
        /*$youziku.load("#id1,.class1,h1", "27a58d47a08c4274bf173138037e3c2f", "Source-Han-Light");*/
        /*．．．*/
        $youziku.draw();
    </script> 

    @yield('script')

</body>
</html>
