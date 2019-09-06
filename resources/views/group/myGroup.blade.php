@extends('group')

@section('titleAndDesc')
	<title>我的小组 &mdash; 跃动 </title>
	<meta name="description" content="跃动，我的小组" />

	@endsection

	@section('moreScript')
    <script >
    	$(document).ready(function(){
        	document.getElementById('myGroups').style="color:#FBB040"
    		document.getElementById('selected').style="color:#000000"
    		$("#title").html("我的小组主页");
    		document.getElementById('ret').style.visibility="visible"
			$('#mainContent').html(
					'<h2>加入的小组</h2>'+
					'<div class="fh5co-spacer fh5co-spacer-xxs" id="atndGrp"></div>')
			$.ajax({
			type:'get',
			url:'{{ URL::route('loadAtndGrp') }}',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				for(var i=0; i < data.length-(data.length%2); i+=2) {
					$("#atndGrp").append(
							'<ul class="fh5co-post">'+
							'<li>'+
							'<div class="row">'+
							'<a href="javascript:void(0)">'+
							'<div id="toGrpDtlx" class="fh5co-post-media col-md-2"><img width="100px" src="{{ URL::asset('images/twd.jpg') }}" alt="FREEHTML5.co Free HTML5 Template">&nbsp' +
							'&nbsp'+data[i].name+'</div>'+
							'</a>'+
							'<div class="col-md-2">'+
							'参与人数<br><br>'+
							'</div>'+
							'<div class="col-md-1">'+

							'</div>'+

							'<a href="javascript:void(0)">'+
							'<div id="toGrpDtly" class="fh5co-post-media col-md-2"><img src="{{ URL::asset('images/slide_1.jpg') }}" alt="FREEHTML5.co Free HTML5 Template">&nbsp' +
							'&nbsp'+data[i+1].name+'</div>'+
							'</a>'+
							'<div class="col-md-2">'+
							'参与人数<br><br>'+
							'</div>'+

							'</div>'+
							'</li>' +
							'</ul>')

					document.getElementById("toGrpDtlx").id="toGrpDtlx"+data[i].id;
					document.getElementById("toGrpDtly").id="toGrpDtly"+data[i+1].id;
					$("#toGrpDtlx"+data[i].id).click(function(e){
						var id = $(e.target).attr('id')
						toGrpDtl(id.substring(9))
					})
					$("#toGrpDtlx"+data[i].id+" img").click(function(e){
						var id = $(e.target).parent().attr('id')
						toGrpDtl(id.substring(9))
					})
					$("#toGrpDtly"+data[i+1].id).click(function(e){
						var id = $(e.target).attr('id')
						toGrpDtl(id.substring(9))
					})
					$("#toGrpDtly"+data[i+1].id+" img").click(function(e){
						var id = $(e.target).parent().attr('id')
						toGrpDtl(id.substring(9))
					})
				}

				if (data.length%2==1) {
					$("#atndGrp").append(
							'<ul class="fh5co-post">'+
							'<li>'+
							'<div class="row">'+
							'<a href="javascript:void(0)" onclick="toDtl()">'+
							'<div id="toGrpDtl" class="fh5co-post-media col-md-2"><img src="{{ URL::asset('images/slide_1.jpg') }}" alt="FREEHTML5.co Free HTML5 Template">&nbsp' +
							'&nbsp'+data[data.length-1].name+'</div>'+
							'</a>'+
							'<div class="col-md-2">'+
							'参与人数<br><br>'+
							'</div>'+

							'</div>'+
							'</li>' +
							'</ul>')

					document.getElementById("toGrpDtl").id="toGrpDtl"+data[data.length-1].id;
					$("#toGrpDtl"+data[i].id).click(function(e){
						var id = $(e.target).attr('id')
						toGrpDtl(id.substring(8))
					})
					$("#toGrpDtl"+data[i].id+" img").click(function(e){
						var id = $(e.target).parent().attr('id')
						toGrpDtl(id.substring(8))
					})
				}

			},
			error: function(){
				alert('Ajax error!')
			}
		});
    	});
    </script>
    @endsection