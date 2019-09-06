@extends('userCenter')

@section('titleAndDesc')
    <title>我的好友 &mdash; 跃动 </title>
    <meta name="description" content="跃动，我的好友" />
    
    @endsection

    @section('moreScript')
    <script >
    $(document).ready(function(){
    		document.getElementById('myFds').style="color:#FBB040"
    		document.getElementById('profile').style="color:#000000"
    		$("#title").html("我的好友列表");
    		$("#tag").html('<div class="row">'+
									'<a href="javascript:void(0)" onclick="loadFds()" style="color:#FBB040">'+
										'<div class="col-md-2" id="fds">'+
											'好友列表'+
										'</div>'+
									'</a>'+
									'<a href="javascript:void(0)" onclick="loadFollowings()" style="color:#000000">'+
										'<div class="col-md-2" id="following">'+
											'我关注的人'+
										'</div>'+
									'</a>'+
									'<a href="javascript:void(0)" onclick="loadFans()" style="color:#000000">'+
										'<div class="col-md-2" id="fans">'+
											'我的粉丝'+
										'</div>'+
									'</a>'+
						'</div>'+

						'<div class="fh5co-spacer fh5co-spacer-xxs"></div>');
    		$("#mainContent").html("");
			loadFds_ajax()
    })

    function loadFds() {
            document.getElementById('fans').style="color:#000000"
            document.getElementById('fds').style="color:#FBB040"
            document.getElementById('following').style="color:#000000"
			$("#mainContent").html("");
			loadFds_ajax()
        }

            function loadFds_ajax() {
			$.ajax({
				type:'get',
				url:'{{URL::route('loadFds')}}',
				data:'csrf-token = <?php echo csrf_token() ?>',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					for(var i=0;  i < data.length-(data.length%2); i+=2) {
						$("#mainContent").append(
								'<ul class="fh5co-post">'+
								'<li>'+
								'<div class="row">'+

								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExerx" src="{{ URL::asset('images/girl.png') }}" alt="FREEHTML5.co Free' +
								' HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move2">'+
								data[i].name+'<br>'+
								'<button class="btn btn-primary btn-sm" style="position:relative;right:15px;"' +
								'>解除好友关系</button>'+
								'</div>'+
								'<div class="col-md-1">'+

								'</div>'+
								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExery" src="{{ URL::asset('images/man2.png') }}" alt="FREEHTML5.co Free ' +
								'HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move2">'+
								data[i+1].name+'<br>'+
								'<button class="btn btn-primary btn-sm" style="position:relative;right:15px;"' +
								'>解除好友关系</button>'+
								'</div>'+

								'</div>'+
								'</li>'+
								'</ul>')

						$("#toOthersExerx").parent().parent().attr("href","../others_exer/"+data[i].id);
						$("#toOthersExery").parent().parent().attr("href","../others_exer/"+data[i+1].id);
						document.getElementById("toOthersExerx").id="toOthersExerx"+data[i].id;
						document.getElementById("toOthersExery").id="toOthersExery"+data[i+1].id;
					}

					if (data.length%2==1) {
						$("#mainContent").append(
								'<ul class="fh5co-post">'+
								'<li>'+
								'<div class="row">'+
								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExer" src="{{ URL::asset('images/man3.png') }}" alt="FREEHTML5.co Free ' +
								'HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move2">'+
								data[data.length-1].name+'<br>'+
								'<button class="btn btn-primary btn-sm" style="position:relative;right:15px;"' +
								'>解除好友关系</button>'+
								'</div>'+
								'</div></li></ul>')

						$("#toOthersExer").parent().parent().attr("href","../others_exer/"+data[data.length-1].id);
						document.getElementById("toOthersExer").id="toOthersExer"+data[data.length-1].id;
					}

				},
				error: function(){
					alert('Ajax error!')
				}

			});

		}

        function loadFans() {
            document.getElementById('fans').style="color:#FBB040"
            document.getElementById('fds').style="color:#000000"
            document.getElementById('following').style="color:#000000"
            $("#mainContent").html("");
			loadFans_ajax()
        }

		function loadFans_ajax() {
			$.ajax({
				type:'get',
				url:'{{URL::route('loadFans')}}',
				data:'csrf-token = <?php echo csrf_token() ?>',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					for(var i=0;  i < data.length-(data.length%2); i+=2) {
						$("#mainContent").append(
								'<ul class="fh5co-post">'+
								'<li>'+
								'<div class="row">'+

								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExerx" src="{{ URL::asset('images/girl.png') }}" alt="FREEHTML5.co Free' +
								' HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move3">'+
								data[i].name+
								'</div>'+
								'<div class="col-md-1">'+

								'</div>'+
								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExery" src="{{ URL::asset('images/man2.png') }}" alt="FREEHTML5.co Free ' +
								'HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move3">'+
								data[i+1].name+
								'</div>'+

								'</div>'+
								'</li>'+
								'</ul>')

						$("#toOthersExerx").parent().parent().attr("href","../others_exer/"+data[i].id);
						$("#toOthersExery").parent().parent().attr("href","../others_exer/"+data[i+1].id);
						document.getElementById("toOthersExerx").id="toOthersExerx"+data[i].id;
						document.getElementById("toOthersExery").id="toOthersExery"+data[i+1].id;
					}

					if (data.length%2==1) {
						$("#mainContent").append(
								'<ul class="fh5co-post">'+
								'<li>'+
								'<div class="row">'+
								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExer" src="{{ URL::asset('images/man3.png') }}" alt="FREEHTML5.co Free ' +
								'HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move3">'+
								data[data.length-1].name+
								'</div>'+
								'</div></li></ul>')

						$("#toOthersExer").parent().parent().attr("href","../others_exer/"+data[data.length-1].id);
						document.getElementById("toOthersExer").id="toOthersExer"+data[data.length-1].id;
					}

				},
				error: function(){
					alert('Ajax error!')
				}

			});

		}

        function loadFollowings() {
            document.getElementById('fans').style="color:#000000"
            document.getElementById('fds').style="color:#000000"
            document.getElementById('following').style="color:#FBB040"
			$("#mainContent").html("");
			loadFollowings_ajax()
        }

		function loadFollowings_ajax() {
			$.ajax({
				type:'get',
				url:'{{URL::route('loadFollowings')}}',
				data:'csrf-token = <?php echo csrf_token() ?>',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					for(var i=0;  i < data.length-(data.length%2); i+=2) {
						$("#mainContent").append(
								'<ul class="fh5co-post">'+
								'<li>'+
								'<div class="row">'+

								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExerx" src="{{ URL::asset('images/girl.png') }}" alt="FREEHTML5.co Free' +
								' HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move2">'+
								data[i].name+'<br>'+
								'<button class="btn btn-primary btn-sm" style="position:relative;right:15px;"' +
								'id="btnx">取消关注</button>'+
								'</div>'+
								'<div class="col-md-1">'+

								'</div>'+
								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExery" src="{{ URL::asset('images/man2.png') }}" alt="FREEHTML5.co Free ' +
								'HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move2">'+
								data[i+1].name+'<br>'+
								'<button class="btn btn-primary btn-sm" style="position:relative;right:15px;"' +
								'id="btny">取消关注</button>'+
								'</div>'+

								'</div>'+
								'</li>'+
								'</ul>')

						document.getElementById("btnx").id="btnx"+data[i].id;
						$("#btnx"+data[i].id).click(function(e){
							var id = $(e.target).attr('id')
							unfollow(id.substring(4))
						})
						document.getElementById("btny").id="btny"+data[i].id;
						$("#btny"+data[i].id).click(function(e){
							var id = $(e.target).attr('id')
							unfollow(id.substring(4))
						})
						$("#toOthersExerx").parent().parent().attr("href","../others_exer/"+data[i].id);
						$("#toOthersExery").parent().parent().attr("href","../others_exer/"+data[i+1].id);
						document.getElementById("toOthersExerx").id="toOthersExerx"+data[i].id;
						document.getElementById("toOthersExery").id="toOthersExery"+data[i+1].id;
					}

					if (data.length%2==1) {
						$("#mainContent").append(
								'<ul class="fh5co-post">'+
								'<li>'+
								'<div class="row">'+
								'<a href="javascript:void(0)">'+
								'<div class="fh5co-post-media col-md-2"><img id="toOthersExer" src="{{ URL::asset('images/man3.png') }}" alt="FREEHTML5.co Free ' +
								'HTML5 Template"></div>'+
								'</a>'+
								'<div class="col-md-2 move2">'+
								data[data.length-1].name+'<br>'+
								'<button class="btn btn-primary btn-sm" style="position:relative;right:15px;"' +
								'id="btn">取消关注</button>'+
								'</div>'+
								'</div>'+
								'</li>'+
						'</ul>')

						document.getElementById("btn").id="btn"+data[i].id;
						$("#btn"+data[i].id).click(function(e){
							var id = $(e.target).attr('id')
							unfollow(id.substring(3))
						})
						$("#toOthersExer").parent().parent().attr("href","../others_exer/"+data[data.length-1].id);
						document.getElementById("toOthersExer").id="toOthersExer"+data[data.length-1].id;
					}

				},
				error: function(){
					alert('Ajax error!')
				}

			});

		}

		function unfollow(id) {
			$.ajax({
				type:'get',
				url:'../unfollow2/'+id ,
				data:'csrf-token = <?php echo csrf_token() ?>',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(data){
					alert('取消关注成功')
					$("#mainContent").html("");
					loadFollowings_ajax()
				},
				error: function(){
					alert('Ajax error!')
				}
			});
		}


		</script>
		@endsection



	