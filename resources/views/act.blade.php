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
			right:45px;
		}
		.orange{
			color:#FBB040 ;
		}
	</style>

	@endsection

@section('script')
    <script >
    document.getElementById('act').className="active"

    function toActDtl(id) {
    	window.location.href = "actDtl/" + id;
    }
    </script>
    @yield('moreScript')
@endsection

@section('sidebox1')
						<h3 class="fh5co-sidebox-lead">活动管理列表</h3>
						<ul class="fh5co-post">
							<li>
								<a href="{{ URL::route('act/actSquare') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/act_square.jpg') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="square">
										活动广场
									</div>
								</a>
							</li>
							<li>
								<a href="{{ URL::route('act/myAct') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/my_act2_副本.jpg') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="myAct">
										我的活动
									</div>
								</a>
							</li>
							<li>
								<a href="{{ URL::route('act/lauAct') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/lau_act.jpg') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="lauAct">
										发起活动
									</div>
								</a>
							</li>
						</ul>

@endsection
