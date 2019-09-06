@extends('layouts.app')

@section('head')
	<title>我的消息 &mdash; 跃动 </title>
	<meta name="description" content="跃动，我的消息" />
	<meta name="keywords" content="跃动， 运动， 跑步， 社交， 活动， 小组" />
	<meta name="author" content="zc" />

	<style type="text/css">
		.move{
			position:relative;
			top:17px;
    		}
	</style>
	@endsection

@section('script')
    <script >
    document.getElementById('message').className="active"

	$(document).ready(function(){
        	toNewFan();
    	});

	function toNewFan() {
    		document.getElementById('sysMsg').style="color:#000000"
    		document.getElementById('newFan').style="color:#FBB040"
    		$("#title").html("新粉丝消息");
    		$("#mainContent").load("{{URL::route('newFan')}}");
    	}

    	function toSysMsg() {
    		document.getElementById('sysMsg').style="color:#FBB040"
    		document.getElementById('newFan').style="color:#000000"
    		$("#title").html("系统通知");
    		$("#mainContent").load("{{URL::route('sysMsg')}}");
    	}
    </script>
@endsection

@section('sidebox1')
						<h3 class="fh5co-sidebox-lead">消息中心列表</h3>
						<ul class="fh5co-post">
							<li>
								<a href="javascript:void(0)" onclick="toNewFan()">
									<div class="fh5co-post-media"><img src="images/slide_1.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="newFan">
										新粉丝
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" onclick="toSysMsg()">
									<div class="fh5co-post-media"><img src="images/slide_2.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="sysMsg">
										系统通知
									</div>
								</a>
							</li>
@endsection