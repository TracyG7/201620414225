<?php
session_start();
$schoolsno=$_SESSION["schoolsno"];
$ISBN = htmlspecialchars($_REQUEST['ISBN']);
$price = htmlspecialchars($_REQUEST['price']);
$booknumber = htmlspecialchars($_REQUEST['booknumber']);
require("sql1.php");
$db=new MyDB();
$sql = "insert into book(schoolsno,ISBN,booknumber) values('$schoolsno','$ISBN','$booknumber')";
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