@extends('act')

@section('titleAndDesc')
	<title>我的活动 &mdash; 跃动 </title>
	<meta name="description" content="跃动，我的活动" />

	@endsection


	@section('moreScript')
    <script type="text/javascript">
    	$(document).ready(function(){
            document.getElementById('square').style="color:#000000"
    		document.getElementById('myAct').style="color:#FBB040"
    		document.getElementById('lauAct').style="color:#000000"
    		$("#title").html("我的活动");
    		$("#tag").html('<div class="row">'+
									'<a href="javascript:void(0)" onclick="loadAtndActs()" style="color:#FBB040">'+
										'<div class="col-md-2" id="atnd">'+
											'我参加的活动'+
										'</div>'+
									'</a>'+
									'<a href="javascript:void(0)" onclick="loadLauActs()" style="color:#000000">'+
										'<div class="col-md-2" id="lau">'+
											'我发布的活动'+
										'</div>'+
									'</a>'+
						'</div>'+

						'<div class="fh5co-spacer fh5co-spacer-xxs"></div>');
            $("#mainContent").html('');
            loadAtndActs();
        });

		function loadAtndActs() {
    		document.getElementById('lau').style="color:#000000"
    		document.getElementById('atnd').style="color:#FBB040"
            $("#mainContent").html('')
			loadAtndActs_ajax()
    	}		

		function loadAtndActs_ajax() {
		$.ajax({
			type:'get',
			url:'{{URL::route('loadAtndActs')}}',
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
							'<div id="toActDtl" class="fh5co-post-media col-md-2"><img src="{{ URL::asset('images/slide_1.jpg') }}" alt="FREEHTML5.co Free HTML5 Template">&nbsp' +
							'&nbsp'+data[0][i].name+'</div>'+
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

			}
		});
		}

		function loadLauActs() {
    		document.getElementById('lau').style="color:#FBB040"
    		document.getElementById('atnd').style="color:#000000"
			$("#mainContent").html('')
			loadLauActs_ajax()
    	}

		function loadLauActs_ajax() {
		$.ajax({
			type:'get',
			url:'{{URL::route('loadLauActs')}}',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				for(var i=0; i < data.length; i++) {
					$("#mainContent").append(
							'<ul class="fh5co-post">'+
							'<li>'+
							'<div class="row">'+
							'<a href="javascript:void(0)">'+
							'<div id="toActDtl" class="fh5co-post-media col-md-2"><img src="{{ URL::asset('images/slide_1.jpg') }}" alt="FREEHTML5.co Free HTML5 Template">&nbsp' +
							'&nbsp'+data[0][i].name+'</div>'+
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

			}
		});
	}
</script>
    @endsection