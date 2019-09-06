@extends('act')

@section('titleAndDesc')
	<title>发布活动 &mdash; 跃动 </title>
	<meta name="description" content="跃动，发布活动" />

	@endsection

	@section('moreScript')
    <script type="text/javascript">
            var isSuccess = '<?php echo $isSuccess ?>';
            if (isSuccess == 'yes') {alert("发布活动成功");}

    		document.getElementById('square').style="color:#000000"
    		document.getElementById('myAct').style="color:#000000"
    		document.getElementById('lauAct').style="color:#FBB040"
    		$("#title").html("发起活动");
            $("#tag").html('<div class="row">'+
									'<a href="javascript:void(0)" onclick="loadSingle()" style="color:#FBB040">'+
										'<div class="col-md-3" id="single">'+
											'发起单人PK活动'+
										'</div>'+
									'</a>'+
									'<a href="javascript:void(0)" onclick="loadMany()" style="color:#000000">'+
										'<div class="col-md-3" id="many">'+
											'发起多人PK活动'+
										'</div>'+
									'</a>'+
									'<a href="javascript:void(0)" onclick="loadGroup()" style="color:#000000">'+
										'<div class="col-md-3" id="grp">'+
											'发起团队PK活动'+
										'</div>'+
									'</a>'+
						'</div>'+

						'<div class="fh5co-spacer fh5co-spacer-xxs"></div>');
            $("#mainContent").load("{{URL::route('lauSingle')}}");

            function loadSingle() {
            document.getElementById('many').style="color:#000000"
            document.getElementById('single').style="color:#FBB040"
            document.getElementById('grp').style="color:#000000"
            $("#mainContent").load("{{URL::route('lauSingle')}}");
        }

        function loadMany() {
            document.getElementById('many').style="color:#FBB040"
            document.getElementById('single').style="color:#000000"
            document.getElementById('grp').style="color:#000000"
            $("#mainContent").load("{{URL::route('lauMany')}}");
        }

        function loadGroup() {
            document.getElementById('many').style="color:#000000"
            document.getElementById('single').style="color:#000000"
            document.getElementById('grp').style="color:#FBB040"
            $("#mainContent").load("{{URL::route('lauGroup')}}");
        }
    </script>
    @endsection
