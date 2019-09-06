@extends('layouts.app')

@section('head')
	@yield('titleAndDesc')
	<title>小组主页 &mdash; 跃动 </title>
	<meta name="description" content="跃动，小组主页" />
	<meta name="keywords" content="跃动， 运动， 跑步， 社交， 活动， 小组" />
	<meta name="author" content="zc" />

	<style type="text/css">
		.move{
			position:relative;
			top:17px;
    		}
        .move2{
            position:relative;
            top:7px;
            right: 13px;
            background: #FAE9DA;
            }
		.move3{
			position:relative;
			left: 21px;
		}
		.move4{
			position:relative;
			left: 42px;
		}
		.move5{
			position:relative;
			top:18px;
			right: 82px;
		}
		.orange{
			color:#FBB040 ;
		}
	</style>
	@endsection

@section('script')
    <script >
    document.getElementById('group').className="active"

	$(document).ready(function(){
        	if (window.location.href == 'http://localhost/group') {
        		document.getElementById('myGroups').style="color:#000000"
    			document.getElementById('selected').style="color:#000000"
    			$("#title").html("小组首页");
				document.getElementById('ret').style.visibility="hidden"
				$('#mainContent').html('<h2>我的小组话题</h2>' +
					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>')
		    	loadMyTopics_ajax()
        	}
        	
    	});

	function loadMyTopics_ajax() {
		$.ajax({
			type:'get',
			url:'{{ URL::route('loadMyTopics') }}',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				for(var i=0; i < data.length; i++) {
					$('#mainContent').append(
							'<ul class="fh5co-post">'+
							'<li>'+
							'<div class="row">'+
							'<a href="javascript:void(0)">'+
							'<div class="col-md-4" id="toTopicDtl">'+data[i].title+'</div>'+
							'</a>'+
							'<div class="col-md-2">'+
							'回应'+
							'</div>'+
					'<div class="col-md-4">'+
							data[i].created_at+
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

	function toTopicDtl(id) {
		if (window.location.href == 'http://localhost/group') {
			window.location.href = 'group/topicDtl/' + id;
		} else {
			window.location.href = "topicDtl/" + id;
		}
    }

    function toGrpDtl(id) {
		if (window.location.href == 'http://localhost/group') {
			window.location.href = 'group/groupDtl/' + id;
		} else {
			window.location.href = "groupDtl/" + id;
		}
    }

    </script>
    @yield('moreScript')
@endsection

@section('sidebox1')
						<h3 class="fh5co-sidebox-lead">小组管理列表</h3>
						<ul class="fh5co-post">
							<li>
								<a href="{{ URL::route('group/myGroup') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/my_groups.jpg') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="myGroups">
										我的小组
									</div>
								</a>
							</li>
							<li>
								<a href="{{ URL::route('group/selected') }}">
									<div class="fh5co-post-media"><img src="{{ URL::asset('images/selected.jpg') }}" alt="FREEHTML5.co Free HTML5 Template"></div>
									<div class="fh5co-post-blurb move" id="selected">
										精选
									</div>
								</a>
							</li>
						</ul>

						<div class="fh5co-spacer fh5co-spacer-xxs"></div>

						<a href="{{ URL::route('group') }}" id="ret">返回小组主页</a>
@endsection