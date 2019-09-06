<div class="row">
                                                <form class="form-horizontal" role="form" method="POST" action="lauSingleAct/{{Auth::id()}}" id="formId" >
                                                    {{ csrf_field() }}
                                                    
                                                    <div class="form-group" >
                                                    <label for="name" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label"><span style="color: #FF0000">*</span>活动名称</label>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                        <input type="text" class="form-control" name="name" id="name" >
                                                    </div>
                                                    </div>
                                                    <div></div>
                                                    <div class="form-group" >
                                                        <label for="exer_type" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label"><span style="color: #FF0000">*</span>运动类型</label>
                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                        <select class="form-control" id="exer_type" name="exer_type">
                                                            <option>追踪器</option>
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" >
                                                        <label for="intro" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">活动简介</label>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <textarea class="form-control" id="intro" name="intro" rows="3"></textarea>
                                                            </div>
                                                    </div>

                                                    <div class="form-group" >
                                                        <label for="t_start" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label"><span style="color: #FF0000">*</span>开始时间</label>
                                                    <div class="input-append date" id="datetimepicker1" data-date-format="yyyy-mm-dd hh:ii:ss">
                                                    	<span>&nbsp&nbsp</span>
                                                        <input class="span2" size="21" type="text" name="t_start" id="t_start">
                                                        <span class="add-on"><i class="icon-th"></i></span>
                                                    </div> 
                                                    </div>

                                                    <div class="form-group" >
                                                        <label for="t_end" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label"><span style="color: #FF0000">*</span>结束时间</label>
                                                    <div class="input-append date" id="datetimepicker2" data-date-format="yyyy-mm-dd hh:ii:ss">
                                                    <span>&nbsp&nbsp</span>
                                                        <input class="span2" size="21" type="text" name="t_end" id="t_end">
                                                        <span class="add-on"><i class="icon-th"></i></span>
                                                    </div> 
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-8 col-md-offset-1">
                                                            <button onclick="submit()" class="btn btn-primary btn-lg">
                                                                发布
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <script type="text/javascript">
                                                    function submit() {
                                                        $.ajax({
                                                            cache: true,
                                                            type: "POST",
                                                            url:'lauSingleAct/{{Auth::id()}}',
                                                            data:$('#formId').serialize(),// 你的formid
                                                            async: false,
                                                        });
                                                    }

                                                        function getNowFormatDate() {
                                                            var date = new Date();
                                                            var seperator1 = "-";
                                                            var seperator2 = ":";
                                                            var month = date.getMonth() + 1;
                                                            var strDate = date.getDate();
                                                                if (month >= 1 && month <= 9) {
                                                                    month = "0" + month;
                                                                }
                                                                if (strDate >= 0 && strDate <= 9) {
                                                                    strDate = "0" + strDate;
                                                                }
                                                            var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
                                                            + " " + date.getHours() + seperator2 + date.getMinutes()
                                                            + seperator2 + date.getSeconds();
                                                            return currentdate;
                                                        }

                                                        $('#datetimepicker1').datetimepicker().on('changeDate', function(ev){
                                                            var t_start_input = document.getElementById("t_start").value;
                                                            $('#datetimepicker2').datetimepicker('setStartDate', t_start_input);
                                                        });

                                                        $('#datetimepicker1').datetimepicker('setStartDate', getNowFormatDate());
                                                        $('#datetimepicker2').datetimepicker('setStartDate', getNowFormatDate());
                                                        
                                                        </script>
                                                </form>
                                            </div>