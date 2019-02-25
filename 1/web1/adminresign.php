<?php
require("sql1.php");
$db=new MyDB();
session_start();
	$username=addslashes($_POST["username"]);
$password=addslashes($_POST["password"]);//防止SQL注入
$s=$_POST["s"];
if($s==1){
	 $strSQL=sprintf("select * from administratortable where administratorusername='%s' ",$username);
	$result=$db->ExecSQL($strSQL);
	if($result->num_rows==0){
		echo 0;
	}
	else{
		echo 1;
	}
	
}
elseif($s==2){
	$strSQL=sprintf("update administratortable set password='%s' where administratorusername='%s'",$password,$username);
	$result=$db->ExecSQL($strSQL);
	
}
elseif($s==3){
	
	if(isset($_SESSION["username"])){
		$username=$_SESSION["username"];
		$strSQL=sprintf("select * from administratortable where administratorusername='%s'",$username);
	$result=$db->ExecSQL($strSQL);
		if($result->num_rows==0){
		echo 0;
	}
		else{
		
		
		
		
		$arr['username']=$_SESSION["username"];
		
		 $strSQL=sprintf("select * from schooltable where schoolsno='%s'",$_SESSION["schoolsno"]);
		$result=$db->ExecSQL($strSQL);
		$obj=$result->fetch_object();
		$arr['schoolname']=$obj->schoolname;
		$arr['schoollink']=$obj->schoollink;
		echo json_encode($arr);
	}
	}
	else{
		echo 0;
	}
}
else{
	

	 $strSQL=sprintf("select * from administratortable where administratorusername='%s' and password='%s' ",$username,$password);
	$result=$db->ExecSQL($strSQL);
	if($result->num_rows==0){
		echo 0;
	}
	else{
		$obj=$result->fetch_object();
		$_SESSION["schoolsno"]=$obj->schoolsno;
		
		 $_SESSION["username"]=$username;
		$_SESSION["password"]=$password;
	    	
		 echo 1;
	
}
}

?>