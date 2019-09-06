
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>跃动 &mdash; 你的运动定制专家 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="跃动，你的运动定制专家" />
    <meta name="keywords" content="跃动， 运动， 跑步， 社交， 活动， 小组" />
    <meta name="author" content="zc" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <!-- Modernizr JS -->
    <script src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//cdn.webfont.youziku.com/wwwroot/js/wf/youziku.api.min.js"></script>
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
                <a class="navbar-brand" href="{{URL::route('index')}}" style="line-height: 28px">跃动</a>
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
                    登录
                    <span class="fh5co-border"></span>
                </h1>

            </div>
        </div>
    </div>
</aside>

<div id="fh5co-main">

    <div class="container">
        <div class="row"  id="login_reg">
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
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Ipsum mollitia dolore.</a></li>
                        <li><a href="#">Eius similique in.</a></li>
                        <li><a href="#">Aspernatur similique nesciunt.</a></li>
                        <li><a href="#">Laboriosam ad commodi.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="fh5co-footer-widget top-level">
                    <h4 class="fh5co-footer-lead ">产品</h4>
                    <ul class="fh5co-list-check">
                        <li><a href="#">Lorem ipsum dolor.</a></li>
                        <li><a href="#">Ipsum mollitia dolore.</a></li>
                        <li><a href="#">Eius similique in.</a></li>
                        <li><a href="#">Aspernatur similique nesciunt.</a></li>
                        <li><a href="#">Laboriosam ad commodi.</a></li>
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

<!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ URL::asset('js/main.js') }}"></script>

<script>
    $(document).ready(function(){
//        $("#login_reg").load("loginTest.html")
        tologin()
    });

    //    $youziku.load("body", "00cffde042624550ba7cdf4e9a7ededb", "LiDeBiao-Xing3");
    $youziku.load("body", "27a58d47a08c4274bf173138037e3c2f", "Source-Han-Light");
    $youziku.draw();

    function toreg(){
//        $("#login_reg").load("reg.html")
        $(".fh5co-page-heading-lead").html('注册<span class="fh5co-border"></span>')
        $("#login_reg").html('<div class="col-md-8">'+
                '<h2>注册账号</h2>'+
                '<form role="form" method="POST" action="{{ url('login_reg') }}>'+
                '{{ csrf_field() }}'+

                '<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">'+
                '<div class="row">'+
                '<label for="email" class="col-sm-2 control-label" style="line-height: 45px">邮箱</label>'+
                '<div class="col-sm-6">'+
                '<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="请输入邮箱"  required autofocus>'+
                ' @if ($errors->has('email'))'+
                '<span class="help-block">'+
                '<strong>{{ $errors->first('email') }}</strong>'+
                '</span>'+
                '@endif'+
                '</div>'+
                '</div>'+
                '</div>'+

                '<div class="form-group">'+
                '<div class="row">'+
                '<label for="name" class="col-sm-2 control-label" style="line-height: 45px">昵称</label>'+
                '<div class="col-sm-6">'+
                '<input type="text" class="form-control" id="name" name="name" placeholder="请输入昵称" required>'+
                '</div>'+
                '</div>'+
                '</div>'+

                '<div class="form-group">'+
                '<div class="row">'+
                '<label for="password" class="col-sm-2 control-label" style="line-height: 45px">密码</label>'+
                '<div class="col-sm-6">'+
                '<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码" required>'+
                '@if ($errors->has('password'))'+
                '<span class="help-block">'+
                '<strong>{{ $errors->first('password') }}</strong>'+
                '</span>'+
                '@endif'+
                '</div>'+
                '</div>'+
                '</div>'+

                '<div class="form-group">'+
                '<button type="submit" class="btn btn-primary btn-lg">注册</button>'+
                '</form>'+
                '</div>'+
                '</div>'+

                '<div class="col-md-4">'+
                '<div class="fh5co-sidebox">'+
                '<h3 class="fh5co-sidebox-lead" >已有账号？<a href="javascript:void(0)" onclick="tologin()" >立即登录</a></h3>'+
                '<ul class="fh5co-post">'+
                '<li>'+
                '<a href="#">'+
                '<div class="fh5co-post-media"><img src="images/slide_1.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>'+
                '<div class="fh5co-post-blurb">'+
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'+
                '<span class="fh5co-post-meta">Oct. 12, 2015</span>'+
                '</div>'+
                '</a>'+
                '</li>'+
                '<li>'+
                '<a href="#">'+
                '<div class="fh5co-post-media"><img src="images/slide_2.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>'+
                '<div class="fh5co-post-blurb">'+
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'+
                '<span class="fh5co-post-meta">Oct. 12, 2015</span>'+
                '</div>'+
                '</a>'+
                '</li>'+
                '<li>'+
                '<a href="#">'+
                '<div class="fh5co-post-media"><img src="images/slide_3.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>'+
                '<div class="fh5co-post-blurb">'+
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'+
                '<span class="fh5co-post-meta">Oct. 12, 2015</span>'+
                '</div>'+
                '</a>'+
                '</li>'+
                '</ul>'+
                '</div>'+
                '</div>')
    };
    function tologin(){
//        $("#login_reg").load("loginTest.html")
        $(".fh5co-page-heading-lead").html('登录<span class="fh5co-border"></span>')
        $("#login_reg").html('<div class="col-md-8">'+
                '<h2>登录账号</h2>'+
                '<form role="form" method="POST" action="{{ url('/login_reg') }}>'+
                '{{ csrf_field() }}'+

                '<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">'+
                '<div class="row">'+
                '<label for="email" class="col-sm-2 control-label" style="line-height: 45px">邮箱</label>'+
                '<div class="col-sm-6">'+
                '<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="请输入邮箱" required autofocus>'+
                ' @if ($errors->has('email'))'+
                '<span class="help-block">'+
                '<strong>{{ $errors->first('email') }}</strong>'+
                '</span>'+
                '@endif'+
                '</div>'+
                '</div>'+
                '</div>'+
                '<br>'+

                '<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">'+
                '<div class="row">'+
                '<label for="password" class="col-sm-2 control-label" style="line-height: 45px">密码</label>'+
                '<div class="col-sm-6">'+
                '<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码" required>'+
                '@if ($errors->has('password'))'+
                '<span class="help-block">'+
                '<strong>{{ $errors->first('password') }}</strong>'+
                '</span>'+
                '@endif'+
                '</div>'+
                '</div>'+
                '</div>'+

                '<div class="form-group">'+
                                '<div class="checkbox">'+
                                    '<label class="col-sm-2 control-label">'+
                                        '<input type="checkbox" name="remember"> 记住我'+
                                    '</label>'+
                                '</div>'+
                            '</div>'+
                        '<br><br>'+

                '<div class="form-group">'+
                '<button type="submit" class="btn btn-primary btn-lg">登录</button>'+
                '</form>'+
                '</div>'+
                '</div>'+

                '<div class="col-md-4">'+
                '<div class="fh5co-sidebox">'+
                '<h3 class="fh5co-sidebox-lead" >还没有账号？<a href="javascript:void(0)" onclick="toreg()" >立即注册</a></h3>'+
        '<ul class="fh5co-post">'+
                '<li>'+
                '<a href="#">'+
                '<div class="fh5co-post-media"><img src="images/slide_1.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>'+
                '<div class="fh5co-post-blurb">'+
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'+
        '<span class="fh5co-post-meta">Oct. 12, 2015</span>'+
        '</div>'+
        '</a>'+
        '</li>'+
        '<li>'+
        '<a href="#">'+
                '<div class="fh5co-post-media"><img src="images/slide_2.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>'+
                '<div class="fh5co-post-blurb">'+
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'+
        '<span class="fh5co-post-meta">Oct. 12, 2015</span>'+
        '</div>'+
        '</a>'+
        '</li>'+
        '<li>'+
        '<a href="#">'+
                '<div class="fh5co-post-media"><img src="images/slide_3.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>'+
                '<div class="fh5co-post-blurb">'+
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'+
        '<span class="fh5co-post-meta">Oct. 12, 2015</span>'+
        '</div>'+
        '</a>'+
        '</li>'+
        '</ul>'+
        '</div>'+
        '</div>')
    };
</script>

</body>
</html>
