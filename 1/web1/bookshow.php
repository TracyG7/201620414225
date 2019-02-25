<?php
session_start();
$schoolsno=$_SESSION["schoolsno"];
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
$result =array();
require("sql1.php");
$db=new MyDB();
$strSQL=sprintf("select count(*) from booktable,book  where booktable.ISBN=book.ISBN and schoolsno='%s'",$schoolsno);
$r=$db->ExecSQL($strSQL);
$row=$r->fetch_row();
$result["total"] = $row[0];
$strSQL1=sprintf("select book.ISBN,bookname,price,booknumber from booktable,book where booktable.ISBN=book.ISBN and schoolsno='%s'  limit $offset,$rows",$schoolsno);
$r1=$db->ExecSQL($strSQL1);
$items = array();
while($row=$r1->fetch_object()){
	array_push($items,$row);
}
$result["rows"] = $items;
	echo json_encode($result);
?>