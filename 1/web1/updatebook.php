<?php
session_start();
$schoolsno=$_SESSION["schoolsno"];
$ISBN = htmlspecialchars($_REQUEST['ISBN']);
$booknumber = htmlspecialchars($_REQUEST['booknumber']);
require("sql1.php");
$db=new MyDB();
$sql = "update book set booknumber='$booknumber' where ISBN=$ISBN  and schoolsno=$schoolsno";
$result=$db->ExecSQL($sql);
if ($result){
	echo json_encode(array(
	'schoolsno' =>$schoolsno,
		'ISBN' => $ISBN,
		'booknumber' => $booknumber
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>