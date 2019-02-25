<?php
header('Content-Type: text/html; charset=utf-8');
 require('sql1.php');
$db=new MyDB();
$username=$_POST["username"];
$password=$_POST["password"];
$strSQL=sprintf("update usertable set password='%s' where username='%s'",$password,$username);
$result=$db->ExecSQL($strSQL);
?>