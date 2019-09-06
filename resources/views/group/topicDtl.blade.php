@extends('group')

@section('titleAndDesc')
	<title>话题详情 &mdash; 跃动 </title>
	<meta name="description" content="跃动，话题详情" />

	@endsection

	@section('moreScript')
    <script >
    	$(document).ready(function(){
            loadTopicDtl({{$topicId}});
        });

        function loadTopicDtl(id) {
        	document.getElementById('myGroups').style="color:#000000"
    		document.getElementById('selected').style="color:#000000"
    		$("#title").html("话题详情");
    		document.getElementById('ret').style.visibility="visible"
			$("#mainContent").html(
					'<h2 id="topicTitle"></h2>'+
					'<ul class="fh5co-post">'+
							'<li>'+
					'<div class="row">'+
					'<a href="javascript:void(0)">'+
					'<div class="fh5co-post-media col-md-2"><img width="130px" src="{{ URL::asset('images/man2.png') }}" id="avatar" alt="FREEHTML5.co' +
					' Free HTML5'+
			'Template"></div>'+
			'</a>'+
			'<div class="col-md-6 move">'+
					'来自：<span class="orange" id="lauerId"></span> &nbsp <span id="lauTime"></span><br><br>'+
			'<span id="topicCont"></span>'+
					'</div>'+
					'</div></li></ul>'+

					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

					'<h2>话题回应</h2>'+
							'<div id="comments">'+
					'</div>'+

			'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+

							'<h2>你的回应</h2>'+
					'<div class="row">'+
						'<form class="form-horizontal" role="form" method="POST" action="../../addComment/' +id+'"'+
					'style="margin-top: 60px">'+
							'{{ csrf_field() }}'+

							'<div class="form-group" >'+
								'<div class="col-md-7">'+
									'<textarea class="form-control move3" id="content" name="content" rows="5">'+
									'</textarea>'+
								'</div>'+
							'</div>'+

							'<div class="form-group">'+
									'<button type="submit" class="btn btn-primary btn-lgn move4">'+
										'加上去'+
									'</button>'+
							'</div>'+

						'</form>'+
					'</div>')

				loadTopicDtl_ajax(id)
        }

    	function loadTopicDtl_ajax(id) {
		$.ajax({
			type:'get',
			url:'../../loadTopicDtl/'+id,
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				$("#topicTitle").html(data[0].title)
				$("#lauerId").html(data[1])
				$("#lauTime").html(data[0].created_at)
				$("#topicCont").html(data[0].content)

				for(var i=0; i < data[2].length; i++) {
					$("#comments").append(
							'<ul class="fh5co-post">' +
							'<li>' +
							'<div class="row">' +
							'<a href="javascript:void(0)">' +
							'<div class="fh5co-post-media col-md-2"><img width="75px" src="{{ URL::asset('images/cmt.png') }}" id="avatar" alt="FREEHTML5.co Free HTML5' +
							' Template">' + '</div>' +
							'</a>' +
							'<div class="col-md-6 move5">' +
							'<span class="orange">'+data[2][i][0]+'</span>' +'&nbsp&nbsp'+data[2][i][1].created_at +
							'<br>' + data[2][i][1].content +
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