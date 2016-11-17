<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-transform">
<title>用户注册-北京链家网</title>
<meta name="description" content="">
<meta name="keywords" content="">

<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<link href="http://passport.lianjia.com/favicon.ico" type="image/x-icon" rel="icon">
<link href="http://passport.lianjia.com/favicon.ico" type="image/x-icon" rel="shortcut icon">
<link rel="stylesheet" href="<?php echo e(URL::asset('css/common.css')); ?>">
<link rel="stylesheet" href="<?php echo e(URL::asset('css/login.css')); ?>">


</head>
<body>
	<!-- <header class="lianjia-header"><div class="nav-wrap"><ul class="nav-lst">
    <li><a class="home-a  first" href="http://bj.lianjia.com/"><span>首页</span></a></li>
    <li><a class="home-a  " href="http://bj.lianjia.com/ershoufang/"><span>二手房</span></a></li>
    <li><a class="home-a  " href="http://bj.lianjia.com/xinfang/"><span>新房</span></a></li>
    <li><a rel="nofollow"  class="home-a  " href="http://www.zufangzi.com/"><span>丁丁租房</span></a></li>
    <li><a class="home-a  " href="http://www.lianjia.com/overseas/"><span>海外</span></a></li>
    <li><a class="home-a  " href="http://bj.lianjia.com/shangpuchuzu/"><span>商铺</span></a></li>
    <li><a class="home-a  " href="http://bj.lianjia.com/xiaoqu/"><span>小区</span></a></li>
    <li><a class="home-a  " href="http://bj.lianjia.com/yezhu/"><span>业主</span></a></li>
    <li><a class="home-a  " href="http://bj.lianjia.com/jingjiren/"><span>经纪人</span></a></li>
    <li><a class="home-a  " href="http://bj.lianjia.com/ask/"><span>问答</span></a></li>
    <li><a class="home-a  " href="http://bj.lianjia.com/baike/"><span>百科</span></a></li>
    <li><a rel="nofollow"  class="home-a  " href="https://licai.lianjia.com/"><span>理财</span></a></li>
</ul>
<div class="login-panel typeUserInfo"><div class="typeShowUser"><span class="welcome">您好，欢迎来到链家！请<a href="http://login.lianjia.com/login/register/"><span class="log">注册</span></a> 或 <a href="http://login.lianjia.com/" class="btn-login bounceIn "><span class="reg">登录</span></a></span></div></div></div></header>
 -->
	<div class="user-login">
		<div class="back">
			<a href="http://www.lianjia.com/" class="fl">返回链家网首页</a>
			<div class="fr">
				已有链家账号？<a href="https://passport.lianjia.com/cas/login?service=http%3A%2F%2Fbj.lianjia.com%2F%3Futm_source%3Dbaidu%26utm_medium%3Dpinzhuan%26utm_term%3Dbiaoti%26utm_content%3Dbiaotimiaoshu%26utm_campaign%3Dsousuo" id="actResetUrl">马上登录</a>
			</div>
		</div>
		<div class="wrapper">
			<div class="bg-image">
				<img src="<?php echo e(URL::asset('img/login-bg.jpg')); ?>">
			</div>
			<div class="logo"><img src="<?php echo e(URL::asset('img/login-logo.png')); ?>"></div>
			<div class="reset-pwd registerred">
				<form action="/register/ljRegister/register" method="post" id="registerForm">
					<input name="redirect" id="r" value="http://bj.lianjia.com/?utm_source=baidu&amp;utm_medium=pinzhuan&amp;utm_term=biaoti&amp;utm_content=biaotimiaoshu&amp;utm_campaign=sousuo" type="hidden">
					<ul>
						<li class=""><input name="mobile" placeholder="请输入手机号" validate="notNull,isTel" validatename="手机号" class="phonecode" type="text"><a onclick="javascript:;" class="send actRegisterSMS">发送验证码</a><i>*</i>
						</li><li><input placeholder="请输短信验证码" name="verifyCode" class="actCheckVerify" validatename="短信验证码" validate="notNull" type="text"><i>*</i></li>
						<li><input name="nickName" placeholder="昵称" type="text"></li>
						<li><input name="password" id="password" placeholder="请输入密码" validate="notNull,passwordRule" validatename="密码" type="password"><i>*</i></li>
						<li><input placeholder="请确认新密码" validate="notNull,isSame" validatedata="isSame=#password" validatename="确认密码" type="password"><i>*</i></li>
						<li class="mt10"><label><input class="check-agreed alwayCheck" validate="isChecked" validatename="链家用户使用协议" type="checkbox">我已阅读并同意<a href="http://www.lianjia.com/zhuanti/protocol" target="_blank">《链家用户使用协议》</a></label></li>
						<li><input value="立即注册" class="up-pwd actSubmit" type="submit"></li>
					</ul>
				</form>
			</div>
		</div>

		<div class="lianjia-footer-simple">
			北京链家房地产经纪有限公司 / 网络经营许可证 京ICP备11024601号-12<br>北京链家房地产经纪有限公司保留全部权利&nbsp;
		</div>

		<script src="<?php echo e(URL::asset('js/fe.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('js/common.js')); ?>"></script>
		<div id="only" data-city="login" data-page="login_register"></div>
		<script>
			var path = 'http://cdn.lianjia.com/pc/asset?_v=20150514201547'
					.split("?");
			require
					.config({
						baseUrl : path[0],
						paths : {
							'echarts' : '../../dep/echarts-1.4.1/build/echarts',
							'echarts/chart/bar' : '../../dep/echarts-1.4.1/build/echarts',
							'echarts/chart/line' : '../../dep/echarts-1.4.1/build/echarts',
							'echarts/chart/pie' : '../../dep/echarts-1.4.1/build/echarts',
							'common' : 'common',
							'jquery-ui' : '../../dep/jquery-ui/jquery-ui.min'
						},
						urlArgs : path[1]
					});
		</script>
		<script src="<?php echo e(URL::asset('js/register.js')); ?>">
			
		</script>
		<script type="text/javascript">
			require([ "user/register" ], function(register) {
				register($("#registerForm"));
			});
			$(function(){
				var query = $.parseURL(location.href).query;
				var href = $("#actResetUrl").attr("href")+"?"+query;
				$("#actResetUrl").attr("href",href);
				var json = $.queryToJson(query);
				if(json.service){
					$("#r").val(decodeURIComponent(json.service))
				}
			});
			
		</script>

</div></body></html>