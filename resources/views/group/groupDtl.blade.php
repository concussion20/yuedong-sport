@extends('group')

@section('titleAndDesc')
	<title>小组详情 &mdash; 跃动 </title>
	<meta name="description" content="跃动，小组详情" />

	@endsection

	@section('moreScript')
    <script >
    	$(document).ready(function(){
            loadGrpDtl({{$groupId}});
        });

        function loadGrpDtl(id) {
        	document.getElementById('myGroups').style="color:#000000"
    		document.getElementById('selected').style="color:#000000"
    		$("#title").html("小组详情");
{{--    		$("#mainContent").load("{{URL::route('detail')}}");--}}
    		document.getElementById('ret').style.visibility="visible"
			$("#mainContent").html(
					'<div class="row">'+
				'<div class="col-md-2">'+
					'<img src="{{ URL::asset('images/twd.jpg') }}" alt="FREEHTML5.co Free HTML5'+
			'Template" class="img-responsive img-rounded" width="70px" >'+
				'</div>'+

				'<div class="col-md-8">'+
					'<h2>The Walking Dead 行尸走肉</h2>'+
				'</div>'+
			'</div>'+

			'<div class="fh5co-spacer fh5co-spacer-xxs"></div>'+
			'<div></div>'+

			'<div class="row">'+
				'<div class="col-md-8">《行尸走肉》（The Walking Dead）<br>'+

					'美国漫画改编，AMC电视台同名剧集<br>'+
					'第一季6集已完结<br>'+
					'第二季13集已完结<br>'+
					'第三季16集已完结<br>'+
					'第四季16集已完结<br>'+
					'第五季16集已完结<br>'+
					'第六季16集已完结<br>'+
					'第七季正在播出（北京时间每周一早九点）……<br>'+
					'<br>'+
						"S07E01-The Day Will Come When You Won't Be<br>"+
						'2016-10-24周一 09:00<br>'+
						'<br>'+
							'S07E02 The Well<br>'+
							'2016-10-31周一 09:00<br>'+
							'<br>'+
								'S07E03 The Cell<br>'+
								'2016-11-07周一 09:00<br>'+
								'…………<br>'+

								'简介：<br>'+
								'<br>'+
									'在《行尸走肉》中，人类社会发生了一场浩劫，大多数人都变成了僵尸，幸存者微乎其微。一个叫Rick Grimes的普通警察在人类的' +
						'「生存之路」上扮演了重要角色。<br>'+
									'Rick在执行任务的过程中严重受伤，失去知觉。当他醒来后，发现四周到处是僵尸，家人和朋友都不见了。他在另两位幸存者的帮助下' +
						'前往政府设立在亚特兰大城的<br>'+
									'「安全地带」，期望能找到家人。他的旅途显然不会轻松，因为幸存者面临的威胁不仅来自吃人的僵尸，还来自内部矛盾……<br>'+
									'<br>'+
										'若说本剧主打的是血腥恐怖，不如说是一部披着僵尸噱头的伦理剧，人与人、人心与人性才是本片笔墨最多，着重刻画描写的部' +
						'分，这也算是本片独树一帜最为难能<br>'+
										'可贵的地方……<br>'+
										'<br>'+
											'相关链接：<br>'+
											'<br>'+
												'豆瓣--http://movie.douban.com/subject/4067152/<br>'+
												'IMDb--http://www.imdb.com/title/tt1520211/<br>'+
												'维基--http://en.wikipedia.org/wiki/The_Walking_Dead_(TV_series)<br>'+
												'官网--http://thewalkingdeadpodcast.com/<br>'+
												'AMC官方博客--http://blogs.amctv.com/the-walking-dead/<br>'+
												'推特--https://twitter.com/WalkingDead_AMC'+
				'</div>'+

				'<div class="col-md-4">'+
					'<h4>小组成员</h4>'+

					'<ul class="fh5co-post">'+
						'<li>'+
							'<div class="row">'+

								'<div class="col-md-4">'+
									'<div><a class="image-popup"><img src="{{ URL::asset('images/man2.png') }}" alt="FREEHTML5.co Free HTML5'+
			'Template" class="img-rounded"></a></div>'+
									'&nbsp;&nbsp;zc'+
								'</div>'+

								'<div class="col-md-4">'+
									'<div><a class="image-popup"><img src="{{ URL::asset('images/man.png') }}" alt="FREEHTML5.co Free HTML5'+
			'Template" class="img-rounded" ></a></div>'+
									'&nbsp;&nbsp; mj'+
								'</div>'+

								'<div class="col-md-4">'+
									'<div><a class="image-popup"><img src="{{ URL::asset('images/girl2.png') }}" alt="FREEHTML5.co Free HTML5'+
			'Template" class="img-rounded" ></a></div>'+
									'&nbsp;&nbsp;vd'+
								'</div>'+

							'</div>'+
						'</li>'+
					'</ul>'+

					'<h4>小组话题</h4>'+
					'<ul class="fh5co-post">'+
						'<li>'+
							'【更新二维码，大家扫起来】小组成立了一个微信号...'+
						'</li>'+
						'<li>'+
							'『剧透』《行尸》漫画剧情(2013年8月更新)'+
						'</li>'+
						'<li>'+
							'上周末亲自去了terminus。。。'+
						'</li>'+
						'<li>'+
							'TWD衍生剧主题小组已经成立！！！欢迎加入'+
						'</li>'+
					'</ul>'+
				'</div>'+
			'</div>')
        }
    </script>
    @endsection