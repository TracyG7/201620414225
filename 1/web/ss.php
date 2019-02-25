<?php
header('Content-Type: text/html; charset=utf-8');
 require('sql1.php');
$page=intval($_POST["pageNum"]);
$db=new MyDB();
$username=$_POST["username"];
$array=$_POST["array"];
$comma_separated = implode(",", $array);//将数组转换字符串含有，

$strSQL="select * from booktable where ISBN in ($comma_separated)";
$result=$db->ExecSQL($strSQL);
$num=$result->num_rows;
$pageSize=6;
$totalPage=ceil($num/$pageSize);
$startPage=$page*$pageSize;
$arr['total'] = $num;  
$arr['pageSize'] = $pageSize;  
$arr['totalPage'] = $totalPage;

//$strSQL1=sprintf("select * from booktable  where (ISBN like '%{$a}%') or (bookname like '%{$a}%') limit $startPage,$pageSize");不能用
$strSQL1="select * from booktable  where ISBN in ($comma_separated)  limit $startPage,$pageSize";
$result1=$db->ExecSQL($strSQL1);
while($row=$result1->fetch_array()){
	$arr['list'][]=array('ISBN'=>$row['ISBN'],'bookname'=>$row['bookname'],'price'=>$row['price']);
}
	echo json_encode($arr);



?>