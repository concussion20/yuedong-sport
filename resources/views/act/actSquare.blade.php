@extends('act')

@section('titleAndDesc')
	<title>活动广场 &mdash; 跃动 </title>
	<meta name="description" content="跃动，活动广场" />
	
	@endsection

	@section('moreScript')
    <script >
    	$(document).ready(function(){
            document.getElementById('square').style="color:#FBB040"
    		document.getElementById('myAct').style="color:#000000"
    		document.getElementById('lauAct').style="color:#000000"
    		$("#title").html("活动广场");
            $("#tag").html('<div class="row">'+
									'<a href="javascript:void(0)" onclick="loadGoingActs()" style="color:#FBB040">'+
										'<div class="col-md-3" id="going">'+
											'正在进行的活动'+
										'</div>'+
									'</a>'+
									'<a href="javascript:void(0)" onclick="loadComingActs()" style="color:#000000">'+
										'<div class="col-md-3" id="coming">'+
											'即将开始的活动'+
										'</div>'+
									'</a>'+
						'</div>'+

						'<div class="fh5co-spacer fh5co-spacer-xxs"></div>');
			$("#mainContent").html("<h2>追踪器</h2>");
			loadGoingActs();
    	});

    	function loadGoingActs() {
    		document.getElementById('coming').style="color:#000000"
    		document.getElementById('going').style="color:#FBB040"
            $("#mainContent").html('')
			loadGoingActs_ajax()
    	}

    	function loadGoingActs_ajax() {
    		$.ajax({
			type:'get',
			url:'{{URL::route('loadActsSquare/goingActs')}}',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				for(var i=0; i < data[0].length; i++) {
					$("#mainContent").append(
							'<ul class="fh5co-post">'+
							'<li>'+
							'<div class="row">'+
							'<a href="javascript:void(0)">'+
							'<div id="toActDtl" class="fh5co-post-media col-md-2"><img src="{{ URL::asset('images/slide_1.jpg') }}" alt="FREEHTML5.co Free HTML5' +
							' Template">&nbsp&nbsp'+data[0][i].name+'</div>'+
							'</a>'+
							'<div class="col-md-2">'+
							'参与人数<br><br>'+data[1][i]+
							'</div>'+
							'<div class="col-md-2">'+
							'运动类型<br><br>'+data[0][i].exer_type+
							'</div>'+
							'<div class="col-md-3">'+
							'离活动<span id="ifBegin"></span>还有<br><br>'+data[3][i]+'天'+data[4][i]+'小时'+
							'</div>'+
							'<div class="col-md-2">'+
							'活动类型<br><br>单人PK'+
							'</div>'+
							'</div>'+
							'</li>' +
							'</ul>')

					if(data[2][i]==0) {
						$("#ifBegin").html('开始')
					} else {
						$("#ifBegin").html('结束')
					}
					document.getElementById("ifBegin").id="ifBegin"+data[0][i].id;
					document.getElementById("toActDtl").id="toActDtl"+data[0][i].id;
					$("#toActDtl"+data[0][i].id).click(function(e){
						var id = $(e.target).attr('id')
						toActDtl(id.substring(8))
					})
					$("#toActDtl"+data[0][i].id+" img").click(function(e){
						var id = $(e.target).parent().attr('id')
						toActDtl(id.substring(8))
					})
				}

			},
			error: function(){
				alert('Ajax error!')
			}
		});
    	}

    	function loadComingActs() {
    		document.getElementById('going').style="color:#000000"
    		document.getElementById('coming').style="color:#FBB040"
            $("#mainContent").html('')
			loadComingActs_ajax()
    	}

    	function loadComingActs_ajax() {
    		$.ajax({
			type:'get',
			url:'{{URL::route('loadActsSquare/comingActs')}}',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				for(var i=0; i < data[0].length; i++) {
					$("#mainContent").append(
							'<ul class="fh5co-post">'+
							'<li>'+
							'<div class="row">'+
							'<a href="javascript:void(0)">'+
							'<div id="toActDtl" class="fh5co-post-media col-md-2"><img src="{{ URL::asset('images/slide_1.jpg') }}" alt="FREEHTML5.co Free HTML5' +
							' Template">&nbsp&nbsp'+data[0][i].name+'</div>'+
							'</a>'+
							'<div class="col-md-2">'+
							'参与人数<br><br>'+data[1][i]+
							'</div>'+
							'<div class="col-md-2">'+
							'运动类型<br><br>'+data[0][i].exer_type+
							'</div>'+
							'<div class="col-md-3">'+
							'离活动<span id="ifBegin"></span>还有<br><br>'+data[3][i]+'天'+data[4][i]+'小时'+
							'</div>'+
							'<div class="col-md-2">'+
							'活动类型<br><br>单人PK'+
							'</div>'+
							'</div>'+
							'</li>' +
							'</ul>')

					if(data[2][i]==0) {
						$("#ifBegin").html('开始')
					} else {
						$("#ifBegin").html('结束')
					}
					document.getElementById("ifBegin").id="ifBegin"+data[0][i].id;
					document.getElementById("toActDtl").id="toActDtl"+data[0][i].id;
					$("#toActDtl"+data[0][i].id).click(function(e){
						var id = $(e.target).attr('id')
						toActDtl(id.substring(8))
					})
					$("#toActDtl"+data[0][i].id+" img").click(function(e){
						var id = $(e.target).parent().attr('id')
						toActDtl(id.substring(8))
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