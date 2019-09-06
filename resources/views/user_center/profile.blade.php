@extends('userCenter')

@section('titleAndDesc')
    <title>账户设置 &mdash; 跃动 </title>
    <meta name="description" content="跃动，账户设置" />
    
    @endsection

    @section('moreScript')
    <script >
    $(document).ready(function(){
        document.getElementById('profile').style="color:#FBB040"
        document.getElementById('myFds').style="color:#000000"
        $("#title").html("账户设置");
        $("#tag").html("");
        $("#mainContent").html('<div class="row">'+
                            '<form class="form-horizontal col-lg-7 col-md-7 col-sm-7 col-xs-7" role="form" method="POST" action="" style="margin-top: 60px">'+
                                 '{{ csrf_field() }}'+

                                '<div class="form-group" >'+
                                    '<label  class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">性别</label>'+

                                    '<div class="row">'+
                                    '<div class="radio col-md-2">'+
                                    '<label>'+
                                        '<input type="radio" name="remember" checked> 男'+
                                    '</label>'+
                                    '</div>'+
                                    '<div class="radio col-md-2">'+
                                    '<label>'+
                                        '<input type="radio" name="remember"> 女'+
                                    '</label>'+
                                    '</div>'+
                                    '</div>'+
                                '</div>'+

                                '<div class="form-group" >'+
                                                        '<label for="birthday" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">生日</label>'+
                                                    '<div class="input-append date" id="datetimepicker1" data-date-format="yyyy-mm-dd">'+
                                                        '<input class="span2" size="16" type="text" name="birthday" id="birthday" value="1996-11-29">'+
                                                        '<span class="add-on"><i class="icon-th"></i></span>'+
                                                    '</div> '+
                                '</div>'+

                                '<div class="form-group" >'+
                                    '<label for="location" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">所在地</label>'+
                                    '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">'+
                                        '<select class="form-control" id="location" name="location">'+
                                            '<option>上海</option>'+
                                            '<option>北京</option>'+
                                            '<option>江苏</option>'+
                                        '</select>'+
                                    '</div>'+
                                '</div>'+

                                '<div class="form-group" >'+
                                    '<label for="exer_dclr" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">运动宣言</label>'+
                                    '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">'+
                                        '<textarea class="form-control" id="exer_dclr" name="exer_dclr" rows="3">'+
                                            '我爱运动，运动使我快乐！'+
                                        '</textarea>'+
                                    '</div>'+
                                '</div>'+

                                '<div class="form-group">'+
                                    '<div class="col-md-8 col-md-offset-1">'+
                                         '<button type="submit" class="btn btn-primary btn-lg">'+
                                             '保存'+
                                         '</button>'+
                                    '</div>'+
                                '</div>'+

                            '</form>'+
                        '</div>');

        $('#datetimepicker1').datetimepicker();
    })
        
    </script>
    @endsection