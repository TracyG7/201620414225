<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require("sql1.php");
$db=new MyDB();
$a=$_POST["a"];
$schoolsno=$_SESSION["schoolsno"];
if($a==1){
	$ISBN=$_POST["i"];
	
	$strSQL=sprintf("select * from book where ISBN='%s' and schoolsno='%s'",$ISBN,$schoolsno);
	$result=$db->ExecSQL($strSQL);
	if($result->num_rows!=0){
		echo 0;
	}
	else{
	$strSQL=sprintf("select bookname,price from booktable where ISBN='%s'",$ISBN);
	$result=$db->ExecSQL($strSQL);
	$obj=$result->fetch_object();
	$arr['bookname']=$obj->bookname;
	$arr['price']=$obj->price; 
	echo json_encode($arr);
  }
}
if($a==2){
	$bookname=$_POST["i"];
	
	$strSQL=sprintf("select * from book,booktable  where booktable.ISBN=book.ISBN and bookname='%s' and schoolsno='%s'",$bookname,$schoolsno);
	$result=$db->ExecSQL($strSQL);
	if($result->num_rows!=0){
		echo 0;
	}
	else{
	$strSQL=sprintf("select ISBN,price from booktable where bookname='%s'",$bookname);
	$result=$db->ExecSQL($strSQL);
	$obj=$result->fetch_object();
	$arr['ISBN']=$obj->ISBN;
	$arr['price']=$obj->price; 
	echo json_encode($arr);
  }
}

?>