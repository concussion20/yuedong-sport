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
		.orange{
			color:#FBB040 ;
		}
		.move2{
			position:relative;
			top:65px;
			right:65px;
		}
		.move3{
			position:relative;
			top:10px;
			right:45px;
		}
	</style>
	@endsection

 @section('script')
    <script >
    document.getElementById('exer').className="active"

    </script>
    @yield('moreScript')
@endsection

	@section('sidebox1')
						<h3 class="fh5co-sidebox-lead">运动管理列表</h3>
						<ul class="fh5co-post">
							<li>
								<a href="{{ URL::route('exer/myExerRecords') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/my_exer.jpg') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="myExer">
										我的运动
									</div>
								</a>
							</li>
							<li>
								<a href="{{ URL::route('exer/bodyMgmt') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/body_mgmt.png') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="myBodyMgmt">
										身体管理
									</div>
								</a>
							</li>
						</ul>
	@endsection
   