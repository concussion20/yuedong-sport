@extends('layouts.app')

@section('head')
	@yield('titleAndDesc')
	<meta name="keywords" content="跃动， 运动， 跑步， 社交， 活动， 小组" />
	<meta name="author" content="zc" />

	<style type="text/css">
		.move{
			position:relative;
			top:17px;
    		}
    	.move2{
            position:relative;
            top:19px;
            right: 13px;
            }
		.move3{
			position:relative;
			top:45px;
			right: 13px;
		}
        #birthday{
            position:relative;
            top:9px;
            left: 20px;
            }
	</style>
	@endsection

@section('script')
    @yield('moreScript')
@endsection

@section('sidebox1')
						<h3 class="fh5co-sidebox-lead">用户中心列表</h3>
						<ul class="fh5co-post">
							<li>
								<a href="{{ URL::route('userCenter/profile') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/acnt_settings.png') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="profile">
										账户设置
									</div>
								</a>
							</li>
							<li>
								<a href="{{ URL::route('userCenter/myFds') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/my_fds_副本.jpg') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="myFds">
										我的好友
									</div>
								</a>
							</li>

						</ul>
	@endsection