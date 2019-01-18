@extends('layouts.public')

@section('content')
    <div style="background-image: {{asset('img/regbg.jpg')}}">
    <div class="layui-container" >
        <div class="layui-row">
            <div class="layui-col-md6 layui-col-xs12 layui-col-sm8 layui-col-md-offset3 layui-col-sm-offset2">
                <div class="layui-card" style="margin-top: 10%;margin-bottom: 10%">
                    <div class="layui-card-header" align="center"><h2>注册</h2></div>
                    <div class="layui-card-body">
                        <form class="layui-form" action="">
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="text-align: center">用户名</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="username" lay-verify="username" autocomplete="off" placeholder="输入用户名" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">请填写不大于10位的用户名</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="text-align: center">游戏名</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="game_name" lay-verify="game_name" autocomplete="off" placeholder="输入游戏名" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">输入阴阳师内游戏昵称（选填）</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="text-align: center">设置密码</label>
                                <div class="layui-input-inline">
                                    <input type="password" name="password"  id="password" lay-verify="pass" placeholder="请输入密码" autocomplete="off" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">请填写6到12位密码</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="text-align: center">确认密码</label>
                                <div class="layui-input-inline">
                                    <input type="password" name="password_c" lay-verify="pass_c" autocomplete="off" placeholder="再输一次密码" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">请再次确认密码</div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label" style="text-align: center">验证码</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="code" lay-verify="code"  autocomplete="off" placeholder="输入验证码" class="layui-input">
                                </div>
                                <div>
                                    <a id="change" href="javascript:;" code_src="">
                                        <img src="{{ url('qm/captcha/1') }}"  alt="验证码" title="刷新图片" width="120" height="60" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
                                        <span> 换一张</span>
                                    </a>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit="" lay-filter="sub_reg">立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>

    <script>
        layui.use(['form'], function() {
            var form = layui.form;
            form.verify({
                username: function(value){
                    if(value.length <=0){
                        return '用户名不能为空';
                    }
                    if(value.length >10){
                        return '用户名不能超过10个字符';
                    }
                }
                ,pass: [/(.+){6,12}$/, '密码必须6到20位']
                ,pass_c:function (value) {
                    if(value != $('#password').val()){
                        return '两次密码输入不同';
                    }
                }
                ,code:function (value){
                    if(value ==''){
                        return '请输入验证码'
                    }else {
                        $.ajax({
                            type : "post",
                            url : "{{url('qm/check_code')}}",
                            data : {
                                '_token': "{{csrf_token()}}",
                                'code': value
                            },
                            async : false,
                            success : function(data){
                                if(data.status == 0){
                                    window.status = 0;
                                }else {
                                    window.status = 1;
                                }
                                $url = "{{ URL('qm/captcha') }}";
                                $url = $url + "/" + Math.random();
                                document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
                            }
                        });
                        if(window.status == 0){
                            return '验证码错误'
                        }
                    }


                }

            });
            $("#change").click(function(){
                $url = "{{ URL('qm/captcha') }}";
                $url = $url + "/" + Math.random();
                document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
            })

            form.on('submit(sub_reg)', function(data){
//                layer.alert(JSON.stringify(data.field), {
//                    title: '最终的提交信息'
//                })
                $.ajax({
                    type : "post",
                    url : "{{url('qm/check_reg')}}",
                    data : {
                        '_token': "{{csrf_token()}}",
                        'field': data.field
                    },
                    async : false,
                    beforeSend: function () {
                        layer.load(2);
                    },
                    success : function(data){
                        layer.closeAll('loading');
                        if(data.status == 0){
                            layer.msg(data.msg, {icon: 2});
                        }else {
                            layer.msg(data.msg);
                            window.location = "{{url('qm/login')}}";
                        }
                    },
                    error : function () {
                        layer.closeAll('loading');
                        layer.msg('服务器出错啦！', {icon: 2});
                    }
                });
                return false;
            });

        });
    </script>

@endsection