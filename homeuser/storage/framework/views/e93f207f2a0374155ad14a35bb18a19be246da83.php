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
<link rel="stylesheet" href="<?php echo e(URL::asset('register/common.css')); ?>">
<link rel="stylesheet" href="<?php echo e(URL::asset('register/login.css')); ?>">
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js?_v=20150514201547"></script><![endif]-->

</head>
<body>
 <header class="lianjia-header"><div class="nav-wrap"><ul class="nav-lst">
    <li><a class="home-a  first" href="<?php echo e(URL('/')); ?>"><span>首页</span></a></li>
    <li><a rel="nofollow"  class="home-a  " href="http://www.zufangzi.com/"><span>丁丁租房</span></a></li>
</ul>
<div class="login-panel typeUserInfo"><div class="typeShowUser"><span class="welcome">您好，欢迎来到链家！请<a href="<?php echo e(URL('register')); ?>"><span class="log">注册</span></a> 或 <a href="<?php echo e(URL('login')); ?>" class="btn-login bounceIn "><span class="reg">登录</span></a></span></div></div></div></header>

	<div class="user-login">
		<div class="back">
			<a href="<?php echo e(URL('/')); ?>" class="fl">返回链家网首页</a>
			<div class="fr">
				已有链家账号？<a href="<?php echo e(URL('login')); ?>" id="actResetUrl">马上登录</a>
			</div>
		</div>
		<div class="wrapper">
			<div class="bg-image">
				<img src="<?php echo e(URL::asset('register/login-bg.jpg')); ?>">
			</div>
			<div class="logo"><img src="<?php echo e(URL::asset('register/login-logo.png')); ?>"></div>
			<div class="reset-pwd registerred">
				<form action="<?php echo e(URL('register_do')); ?>" method="post" id="registerForm">
					<?php /*<input name="redirect" id="r" value="http://bj.lianjia.com/?utm_source=baidu&amp;utm_medium=pinzhuan&amp;utm_term=biaoti&amp;utm_content=biaotimiaoshu&amp;utm_campaign=sousuo" type="hidden">*/ ?>
					<ul>
						<li class=""><input name="u_mail" placeholder="请输入邮箱号" validate="notNull,isTel" validatename="邮箱号" class="phonecode" type="text"><button onclick="email()" class="send ">发送验证码</button><i>*</i>
						</li><li><input id="mailCode" placeholder="请输入邮箱验证码" name="verifyCode" class="actCheckVerify" validatename="邮箱验证码" validate="notNull" type="text"><i>*</i><span id="sp"></span></li>
                        <li class=""><input name="u_phone" placeholder="请输入手机号" validate="notNull,isTel" validatename="手机号" class="phonecode" type="text"><i>*</i>
                        <li><input name="u_name" placeholder="昵称" type="text" validate="notNull,isName" validatedata="isName=#username" validatename="昵称"></li>
						<li><input name="u_pwd" id="password" placeholder="请输入密码" validate="notNull,passwordRule" validatename="密码" type="password"><i>*</i></li>
						<li><input name="pwd" placeholder="请确认新密码" validate="notNull,isSame" validatedata="isSame=#password" validatename="确认密码" type="password"><i>*</i></li>
						<li class="mt10">
                            <label>
                                <input name="che" class="check-agreed alwayCheck" validate="isChecked" validatename="链家用户使用协议" type="checkbox">我已阅读并同意
                                <a href="http://www.lianjia.com/zhuanti/protocol" target="_blank">《链家用户使用协议》</a>
                            </label>
                        </li>
						<li>
                            <input value="立即注册" class="up-pwd actSubmit" id="sub" type="submit"></li>
					</ul>
				</form>
			</div>
		</div>
		<div class="lianjia-footer-simple">
			北京链家房地产经纪有限公司 / 网络经营许可证 京ICP备11024601号-12<br>北京链家房地产经纪有限公司保留全部权利&nbsp;
		</div>

		<script src="<?php echo e(URL::asset('register/fe.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('register/register.js')); ?>"></script>
		<script type="text/javascript">
			require([ "user/register" ], function(register) {
				register($("#registerForm"));
			});
//			$(function(){
//				var query = $.parseURL(location.href).query;
//				var href = $("#actResetUrl").attr("href");
//				$("#actResetUrl").attr("href",href);
//				var json = $.queryToJson(query);
//				if(json.service){
//					$("#r").val(decodeURIComponent(json.service));
//				}
//			});
//
		</script>
        <script>
            $("#sub").click(function(){
                var u_mail=$(":input[name='u_mail']").val();
                var verifyCode=$(":input[name='verifyCode']").val();
                var u_phone=$(":input[name='u_phone']").val();
                var u_name=$(":input[name='u_name']").val();
                var u_pwd=$(":input[name='u_pwd']").val();
                var pwd=$(":input[name='pwd']").val();
                var che=$(":input[name='che']");
                if(u_mail==""|verifyCode==""|u_phone==""|u_name==""|u_pwd==""|pwd==""){
                    return false;
                }
                var rand=document.cookie.split(";")[0].split("=")[1];
                var mailCode=$("#mailCode").val();
                if(mailCode!=rand){
                    $("#sp").html("<font color='#dc143c'>您输入的验证码已过期,请重新发送</font>");
                    return false;
                }
                if(!che.is(":checked")){
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(URL('register_do')); ?>",
                    data: {
                        u_mail:u_mail,
                        u_phone:u_phone,
                        u_name:u_name,
                        u_pwd:u_pwd
                    },
                    success: function(msg){
                        if(msg==2){
                            alert("邮箱账号已存在");
                            return false;
                        }
                        if(msg==1){
                            alert("注册成功");
                            location.href="<?php echo e(URL('/')); ?>";
                        }
                    }
                });
            })
            /**
             * 通过邮箱发送验证码
             */
            var count = 30;
            var myCountDown;
            function email(){
                var u_mail=$(":input[name='u_mail']").val();
                if(u_mail==""){
                    return false;
                }
                myCountDown = setInterval(countDown,1000);
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(URL('send')); ?>",
                    data: {
                        u_mail:u_mail
                    },
                    success: function(msg){
                        //alert(msg);
                    }
                });
                function countDown(){
                    $(".send").attr("disabled",true);
//                $(".send").removeClass("btn_wsyhcz");
//                $(".send").addClass("btn_wsyhcz_2");
                    $(".send").text("请稍等 "+ count +" 秒！");
                    count--;
                    if(count==0){
                        $(".send").text("发送验证码").removeAttr("disabled");
//                    $(".send").removeClass("btn_wsyhcz_2");
//                    $(".send").addClass("btn_wsyhcz");
                        clearInterval(myCountDown);
                        count = 30;
                    }
                }
            }
            $("#mailCode").blur(function(){
                var rand=document.cookie.split(";")[0].split("=")[1];
                var mailCode=$("#mailCode").val();
                if(mailCode==""){
                    return false;
                }
                if(rand!=mailCode){
                    $("#sp").html("<font color='#dc143c'>您输入的验证码不正确</font>");
                    return false;
                }else{
                    $("#sp").html("<font></font>");
                }

            })
            /**
             * 设定一个读秒程序  减少发送频率
             * @type  {number}
             */
//            var count = 30;
//            var myCountDown;
//            $(function(){
//                $(".send").click(function(){
//                    myCountDown = setInterval(countDown,1000);
//                });
//            });
//            function countDown(){
//                $(".send").attr("disabled",true);
////                $(".send").removeClass("btn_wsyhcz");
////                $(".send").addClass("btn_wsyhcz_2");
//                $(".send").text("请稍等 "+ count +" 秒！");
//                count--;
//                if(count==0){
//                    $(".send").text("发送验证码").removeAttr("disabled");
////                    $(".send").removeClass("btn_wsyhcz_2");
////                    $(".send").addClass("btn_wsyhcz");
//                    clearInterval(myCountDown);
//                    count = 30;
//                }
//            }
        </script>
        <script>

        </script>

</div></body></html>