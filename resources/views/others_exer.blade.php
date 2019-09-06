@extends('layouts.app')

@section('head')
	<title>TA的运动主页 &mdash; 跃动 </title>
	<meta name="description" content="跃动，TA的运动主页" />
	<meta name="keywords" content="跃动， 运动， 跑步， 社交， 活动， 小组" />
	<meta name="author" content="zc" />

	<style type="text/css">
		.move{
			position:relative;
			top:17px;
    		}
		.move2{
			position:relative;
			left:100px;
		}
		.move3{
			position:relative;
			left:70px;
		}
		.orange{
			color:#FBB040 ;
		}
	</style>
	@endsection

@section('script')
    <script >
		$(document).ready(function(){
			toOthersExer();
			checkIfFollowing()
		});

		function toOthersExer() {
			$("#title").html("TA的运动主页");
			$('#mainContent').html(
					'<h2>TA今天的运动情况</h2>'+
					'<div class="row">'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/shoeprints.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积运动距离<br><span id="todayDist">&nbsp&nbsp&nbsp<span class="orange">{{$data[0]}}</span></span>公里</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/hourglass.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积运动时间<br><span id="todayTime">&nbsp&nbsp&nbsp&nbsp&nbsp<span class="orange">{{$data[1]}}</span></span>天</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/fire-icon (2).png') }}" alt="FREEHTML5.co Free HTML5 ' +
					'Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积燃烧热量<br><span id="todayCalorie">&nbsp&nbsp&nbsp&nbsp<span class="orange">{{$data[2]}}</span></span>大卡</div>'+
					'</div>'+
					'</div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<h2>TA本周的运动情况</h2>'+
					'<div class="row">'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/shoeprints.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积运动距离<br><span id="weekDist">&nbsp&nbsp&nbsp<span class="orange">{{$data[3]}}</span></span>公里</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/hourglass.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积运动时间<br><span id="weekTime">&nbsp&nbsp&nbsp&nbsp&nbsp<span class="orange">{{$data[4]}}</span></span>天</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/fire-icon (2).png') }}" alt="FREEHTML5.co Free HTML5 ' +
					'Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积燃烧热量<br><span id="weekCalorie">&nbsp&nbsp&nbsp&nbsp<span class="orange">{{$data[5]}}</span></span>大卡</div>'+
					'</div>'+
					'</div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<h2>TA在跃动的运动总量</h2>'+
					'<div class="row">'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/shoeprints.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积运动距离<br><span id="totalDist">&nbsp&nbsp&nbsp<span class="orange">{{$data[6]}}</span></span>公里</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/hourglass.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积运动时间<br><span id="totalTime">&nbsp&nbsp&nbsp&nbsp&nbsp<span class="orange">{{$data[7]}}</span></span>天</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/fire-icon (2).png') }}" alt="FREEHTML5.co Free HTML5 ' +
					'Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp累积燃烧热量<br><span id="totalCalorie">&nbsp&nbsp&nbsp&nbsp<span class="orange">{{$data[8]}}</span></span>大卡</div>'+
					'</div>'+
					'</div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<h2>TA的运动总量可以</h2>'+
					'<div class="row">'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/taiwan (2).jpg') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp绕台湾岛<span id="circle"><span class="orange">{{$data[9]}}</span></span>圈</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/chicken (4).jpg') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div class="move">&nbsp&nbsp相当于<span id="chick"><span class="orange">{{$data[10]}}</span></span>支鸡腿的热量</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/cola (3).jpg') }}" alt="FREEHTML5.co Free HTML5 ' +
					'Template" class="img-responsive img-rounded"></a></p>'+
					'<div class="move">&nbsp&nbsp相当于<span id="cola"><span class="orange">{{$data[11]}}</span></span>箱可乐的热量</div>'+
					'</div>'+
					'</div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'
			)
		}

		function loadExerData_ajax() {
			$.ajax({
				type:'get',
				url:'loadExerData',
				data:'csrf-token = <?php echo csrf_token() ?>',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					$('#todayDist').html('&nbsp&nbsp&nbsp'+'<span class="orange">'+data[0]+'</span>')
					$('#todayTime').html('&nbsp&nbsp&nbsp&nbsp&nbsp'+'<span class="orange">'+data[1]+'</span>')
					$('#todayCalorie').html('&nbsp&nbsp&nbsp&nbsp'+'<span class="orange">'+data[2]+'</span>')
					$('#weekDist').html('&nbsp&nbsp&nbsp'+'<span class="orange">'+data[3]+'</span>')
					$('#weekTime').html('&nbsp&nbsp&nbsp&nbsp&nbsp'+'<span class="orange">'+data[4]+'</span>')
					$('#weekCalorie').html('&nbsp&nbsp&nbsp&nbsp'+'<span class="orange">'+data[5]+'</span>')
					$('#totalDist').html('&nbsp&nbsp&nbsp'+'<span class="orange">'+data[6]+'</span>')
					$('#totalTime').html('&nbsp&nbsp&nbsp&nbsp&nbsp'+'<span class="orange">'+data[7]+'</span>')
					$('#totalCalorie').html('&nbsp&nbsp&nbsp&nbsp'+'<span class="orange">'+data[8]+'</span>')
					$('#circle').html('<span class="orange">'+data[9]+'</span>')
					$('#chick').html('<span class="orange">'+data[10]+'</span>')
					$('#cola').html('<span class="orange">'+data[11]+'</span>')
				},
				error: function(){
					alert('Ajax error!')
				}
			});

		}

		function follow() {
			$.ajax({
				type:'get',
				url:'{{URL::to('follow/'.$user->id)}}' ,
				data:'csrf-token = <?php echo csrf_token() ?>',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					$('#btn').html('取消关注TA')
					$("#btn").click(function(){
						unfollow()
					})
				},
				error: function(){
					alert('Ajax error!')
				}
			});
		}

		function unfollow() {
			$.ajax({
				type:'get',
				url:'{{URL::to('unfollow/'.$user->id)}}' ,
				data:'csrf-token = <?php echo csrf_token() ?>',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					$('#btn').html('关注TA')
					$("#btn").click(function(){
						follow()
					})
				},
				error: function(){
					alert('Ajax error!')
				}
			});
		}

		function checkIfFollowing() {
			$.ajax({
				type:'get',
				url:'{{URL::to('checkIfFollowing/'.$user->id)}}',
				data:'csrf-token = <?php echo csrf_token() ?>',
				headers: {
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					if(data==1) {
						$('#btn').html('取消关注TA')
						$("#btn").click(function(){
							unfollow()
						})
					} else {
						$('#btn').html('关注TA')
						$("#btn").click(function(){
							follow()
						})
					}
				},
				error: function(){
					alert('Ajax error!')
				}
			});
		}

    </script>
@endsection

@section('sidebox1')
	<p><a href="{{ URL::asset('images/notepad.png') }}" class="image-popup"><img src="{{ URL::asset('images/notepad.png') }}" alt="FREEHTML5.co Free HTML5
					Template" class="img-responsive img-rounded" width="275px"></a></p>

	<h3 class="move2">{{$user->name}}</h3>
	<button class="btn btn-primary btn-lg move3" id="btn"></button>
@endsection