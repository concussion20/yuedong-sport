
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

	<style type="text/css">
		.img{background:url(images/img.png) no-repeat;}
		.product_2{height:240px;width:300px;background-position:0 0;}
		.product_1{height:374px;width:480px;background-position:0 -240px;}
		.avatar{height:30px;width:45px;background-position:0 -46px;background-size: 204px}
		.product_4{height:511px;width:610px;background-position:0 -1014px;}
		.product_3{height:600px;width:800px;background-position:0 -1525px;}
		.slide_4{height:683px;width:1024px;background-position:0 -2125px;}
		.slide_3{height:900px;width:1600px;background-position:0 -2808px;}
		.slide_2{height:1200px;width:1920px;background-position:0 -3708px;}
		.slide_1{height:1525px;width:2716px;background-position:0 -4908px;}
	</style>

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

<style type="text/css">
    	.shift-left{
    		position:relative;
			right:45px;
    	}
    </style>
</head>
<body>

<header id="fh5co-header" role="banner">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<!-- <a class="navbar-brand" href="{{URL::route('index')}}" style="line-height: 28px">跃动</a> -->
				@if (Auth::check())
                <a class="navbar-brand" href="{{URL::route('index')}}" style="line-height: 28px">跃动</a>
                @else
                <a class="navbar-brand" href="{{URL::route('index_nli')}}" style="line-height: 28px">跃动</a>
                @endif
			</div>
			<div id="fh5co-navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="{{URL::route('index')}}"><span >首页 <span class="border"></span></span></a></li>
					<li><a href="{{URL::route('exer/myExerRecords')}}"><span>运动 <span class="border"></span></span></a></li>
					<li><a href="{{URL::route('act/actSquare')}}"><span>活动 <span class="border"></span></span></a></li>
					<li><a href="{{URL::route('group')}}"><span>小组 <span class="border"></span></span></a></li>
					<li><a href="{{URL::route('statsAnls')}}"><span>统计分析 <span class="border"></span></span></a></li>
					<li><a href="{{URL::route('message')}}"><span>消息 <span class="border"></span></span></a></li>
					@if (Auth::check())
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}&nbsp<span><img class="img avatar" /></span> <span class="caret"></span>
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
                        @endif
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- END .header -->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >手机网站模板</a></div>
<div class="fh5co-slider">
	<div class="owl-carousel owl-carousel-fullwidth">
		<div class="item" style="background-image:url(images/slide_1.jpg)">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-owl-text-wrap">
							<div class="fh5co-owl-text text-center to-animate">
								<h1 class="fh5co-lead">跃动</h1>
								<h2 class="fh5co-sub-lead"> 你的运动定制专家</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item" style="background-image:url(images/slide_2.jpg)">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-owl-text-wrap">
							<div class="fh5co-owl-text text-center to-animate">
								<h1 class="fh5co-lead">跃动</h1>
								<h2 class="fh5co-sub-lead">为挑战而生 </h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item" style="background-image:url(images/slide_3.jpg)">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-owl-text-wrap">
							<div class="fh5co-owl-text text-center to-animate">
								<h1 class="fh5co-lead">跃动</h1>
								<h2 class="fh5co-sub-lead">你的健康助手</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item" style="background-image:url(images/slide_4.jpg)">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-owl-text-wrap">
							<div class="fh5co-owl-text text-center to-animate">
								<h1 class="fh5co-lead">跃动</h1>
								<h2 class="fh5co-sub-lead">在这里，发现你的好友</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-main">
	<!-- Features -->

	<div id="fh5co-features">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="fh5co-section-lead">主要特性</h2>
					<h3 class="fh5co-section-sub-lead">跃动系统是一个基于Web的在线运动社交网站，旨在提供各种功能提高运动爱好者的自我运动管理能力，促进运动爱好者相互之间的互助交流，激发大众对运动的兴趣。</h3>
				</div>
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
			<div class="row">
			<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-6 col-sm-6 ">
					<div class="fh5co-feature">
						<div class="fh5co-feature-icon to-animate">
							<i class="icon-tablet"></i>
						</div>
						<div class="fh5co-feature-text">
							<h3> 运动与健康管理</h3>
							<p>随时随地记录您的运动数据，监控您的健康指数</p>
							<p><a>阅读更多</a></p>
						</div>
					</div>
					<div class="fh5co-feature no-border">
						<div class="fh5co-feature-icon to-animate">
							<i class="icon-medal"></i>
						</div>
						<div class="fh5co-feature-text">
							<h3>参与活动</h3>
							<p>您可以参与感兴趣的活动，从中体会运动的乐趣</p>
							<p ><a >阅读更多</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-5 shift-left">
					<div class="fh5co-feature">
						<div class="fh5co-feature-icon to-animate">
							<i class="icon-sports-club"></i>
						</div>
						<div class="fh5co-feature-text">
							<h3>发现小组</h3>
							<p>加入感兴趣的小组，结识更多好朋友</p>
							<p><a>阅读更多</a></p>
						</div>
					</div>
					<div class="fh5co-feature no-border">
						<div class="fh5co-feature-icon to-animate">
							<i class="icon-area-graph"></i>
						</div>
						<div class="fh5co-feature-text">
							<h3>数据统计</h3>
							<p>网站还为您提供了可视化的运动数据分析，帮助您更好地管理运动</p>
							<p><a>阅读更多</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Features -->


	<div class="fh5co-spacer fh5co-spacer-lg"></div>
	<!-- Products -->
	<div class="container" id="fh5co-products">
		<div class="row text-left">
			<div class="col-md-8">
				<h2 class="fh5co-section-lead">产品</h2>
				<h3 class="fh5co-section-sub-lead">为了更好地帮助您管理运动，我们为您提供了这些产品</h3>
			</div>
			<div class="fh5co-spacer fh5co-spacer-md"></div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
				<div class="fh5co-product">
					<a href="images/product_1.jpg" class="image-popup"><img src="images/product_1.jpg" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive img-rounded"></a>
					<h4>产品1</h4>
					<p></p>
					<p><a>阅读更多</a></p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
				<div class="fh5co-product">
					<a href="images/product_2.jpg" class="image-popup"><img src="images/product_2.jpg" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive img-rounded"></a>
					<h4>产品2</h4>
					<p></p>
					<p><a>阅读更多</a></p>
				</div>
			</div>
			<div class="visible-sm-block visible-xs-block clearfix"></div>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
				<div class="fh5co-product">
					<a href="images/product_3.jpg" class="image-popup"><img src="images/product_3.jpg" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive img-rounded"></a>
					<h4>产品3</h4>
					<p></p>
					<p><a>阅读更多</a></p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
				<div class="fh5co-product">
					<a href="images/product_4.jpg" class="image-popup"><img src="images/product_4.jpg" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive img-rounded"></a>
					<h4>产品4</h4>
					<p></p>
					<p><a >阅读更多</a></p>
				</div>
			</div>

		</div>
	</div>
	<!-- Products -->
	<div class="fh5co-spacer fh5co-spacer-lg"></div>

	<div class="fh5co-bg-section" style="background-image: url(images/slide_2.jpg); background-attachment: fixed;">
		<div class="fh5co-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro text-center">
							<h1 class="fh5co-lead"><span class="quo">&ldquo;</span>身体的健康因静止不动而破坏，因运动练习而长期保持。 <span class="quo">&rdquo;</span></h1>
							<p class="author">&mdash; <cite> ——苏格拉底</cite></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

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

<script type="text/javascript">
	$youziku.load("body", "27a58d47a08c4274bf173138037e3c2f", "Source-Han-Light");
	$youziku.load("h1,h2,h3,h4", "27a58d47a08c4274bf173138037e3c2f", "Source-Han-Light");
	/*$youziku.load("#id1,.class1,h1", "27a58d47a08c4274bf173138037e3c2f", "Source-Han-Light");*/
	/*．．．*/
	$youziku.draw();
</script>
</body>
</html>
