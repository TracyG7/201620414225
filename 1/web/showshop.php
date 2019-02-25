<?php
header('Content-Type: text/html; charset=utf-8');
 require('sql1.php');
$page=intval($_POST["pageNum"]);
$db=new MyDB();
$username=$_POST["username"];
$strSQL=sprintf("select * from booktable where ISBN in(select ISBN from usershop where username='%s')",$username);
$result=$db->ExecSQL($strSQL);
$num=$result->num_rows;
$pageSize=6;
$totalPage=ceil($num/$pageSize);
$startPage=$page*$pageSize;
$arr['total'] = $num;  
$arr['pageSize'] = $pageSize;  
$arr['totalPage'] = $totalPage;

//$strSQL1=sprintf("select * from booktable  where (ISBN like '%{$a}%') or (bookname like '%{$a}%') limit $startPage,$pageSize");不能用
$strSQL1=sprintf("select * from booktable inner join usershop on booktable.ISBN=usershop.ISBN where username='%s'  limit $startPage,$pageSize",$username     );
$result1=$db->ExecSQL($strSQL1);
while($row=$result1->fetch_array()){
	$arr['list'][]=array('ISBN'=>$row['ISBN'],'bookname'=>$row['bookname'],'price'=>$row['price'],'time'=>$row['time'],'booknumber'=>$row['booknumber']);
}
	echo json_encode($arr);



?>