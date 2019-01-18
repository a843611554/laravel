@extends('layouts.public')

@section('content')
    <!-- content -->
    <div class="content">
        <div class="title">
            <h5>欢迎来到青茗</h5>
            <h3>上可九天捞月，下可装萌嘤嘤</h3>
            <h4>We are all dalao! </h4>
        </div>
        <div class="layui-carousel imgbox" id="roll_img">
            <div carousel-item  class="item_img">
                <div><img style="width: 100%" src="{{asset('roll_img/roll_img1.jpg')}}"></div>
                <div><img style="width: 100%" src="{{asset('roll_img/roll_img2.jpg')}}"></div>
                <div><img style="width: 100%" src="{{asset('roll_img/roll_img3.jpg')}}"></div>
                <div><img style="width: 100%" src="{{asset('roll_img/roll_img4.jpg')}}"></div>
            </div>
        </div>
        <div class="prod-show">
            <div class="layui-fluid">
                <div class="row layui-col-space12 layui-clear">
                    <div class="layui-col-xs6 layui-col-sm6 layui-col-md3">
                        <div class="img-txt">
                            <img style="width: 80%; padding-left: 10%" src="{{asset('img/jiaoliu.png')}}" alt="">
                            <h3>交流经验</h3>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm6 layui-col-md3">
                        <div class="img-txt">
                            <img style="width: 80%; padding-left: 10%" src="{{asset('img/gonglve.png')}}" alt="">
                            <h3>分享攻略</h3>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm6 layui-col-md3">
                        <div class="img-txt">
                            <img style="width: 80%; padding-left: 10%"  src="{{asset('img/toufa.png')}}" alt="">
                            <h3>护发心得</h3>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm6 layui-col-md3">
                        <div class="img-txt">
                            <img style="width: 80%; padding-left: 10%" src="{{asset('img/gan.png')}}" alt="">
                            <h3>爆炒猪肝</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="prod-descr">
            <div class="layui-fluid">
                <div class="layui-row">
                    <div class="item layui-clear">
                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                            <img src="{{asset('img/she1.jpg')}}" class="left-img">
                        </div>
                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                            <div class="text">
                                <h3>划水区</h3>
                                <p>骚年，你渴望嘤嘤嘤吗？小姐姐，你渴望基情吗？</p>
                                <a href="{{url('qm/talk')}}">查看更多 ></a>
                            </div>
                        </div>
                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md8 bot-img-box">
                            <div class="bot-img">
                                <img src="{{asset('img/she2.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="item layui-clear">
                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                            <img src="{{asset('img/she1.jpg')}}" class="left-img">
                        </div>
                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                            <div class="text">
                                <h3>真蛇区</h3>
                                <p>让本小小黑，嘿嘿嘿一下！</p>
                                <a href="">查看更多 ></a>
                            </div>
                        </div>
                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md8 bot-img-box">
                            <div class="bot-img">
                                <img src="{{asset('img/she2.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="item layui-clear">
                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                            <img src="{{asset('img/she1.jpg')}}" class="left-img">
                        </div>
                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                            <div class="text">
                                <h3>攻略区</h3>
                                <p>吸血十层？没事，只需要2只快乐鬼切！嘤嘤嘤...</p>
                                <a href="">查看更多 ></a>
                            </div>
                        </div>
                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md8 bot-img-box">
                            <div class="bot-img">
                                <img src="{{asset('img/she2.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Partner">
            <div class="title">
                <h3>打劫</h3>
                <h4>我碧某某今天就是要打劫了</h4>
            </div>
            <div class="cont-box">
                <div class="layui-fluid">
                    <div class="row layui-col-space20">
                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                            <div class="layui-card">
                                <div class="layui-card-header">微信</div>
                                <div class="layui-card-body">
                                    <img src="{{asset('img/dajie1.jpg')}}" width="50%" alt="a59989301">
                                </div>
                            </div>
                        </div>

                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                            <div class="layui-card">
                                <div class="layui-card-header">支付宝</div>
                                <div class="layui-card-body">
                                    <img src="{{asset('img/dajie2.jpg')}}" width="50%" alt="8436115554@qq.com">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-content -->

    {{--demo--}}
        {{--<table class="layui-hide" id="test"></table>--}}

    <script>
        layui.use(['carousel','element','table'], function(){

            var carousel = layui.carousel;

            //设置轮播参数
            carousel.render({
                elem: '#roll_img'
                ,width: '100%' //设置容器宽度
                ,height:'auto'
                ,arrow: 'hover' //始终显示箭头
                ,anim: 'fade' //切换动画方式

            });
            var imgH = $('.imgbox div.layui-this img').outerHeight();

            $('.item_img').css('height',imgH+'px');

            window.onresize = function () {
                var imgH = $('.imgbox div.layui-this img').outerHeight();
                $('.item_img').css('height',imgH+'px')
            };



            {{--var table = layui.table;--}}

            {{--table.render({--}}
                {{--elem: '#test'--}}
                {{--,url:"{{url('qm/index/test')}}"--}}
                {{--,cellMinWidth: 80 //全局定义常规单元格的最小宽度，layui 2.2.1 新增--}}
                {{--,cols: [[--}}
                    {{--{field:'id', width:'50%', title: 'ID', sort: true}--}}
                    {{--,{field:'name', width:"50%", title: '用户名'}--}}
{{--//                    ,{field:'sex', width:80, title: '性别', sort: true}--}}
{{--//                    ,{field:'city', width:80, title: '城市'}--}}
{{--//                    ,{field:'sign', title: '签名', width: '30%', minWidth: 100} //minWidth：局部定义当前单元格的最小宽度，layui 2.2.1 新增--}}
{{--//                    ,{field:'experience', title: '积分', sort: true}--}}
{{--//                    ,{field:'score', title: '评分', sort: true}--}}
{{--//                    ,{field:'classify', title: '职业'}--}}
{{--//                    ,{field:'wealth', width:137, title: '财富', sort: true}--}}
                {{--]]--}}
                {{--,page: {--}}
                    {{--//支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档--}}
                    {{--layout: [ 'count', 'prev', 'page', 'next', 'skip'] //自定义分页布局--}}
                    {{--//,curr: 5 //设定初始在第 5 页--}}
                    {{--,groups: 5 //只显示 5个连续页码--}}
                    {{--,first: true //显示首页--}}
                    {{--,last: true //显示尾页--}}

                {{--},--}}
                {{--done:function () {--}}
{{--//                  alert(11); //加载完表格后的回调函数--}}
                {{--}--}}
            {{--});--}}
        });





    </script>

@endsection