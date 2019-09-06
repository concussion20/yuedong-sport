@extends('group')

@section('titleAndDesc')
	<title>小组精选 &mdash; 跃动 </title>
	<meta name="description" content="跃动，小组精选" />

	@endsection

	@section('moreScript')
    <script >
    $(document).ready(function(){
    	document.getElementById('myGroups').style="color:#000000"
    		document.getElementById('selected').style="color:#FBB040"
    		$("#title").html("小组精选");
			$("#mainContent").html(
					'<div class="row">'+
					'<div class="col-md-6">'+
					'<h2>话题精选</h2>'+
					'</div>'+
					'<div class="col-md-6">'+
					'<h2>值得加入的小组</h2>'+
					'</div>'+
					'</div>'+

					'<div class="row">'+
						'<div class="col-md-6" id="topicList">'+
						'</div>'+
						'<div class="col-md-6" id="grpList">'+
						'</div>'+
					'</div>')
    		document.getElementById('ret').style.visibility="visible"
			loadSelectedTopics_ajax()
			loadSelectedGroups_ajax()
    });

    function loadSelectedTopics_ajax() {
		$.ajax({
			type:'get',
			url:'{{ URL::route('loadSelectedTopics') }}',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				for(var i=0; i < data.length; i++) {
					$("#topicList").append(
							'<ul class="fh5co-post">'+
					'<li>'+
					'<div class="col-md-2 move2">'+
					'<div class="row">'+
					'&nbsp&nbsp&nbspxx'+
					'</div>'+
					'<div class="row">'+
					'&nbsp&nbsp喜欢'+
					'</div>'+
					'</div>'+
					'<div class="col-md-10">'+
					'<div class="row">'+
					'<a href="javascript:void(0)" style="font-size: 16px" id="toTopicDtl">'+data[i].title+'</a>'+
					'</div>'+
					'<div class="row">'+
					'<p class="initialism col-md-11">'+data[i].content+'</p>'+
					'</div>'+
					'<div class="row">'+
					'<div class="initialism">来自'+
					'<a style="display:inline" href="javascript:void(0)" onclick="toDtl()">xxx</a>'+
					'&nbsp&nbsp'+data[i].created_at+
					'</div>'+
					'</div>'+

					'</div>'+
					'</li>'+
					'</ul>')

					document.getElementById("toTopicDtl").id="toTopicDtl"+data[i].id;
					$("#toTopicDtl"+data[i].id).click(function(e){
						var id = $(e.target).attr('id')
						toTopicDtl(id.substring(10))
					})
				}

			},
			error: function(){
				alert('Ajax error!')
			}
		});

	}

		function loadSelectedGroups_ajax() {
		$.ajax({
			type:'get',
			url:'{{ URL::route('loadSelectedGrps') }}',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				for(var i=0; i < data.length; i++) {
					$("#grpList").append(
							'<ul class="fh5co-post">'+
							'<li>'+
							'<div class="row">'+
							'<a href="javascript:void(0)">'+
							'<div id="toGrpDtl" class="fh5co-post-media"><img src="{{ URL::asset('images/slide_1.jpg') }}" alt="FREEHTML5.co Free HTML5 Template">&nbsp' +
							'&nbsp'+data[i].name+'</div>'+
							'</a>'+
							'<div class="col-md-4">'+
							'参与人数<br><br>'+
							'</div>'+
							'<div class="col-md-4 move">'+
								'+加入小组'+
							'</div>'+
							'<div/>'+
							'</li>'+
							'</ul>')

					document.getElementById("toGrpDtl").id="toGrpDtl"+data[i].id;
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

	}
    	
    </script>
    @endsection