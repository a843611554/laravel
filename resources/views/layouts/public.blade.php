
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript"  src="{{asset('layui/layui.js')}}"></script>
	<script type="text/javascript"  src="{{asset('layer/layer.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/common.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/html5.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/respond.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	{{--<link rel="stylesheet" href="{{asset('css/full.css')}}">--}}
	<link rel="stylesheet" href="{{asset('css/global.css')}}">

	<link rel="stylesheet" href="{{asset('layui/css/layui.css')}}">


	{{--<!--[if lt IE 9]>--}}
	{{--<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>--}}
	{{--<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>--}}
	{{--<![endif]-->--}}
	<style>

		.login:hover,.reg:hover{
			border-radius: 20px;
			background-color: #5FB878;

		}
	</style>
</head>
<body>
	{{--导航--}}
	<!-- header -->
	<div class="header_box">
		<div class="header">
			<ul class="app-header">
				<li class="app-header-menuicon">
					<i class="layui-icon layui-icon-more-vertical"></i>
				</li>
			</ul>
			<h1 class="logo">
				<a href="{{url('qm/index')}}">青茗</a>
			</h1>
			<div class="nav"  style="visibility: visible">
				<a href="{{url('qm/index')}}" class="active">首页</a>
				<a href="{{url('qm/talk')}}">划水区</a>
				<a href="">真蛇区</a>
				<a href="">攻略区</a>
				@if(Session::get('username'))
				<ul class="layui-nav" style="float: right;background-color: white">
				<li class="layui-nav-item" lay-unselect="" >
					<a href="javascript:;"><img src="//t.cn/RCzsdCq" class="layui-nav-img">{{Session::get('username')}}</a>
					<dl class="layui-nav-child">
						<dd><a href="javascript:;">修改信息</a></dd>
						<dd><a href="javascript:;">安全管理</a></dd>
						<dd><a href="{{url('qm/quit')}}">退出</a></dd>
					</dl>
				</li>
				</ul>
				@else
					<a href="{{url('qm/login')}}"><button class="layui-btn layui-btn-normal login">登录</button></a>
					<a href="{{url('qm/reg')}}"><button class="layui-btn layui-btn-warm reg">注册</button></a>
				@endif
			</div>
			<ul class="layui-nav header-down-nav">
				<li class="layui-nav-item"><a href="{{url('qm/index')}}" class="active">首页</a></li>
				<li class="layui-nav-item"><a href="{{url('qm/talk')}}">划水区</a></li>
				<li class="layui-nav-item"><a href="">真蛇区</a></li>
				<li class="layui-nav-item"><a href="">攻略区</a></li>

				@if(Session::get('username'))
				<li class="layui-nav-item" lay-unselect=""  >
					<a href="javascript:;"><img src="//t.cn/RCzsdCq" class="layui-nav-img">{{Session::get('username')}}</a>
					<dl class="layui-nav-child"  style="background-color: #393D49">
						<dd><a href="javascript:;">修改信息</a></dd>
						<dd><a href="javascript:;">安全管理</a></dd>
						<dd><a href="{{url('qm/quit')}}">退了</a></dd>
					</dl>
				</li>
				@else
					<a href="{{url('qm/login')}}"><button class="layui-btn layui-btn-normal login">登录</button></a>
					<a href="{{url('qm/reg')}}"><button class="layui-btn layui-btn-warm reg">注册</button></a>
				@endif

			</ul>
		</div>
	</div>
	<!-- end-header -->

	@yield('content')


	<!-- footer -->
	<div class="footer">
		<div class="line"></div>
		<p class="copyright">
			@2018 ALL 陈洪亮<br />
			E-MAIL:843611554@qq.com<br />
			TEL:13210107876
		</p>
		<div class="icon_box">
			<a href="#"><i class="layui-icon layui-icon-login-wechat weixin-icon"></i></a>
			<a href="#"><i class="layui-icon layui-icon-login-weibo weibo-icon"></i></a>
		</div>
	</div>
	<!-- end-footer -->
</body>
</html>

<script>

    $('.app-header-menuicon').on('click',function(){
        $('.header-down-nav').toggleClass('down-nav')
    });




</script>