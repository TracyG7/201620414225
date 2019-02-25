<?php
$sno=$_POST["sno"];
$name=$_POST["name"];
$title=$_POST["title"];
$state="0";
$time=date("Y-m-d H:i:s");
$partner=$_POST["partner"];
if(strlen($sno)!=12||is_numeric($sno)==false){
	$err=array('ret'=>-2,'msg'=>'学号不完整');//学号的长度不为12
	die(json_encode($err));//不进行下一步的操作
}
else{

	$data["ret"]=0;
	$data["sno"]=$sno;
	$data["name"]=$name;
	$data["title"]=$title;
	$data["state"]=$state;
	$data["time"]=$time;
	$data["state"]=$state;
	$data["partner"]=$partner;
	echo json_encode($data);
}
?>