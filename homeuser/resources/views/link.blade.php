<?php
header("content-type:text/html;charset=utf-8");
$link=rand(100000,999999);
setcookie('rand',$link,time()+300);
$_COOKIE['rand']=$link;
//echo $_COOKIE['rand'];
?>
<h3>您的验证码是&nbsp;&nbsp;<?php echo $link ?></h3>


