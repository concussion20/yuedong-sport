@extends('act')

@section('titleAndDesc')
	<title>活动详情 &mdash; 跃动 </title>
	<meta name="description" content="跃动，活动详情" />

	@endsection

	@section('moreScript')
    <script type="text/javascript">
    	$(document).ready(function(){
            loadActDtl({{$actId}});
        });

    	function loadActDtl(id) {
            document.getElementById('square').style="color:#000000"
            document.getElementById('myAct').style="color:#000000"
            document.getElementById('lauAct').style="color:#000000"
			$("#title").html("活动详情");
			$("#tag").html("");
			$("#mainContent").html(
		'<div class="row">'+
		'<div class="col-md-2">'+
					'<img src="{{ URL::asset('images/runningman.jpg') }}" alt="FREEHTML5.co Free HTML5'+
			'Template" class="img-responsive img-rounded" width="70px" >'+
			'</div>'+

			'<div class="col-md-4">'+
					'<h2 class="move2">单人PK活动</h2>'+
					'</div>'+
					'</div>'+

					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<div class="row">'+
					'<div class="col-md-2">'+

					'</div>'+
					'<div class="col-md-3">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/girl2.png') }}" alt="FREEHTML5.co Free HTML5'+
			'Template" class="img-responsive img-rounded" width="150px"></a></p>'+
			'<div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="person1name"></span></div>'+
			'</div>'+
			'<div class="col-md-1">'+
					'<h1 class="move" id="vs"></h1>'+
					'</div>'+
					'<div class="col-md-3" id="person2">'+
			'</div>'+
			'</div>'+

			'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<div class="row">'+
					'<div class="col-md-2">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/clock.png') }}" alt="FREEHTML5.co Free HTML5'+
			'Template" class="img-responsive img-rounded"></a></p>'+
			'</div>'+
			'<div class="col-md-4 move">'+
					'离比赛<span id="ifBegin"></span> <span id="days"></span>天 <span id="hs"></span>小时'+ '<br>'+
			'<span id="t_start"> </span>至<span id="t_end"></span></div>'+
			'<div class="col-md-2">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/notepad.png') }}" alt="FREEHTML5.co Free HTML5'+
			'Template" class="img-responsive img-rounded"></a></p>'+
			'</div>'+
			'<div class="col-md-4 move" id="intro">'+
					'一起来运动'+
					'</div>'+
					'</div>'+

					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<h2>当前战况</h2><p style="font-size: 19px">排名先后按比赛成绩罗列</p>');

			loadActDtl_ajax(id)
        }

	function loadActDtl_ajax(id) {
		$.ajax({
			type:'get',
			url:'../../loadActDtl/'+id,
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				if(data[4].length==2){
					$("#person1name").html(data[4][0][0]);
					$("#vs").html('VS');
					$("#person2").html('<p><a class="image-popup"><img src="{{ URL::asset('images/girl.png') }}" alt="FREEHTML5.co Free HTML5'+
							'Template" class="img-responsive img-rounded" width="150px"></a></p>'+
							'<div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+data[4][1][0]+'</div>');
				} else{
					$("#person1name").html(data[4][0][0]);
				}
				$("#t_start").html(data[0].t_start.substring(5,16));
				$("#t_end").html(data[0].t_end.substring(5,16));
				$("#intro").html(data[0].intro);

				if (data[1]){
					$("#ifBegin").html('结束');
				} else {
					$("#ifBegin").html("开始");
				}
				$("#days").html(data[2]);
				$("#hs").html(data[3]);

				$("#mainContent").append(
							'<ul class="fh5co-post">' +
							'<li>' +
							'<div class="row">' +
							'<a href="javascript:void(0)">' +
							'<div class="fh5co-post-media col-md-2"><img width="100px" src="{{ URL::asset('images/girl2.png') }}" alt="FREEHTML5.co Free HTML5' +
							' Template">' +  '</div>' +
							'</a>' +
							'<div class="col-md-3 move">' +
							data[4][0][0]+'<br><br><span class="orange">' +data[4][0][1]+'</span>千米'+
							'</div>' +
							'</div>' +
							'</li>' +
							'</ul>')

				if(data[4].length == 2) {
					$("#mainContent").append(
							'<ul class="fh5co-post">' +
							'<li>' +
							'<div class="row">' +
							'<a href="javascript:void(0)">' +
							'<div class="fh5co-post-media col-md-2"><img width="100px" src="{{ URL::asset('images/girl.png') }}" alt="FREEHTML5.co Free HTML5' +
							' Template">' +  '</div>' +
							'</a>' +
							'<div class="col-md-3 move">' +
							data[4][1][0]+'<br><br><span class="orange">' +data[4][1][1]+'</span>米'+
							'</div>' +
							'</div>' +
							'</li>' +
							'</ul>')
				}

			},
			error: function(){
				alert('Ajax error!')
			}
		});
	}
    </script>
    @endsection