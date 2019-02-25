<?php
header('Content-Type: text/html; charset=utf-8');
 require('sql1.php');
$db=new MyDB();
$a=$_POST["a"];
$b=$_POST["b"];
$username=$_POST["username"];
$time=date("Y-m-d H:i:s");
$size=sizeof($a);
$price=0;
for($i=0;$i<$size;$i++){
	$s=sprintf("select * from usershop where  ISBN='%s'and username='%s'",$a[$i],$username);
	$result=$db->ExecSQL($s);
	if($result->num_rows!=0){
		$s1=$result->fetch_object();
	$s1=$b[$i]+$s1->booknumber;
		$strSQL=sprintf("update usershop set time='%s',booknumber ='%s' where username='%s' and ISBN='%s'",$time,$s1,$username,$a[$i]);
	}
	else{
		$strSQL=sprintf("insert into usershop values('%s','%s','%s','%s')",$username,$a[$i],$time,$b[$i]);
		
	}
	
	
	$db->ExecSQL($strSQL);
	
	
	$strSQL1=sprintf("select price from booktable where ISBN='%s'",$a[$i]);
	$result=$db->ExecSQL($strSQL1);
	$p=$result->fetch_object();
	$price=$price+($p->price)*$b[$i];
	//
	$strSQL2=sprintf("select schoolsno from usertable where username='%s'",$username);
	$result=$db->ExecSQL($strSQL2);
	$obj=$result->fetch_object();
	$schoolsno=$obj->schoolsno;
	$strSQL2=sprintf("update book set booknumber=booknumber-'%s' where schoolsno in (select schoolsno from usertable where username='%s') and ISBN='%s'",$b[$i],$username,$a[$i]);
	$result=$db->ExecSQL($strSQL2);
	
}
echo $price;

	//$strSQL=sprintf("inser into usershop values('%s','%s')",$username,$value);
	//$db->ExecSQL($strSQL);


?>