<?php
session_start();
$schoolsno=$_SESSION["schoolsno"];
$ISBN = $_REQUEST['ISBN'];
require("sql1.php");
$db=new MyDB();
$sql=sprintf("select * from usershop,usertable where usershop.username=usertable.username and schoolsno='%s'",$schoolsno);
$result=$db->ExecSQL($sql);
if($result->num_rows!=0){
	$sql = sprintf("delete from usershop where ISBN='%s' and username in (select username from usertable where schoolsno='%s' )",$ISBN,$schoolsno);
	$result=$db->ExecSQL($sql);
}
$sql = sprintf("delete from book where ISBN='%s' and schoolsno='%s'",$ISBN,$schoolsno);
$result=$db->ExecSQL($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>