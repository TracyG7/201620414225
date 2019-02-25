<?php
header('Content-Type: text/html; charset=utf-8');
require('sql1.php');
session_start();
		$db=new MyDB();//new 封装访问sql的对象
//验证用户名是否存在
if($_GET["t"]==1){
$username=$_GET["username"];
$strSQL=sprintf("select * from usertable where username='%s'",$username);
$result=$db->ExecSQL($strSQL);//s执行sql语句
	$strSQL1=sprintf("select * from administratortable where administratorusername='%s'",$username);
$result1=$db->ExecSQL($strSQL1);//s执行sql语句
if($result->num_rows==0&&$result1->num_rows==0){//判断sql语句执行后没有结果
	 echo 1;
	}
else{
	echo 0;
}
}
//验证学校是否入驻
elseif($_GET["t"]==2){
	$schoolname=$_GET["schoolname"];
$strSQL=sprintf("select * from schooltable where schoolname='%s'",$schoolname);
$result=$db->ExecSQL($strSQL);//s执行sql语句
if($result->num_rows==0){//判断sql语句执行后没有结果
	 echo 0;
	}
else{
	echo 1;
	
}
}
//忘记密码
elseif($_POST["t"]==3){
	$username=$_POST["username"];
    $strSQL=sprintf("select * from usertable where username='%s'",$username);
	$result=$db->ExecSQL($strSQL);
	if($result->num_rows==0){
		echo 0;
	}
	else{
		$password=$_POST["password"];
		 $strSQL=sprintf("update usertable set password='%s' where username='%s'",$password,$username);
		$db->ExecSQL($strSQL);
		echo 1;
	}
}
//登录
elseif($_POST["t"]==4){
	$username=addslashes($_POST["username"]);
$password=addslashes($_POST["password"]);//防止SQL注入
	 $strSQL=sprintf("select * from usertable where username='%s' and password='%s' ",$username,$password);
	$result=$db->ExecSQL($strSQL);
	if($result->num_rows==0){
		echo 0;
	}
	else{
		
		 $_SESSION["username"]=$username;
		$_SESSION["password"]=$password;
	    
		 echo 1;
	
}
}
elseif($_POST["t"]==5){
	
	if(isset($_SESSION["username"])){
		$username=$_SESSION["username"];
		$strSQL=sprintf("select * from usertable where username='%s'",$username);
	$result=$db->ExecSQL($strSQL);
		if($result->num_rows==0){
		echo 0;
	}
		   else{
		echo $_SESSION["username"];
		}
		   }
		   
	else{
		echo 0;
	}
}
//注册
else{
$username=$_POST["username"];
$password=$_POST["password"];
	$schoolname=$_POST["schoolname"];
	$strSQL=sprintf("select * from schooltable where schoolname='%s'",$schoolname);
$result=$db->ExecSQL($strSQL);//s执行sql语句
	$obj=$result->fetch_object();
	$school=$obj->schoolsno;
$strSQL=sprintf("insert into usertable values('%s','%s','%s')",$username,$password,$school);
$result=$db->ExecSQL($strSQL);
	
}


?>