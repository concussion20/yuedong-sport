@extends('exer')

@section('titleAndDesc')
	<title>身体管理 &mdash; 跃动 </title>
	<meta name="description" content="跃动，身体管理" />
	
	@endsection

	@section('moreScript')
    <script >
    $(document).ready(function(){
    	document.getElementById('myBodyMgmt').style="color:#FBB040"
    		document.getElementById('myExer').style="color:#000000"
    		$("#title").html("我的身体数据");
			$('#mainContent').html(
					'<h2>身体管理</h2>'+
					'<div class="row">'+

					'<div class="col-md-4">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/bmi.png') }}" width="160px" alt="FREEHTML5.co Free HTML5' +
					' Template" class="img-responsive img-rounded"></a></p>'+
					'<div>&nbsp&nbsp&nbsp&nbsp身高<input type="text" style="width: 50px;height: 25px;" id="ht_text"/>厘米' +
					'<br>&nbsp&nbsp&nbsp&nbsp体重' +
					'<input type="text" style="width: 50px;height: 25px;" id="wt_text"/>公斤</div>'+
					'</div>'+

					'<div class="col-md-6">'+
					'<br><br>'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/progress_bar.jpg') }}" alt="FREEHTML5.' +
					'co Free HTML5' +
					' Template" class="img-responsive img-rounded move3"></a></p>'+
					'<div class="move2"><button class="btn btn-primary btn-lg" onclick="getBMI()">计算</button></div>'+
					'</div>'+

					'<div class="col-md-2">'+
					'<p><a class="image-popup"><img src="{{ URL::asset('images/yoga.jpg') }}" width="160px" alt="FREEHTML5.' +
					'co Free HTML5' +
					' Template" class=" img-rounded" style="position: relative;bottom:10px;right: 80px"></a></p>'+
					'</div>'+

					'</div>'+
							'<div id="getBMI">'+'</div>'


//					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+
//					'<h2>体重变化情况</h2>'+
//
//					'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+
//					'<h2>详细数据</h2>')
			)
    });

 	function getBMI() {
		var ht_square = Math.pow(parseFloat(document.getElementById('ht_text').value)/100,2)
		var wt = parseFloat(document.getElementById('wt_text').value)
		var bmi = wt/ht_square
		var bmi = Math.round(bmi, 2)
		var idealWt = ht_square*21.75;

		$("#getBMI").html('<div class="row"><br><h4>&nbsp;&nbsp;你的BMI指数：<span class="orange" id="bmi">'+bmi+'</span><br><br>&nbsp;'+
				'&nbsp;' + '你的理想体重<span class="' + 'orange" id="weight">'+Math.round(idealWt,2)+'</span>公斤，还需要燃烧热量<span class="' +
				'orange"' + ' id="clr">' +Math.round((wt-idealWt)*3032,2) +'</span>大卡，' + '为了好身材，' + '努力吧！</h4></div>')
	}
    </script>
    @endsection