<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>实验5.2</title>
	<style type="text/css">
		.main{
			width: 200px;
			margin: 20px auto;
		}
	</style>
</head>

<body>
	
		<div class="main">
			
	<?php
		
	require('sql.php');
		$myDB=new MyDB();//new 封装访问sql的对象
			
       if(isset($_POST['remember']))
		$save=$_POST['remember'];//获取"记住一周"的值
	$user=$_POST['username'];//获取输入用户名的文本框的值
	$psw=$_POST['password'];//获取输入密码的文本框的值
     
		
		if(isset($user)==false){//首先判断post的user变量不存在
			if(!empty($_COOKIE['user'])){//一种可能是已经是记住状态直接登进本php页面
				$user=$_COOKIE['user'];//获取之前保留的用户名的文本框的值
	           $psw=$_COOKIE['psw'];
			}
		
			else{//另一种是不是记住转态直接登进本php页面
			header('Location: t52.html');
		}
		}
			 //存在进行select
	$strSQL=sprintf("Select * From user Where id='%s' And psw='%s'",$user,$psw);
	
	$result=$myDB->ExecSQL($strSQL);//s执行sql语句
	
	if($result->num_rows==0){//判断sql语句执行后没有结果
		echo '<p>','用户名或密码不正确！','</p>';
		echo '<p><a href="t52.html" target="_self">请重新登录</a></p>';//在原来的窗口直接打开t52.html
		exit();
	}
	     //如果结果正确
		else{
		
			
		 
		if(isset($save)==true&& $save=="true"){//判断用户是否勾选记住的选择
			
			setcookie('user',$user,time()+30*86400);
			setcookie('psw',$psw,time()+30*86400);
		 
			
		}
		 else
    {   //取消cookie      
        setcookie('user', '', time() - 30*86400);
        setcookie('psw', '', time() - 30*86400);
    }
		
		
		}
				
					 
		 
			 
			
				
	?>
		
		<p>欢迎您<span>&nbsp;<?php  echo $user ?></span></p>
 <?php
	$strSQL=sprintf("Select * From user Where id='%s' And psw='%s'",$user,$psw);
	
	$result=$myDB->ExecSQL($strSQL);
	$obj = $result->fetch_object();//获取子段名
    $lastLogin = $obj->time;//获得上一次的登录时间
		?>
		<p>上次登录的时间是<span>&nbsp;<?php  echo $lastLogin ?></span></p>
   <?php
    //更新时间
    $strSQL = sprintf("Update user Set time='%s' Where id='%s'", date('Y-m-d H:i:s'), $user);
    //执行更新语句
    $result = $myDB->ExecSQL($strSQL);
	?>
	  
	
		
	</div>
</body>
</html>