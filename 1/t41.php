<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>实验4.1</title>
<style type="text/css">
	.d{
		margin: 0 auto;/*是div居中*/
		width: 300px;
	}
	</style>
</head>

<body style="background: #E18FED"> <!--设置背景颜色-->
 <div class="d">
	<?php
	 echo "<p>你的手机号码&nbsp:&nbsp{$_POST['phonenumber']}</p>";//通过phonenumber来访问数值
	echo "<p>创建密码&nbsp:&nbsp{$_POST['password']}</p>";
	echo "<p>昵称&nbsp:&nbsp{$_POST['name']}</p>";
	echo "<p>性别&nbsp:&nbsp{$_POST['gender']}</p>";
	
	echo "<p>所在地&nbsp:&nbsp{$_POST['city']}</p>";
	 $acity=array('北京市'=>'010','上海市'=>'021','广州市'=>'020','深圳市'=>'0755');

	
	 echo "<p>所在区号&nbsp:&nbsp{$acity[$_POST['city']]}</p>";//访问acity[key]
	 echo "<p>手机验证码&nbsp:&nbsp{$_POST['code']}</p>";
	?>
<div>
	
</body>
</html>