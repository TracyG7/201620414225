<?php
header('Content-Type: text/html; charset=utf-8');
 require('sql1.php');
$page=intval($_POST["pageNum"]);
$db=new MyDB();
$a1=0;

if($_POST["s"]==1){
$a=$_POST["search"];
$schoolsno=$_POST["schoolsno"];
	
if(strpos($a," ")){
	$c="哈哈";
 $ab=(explode(" ",$a));
	$a1=$ab[0];
	$a2=$ab[1];
	
	$strSQL="select * from (select * from booktable where bookname like '%{$a1}%' or bookname like '%{$a2}%') as A,book where  A.ISBN= book.ISBN and schoolsno=$schoolsno and booknumber>0";
}
	else{
//$strSQL="select * from booktable where (ISBN like '%{$a}%') or (bookname like '%{$a}%') and booksno in (select booksno from book where schoolsno=$schoolsno)";
//$strSQL="select * from booktable inner join book on booktable.booksno=book.booksno where (ISBN like '%{$a}%') or (bookname like '%{$a}%') ";
$strSQL="select * from (select * from booktable where ISBN like '%{$a}%' or bookname like '%{$a}%') as A,book where  A.ISBN= book.ISBN and schoolsno=$schoolsno and booknumber>0";
	}
$result=$db->ExecSQL($strSQL);
$num=$result->num_rows;
	
$pageSize=10;
$totalPage=ceil($num/$pageSize);
$startPage=$page*$pageSize;
$arr['total'] = $num;  
$arr['pageSize'] = $pageSize;  
$arr['totalPage'] = $totalPage;
	
		if(strpos($a," ")){
 $ab=(explode(" ",$a));
	$a1=$ab[0];
	$a2=$ab[1];
	$strSQL1="select * from (select * from booktable where bookname like '%{$a1}%' or bookname like '%{$a2}%') as A,book where  A.ISBN= book.ISBN  and schoolsno=$schoolsno  and booknumber>0 limit $startPage,$pageSize";

	}
else{
//$strSQL1=sprintf("select * from booktable  where (ISBN like '%{$a}%') or (bookname like '%{$a}%') limit $startPage,$pageSize");不能用
$strSQL1="select * from (select * from booktable where ISBN like '%{$a}%' or bookname like '%{$a}%') as A,book where  A.ISBN= book.ISBN  and schoolsno=$schoolsno  and booknumber>0 limit $startPage,$pageSize";}
$result1=$db->ExecSQL($strSQL1);
while($row=$result1->fetch_array()){
	$arr['list'][]=array('ISBN'=>$row['ISBN'],'bookname'=>$row['bookname'],'price'=>$row['price']);
}
	echo json_encode($arr);
	
}
else{
	$username=$_POST["username"];
	$strSQL=sprintf("select * from schooltable where  schoolsno in (select schoolsno from usertable where username='%s')",$username);
	$result=$db->ExecSQL($strSQL);
	
	$s=$result->fetch_object();
	$schoolname=$s->schoolname;
	$schoolsno=$s->schoolsno;
	$schoollink=$s->schoollink;
	$arr['schoolname']=$schoolname;
	$arr['schoolsno']=$schoolsno;
	$arr['schoollink']=$schoollink;
	
$strSQL=sprintf("select * from booktable where ISBN in (select ISBN from book where schoolsno='%s' and booknumber>0)",$schoolsno);
$result=$db->ExecSQL($strSQL);
$num=$result->num_rows;
$pageSize=10;
$totalPage=ceil($num/$pageSize);
$startPage=$page*$pageSize;
$arr['total'] = $num;  
$arr['pageSize'] = $pageSize;  
$arr['totalPage'] = $totalPage;
$strSQL1=sprintf("select * from booktable where ISBN in (select ISBN from book where schoolsno='%s' and booknumber>0) limit $startPage,$pageSize",$schoolsno);
$result1=$db->ExecSQL($strSQL1);
while($row=$result1->fetch_array()){
	$arr['list'][]=array('ISBN'=>$row['ISBN'],'bookname'=>$row['bookname'],'price'=>$row['price']);
}
	echo json_encode($arr);
}




?>