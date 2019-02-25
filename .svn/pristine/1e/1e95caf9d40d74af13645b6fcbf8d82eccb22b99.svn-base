<?php
header('Content-Type: text/html; charset=utf-8');
 require('sql1.php');

$db=new MyDB();
$schoolsno=$_POST["schoolsno"];
$ISBN=$_POST["ISBN"];
$strSQL=sprintf("select * from book where ISBN='%s' and schoolsno='%s' ",$ISBN,$schoolsno);
$result=$db->ExecSQL($strSQL);
$obj=$result->fetch_object();
echo($obj->booknumber);
?>