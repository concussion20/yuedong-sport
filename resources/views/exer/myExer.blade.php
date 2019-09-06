@extends('exer')

@section('titleAndDesc')
	<title>我的运动记录 &mdash; 跃动 </title>
	<meta name="description" content="跃动，我的运动记录" />
	
	@endsection

	@section('moreScript')
    <script >
    	$(document).ready(function(){
        	document.getElementById('myExer').style="color:#FBB040"
    		document.getElementById('myBodyMgmt').style="color:#000000"
    		$("#title").html("我的运动数据");
    		$('#mainContent').html(
					'<h2>我今天的运动情况</h2>'+
					'<div class="row">'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/shoeprints.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积运动距离<br><span id="todayDist"></span>公里</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/hourglass.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积运动时间<br><span id="todayTime"></span>天</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/fire-icon (2).png') }}" alt="FREEHTML5.co Free HTML5 ' +
					'Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积燃烧热量<br><span id="todayCalorie"></span>大卡</div>'+
					'</div>'+
					'</div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<h2>我本周的运动情况</h2>'+
					'<div class="row">'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/shoeprints.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积运动距离<br><span id="weekDist"></span>公里</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/hourglass.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积运动时间<br><span id="weekTime"></span>天</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/fire-icon (2).png') }}" alt="FREEHTML5.co Free HTML5 ' +
					'Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积燃烧热量<br><span id="weekCalorie"></span>大卡</div>'+
					'</div>'+
					'</div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<h2>我在跃动的运动总量</h2>'+
					'<div class="row">'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/shoeprints.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积运动距离<br><span id="totalDist"></span>公里</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/hourglass.png') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积运动时间<br><span id="totalTime"></span>天</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/fire-icon (2).png') }}" alt="FREEHTML5.co Free HTML5 ' +
					'Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp累积燃烧热量<br><span id="totalCalorie"></span>大卡</div>'+
					'</div>'+
					'</div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<h2>我的运动总量可以</h2>'+
					'<div class="row">'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/taiwan (2).jpg') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
						'<div>&nbsp&nbsp绕台湾岛<span id="circle"></span>圈</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/chicken (4).jpg') }}" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
						'<div class="move">&nbsp&nbsp相当于<span id="chick"></span>支鸡腿的热量</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/cola (3).jpg') }}" alt="FREEHTML5.co Free HTML5 ' +
					'Template" class="img-responsive img-rounded"></a></p>'+
						'<div class="move">&nbsp&nbsp相当于<span id="cola"></span>箱可乐的热量</div>'+
					'</div>'+
					'</div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+
					'<h2>排行榜</h2>'
					)
			loadExerData_ajax()
    	});

		function loadExerData_ajax() {
		$.ajax({
			type:'get',
			url:'../loadExerData/{{Auth::id()}}',
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

				for(var i=0; i < data[12].length; i++) {
					$("#mainContent").append(
							'<ul class="fh5co-post">' +
							'<li>' +
							'<div class="row">' +
							'<a >' +
							'<div class="fh5co-post-media col-md-2"><img width="100px" id="avatar" alt="FREEHTML5.co Free HTML5' +
							' Template">' + '</div>' +
							'</a>' +
							'<div class="col-md-3 move">' +
							data[12][i][0] + '<br><br><span class="orange">' + data[12][i][1] + '</span>米' +
							'</div>' +
							'</div>' +
							'</li>' +
							'</ul>')

					if(i%5==0) {
						$("#avatar").attr("src", "{{ URL::asset('images/man.png') }}");
					} else if(i%5==1) {
						$("#avatar").attr("src", "{{ URL::asset('images/man2.png') }}");
					} else if(i%5==2) {
						$("#avatar").attr("src", "{{ URL::asset('images/man3.png') }}");
					} else if(i%5==3) {
						$("#avatar").attr("src", "{{ URL::asset('images/girl.png') }}");
					} else if(i%5==4) {
						$("#avatar").attr("src", "{{ URL::asset('images/girl3 (2).png') }}");
					}
					document.getElementById("avatar").id="avatar"+i;

				}

			},
			error: function(){
				alert('Ajax error!')
			}
		});

	}
    </script>
    @endsection