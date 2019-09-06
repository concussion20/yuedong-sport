@extends('layouts.app')

@section('head')
	<title>统计分析 &mdash; 跃动 </title>
	<meta name="description" content="跃动，统计分析" />
	<meta name="keywords" content="跃动， 运动， 跑步， 社交， 活动， 小组" />
	<meta name="author" content="zc" />

	<script src="{{ URL::asset('js/echarts.min.js') }}"></script>

	<style type="text/css">
		.move{
			position:relative;
			top:17px;
    		}
		.orange{
			color:#FBB040 ;
		}
	</style>
	@endsection

@section('script')
    <script>
    document.getElementById('statsAnls').className="active"
	$("#title").html("运动数据分析")
	$('#anls').html("<h4 class='orange'>数据正在加载中，请稍等...</h4>")

	$(document).ready(function(){
		loadDataByWeek_ajax()
		loadDataByMonth_ajax()
		loadDataByTotal_ajax()
	});

	function drawChart(data, id) {
		// 基于准备好的dom，初始化echarts实例
		var myChart = echarts.init(document.getElementById(id));

		var values = []
		var dates = []
		for (var i = 0; i < data.length; i++) {
			dates.push(data[i][0])
			values.push(data[i][1])
		}

		var option = {
			title : {
				text: '',
				subtext: ''
			},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['运动距离']
			},
			toolbox: {
				show : true,
				feature : {
					mark : {show: true},
					dataView : {show: true, readOnly: false},
					magicType : {show: true, type: ['line', 'bar']},
					restore : {show: true},
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			xAxis : [
				{
					type : 'category',
					boundaryGap : false,
					data : dates
				}
			],
			yAxis : [
				{
					type : 'value',
					axisLabel : {
						formatter: '{value}米'
					}
				}
			],
			series : [
				{
					name:'运动距离',
					type:'line',
					data:values,
					markPoint : {
						data : [
							{type : 'max', name: '最大值'},
							{type : 'min', name: '最小值'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name: '平均值'}
						]
					}
				}

			]
		};


		myChart.setOption(option);
	}

	function loadDataByWeek_ajax() {
		$.ajax({
			type:'get',
			url:'loadDataByWeek',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				drawChart(data, 'week_echarts')
			},
			error: function(){
				alert('Ajax error!')
			}
		});

	}

	function loadDataByMonth_ajax() {
		$.ajax({
			type:'get',
			url:'loadDataByMonth',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				drawChart(data, 'month_echarts')
			},
			error: function(){
				alert('Ajax error!')
			}
		});

	}

	function loadDataByTotal_ajax() {
		$.ajax({
			type:'get',
			url:'loadDataByTotal',
			data:'csrf-token = <?php echo csrf_token() ?>',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success:function(data){
				avg = 0
				for (var i = 0; i < data.length; i++) {
					avg += data[i][1]
				}
				avg /= data.length;

				if(avg > 12000){
					$('#anls').html("<h4 class='orange'>你的运动量不错，继续保持！</h4>")
				} else if(avg > 6000){
					$('#anls').html("<h4 class='orange'>你的运动量适中，继续努力哦！</h4>")
				} else{
					$('#anls').html("<h4 class='orange'>你的运动量偏少，出去走走吧！</h4>")
				}

				drawChart(data, 'total_echarts')
			},
			error: function(){
				alert('Ajax error!')
			}
		});

	}

    </script>
@endsection

 @section('sidebox1')
						<h3 class="fh5co-sidebox-lead">统计分析</h3>
	@endsection

@section('mainContent')
<h2>我本周的运动情况</h2>
<div id="week_echarts" style="width: 600px;height:400px;"></div>

<div class="fh5co-spacer fh5co-spacer-xxs"></div>
					
<h2>我本月的运动情况</h2>
<div id="month_echarts" style="width: 600px;height:400px;"></div>

<div class="fh5co-spacer fh5co-spacer-xxs"></div>

<h2>我在跃动的运动总量</h2>
<div id="total_echarts" style="width: 600px;height:400px;"></div>

<div class="fh5co-spacer fh5co-spacer-xxs"></div>

{{--<h2>我的运动总量可以</h2>--}}

{{--<div class="fh5co-spacer fh5co-spacer-xxs"></div>--}}

<h2>你的运动总量分析</h2>
<div id="anls" style="width: 600px;height:100px;"></div>

					

@endsection