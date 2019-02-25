<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>实验5.3</title>
</head>

<body>
	<?php
	require_once('sql.php');
	 $sno=$_POST['sno'];
	 $name=$_POST['name'];
	$psw=$_POST['psw'];
	$title=$_POST['title'];
	$partner=$_POST['partner'];
	$action=$_POST['action'];
	$myDB=new MyDB();
	
	if($action=='add'){//增加题目
		$insert="insert into students(sno,name,psw,title,last_time,partner) values('$sno','$name','$psw','$title',now(),'$partner')";
		$result=$myDB->ExecSQL($insert);
	    $i=$myDB->GetAffectedRows();//如果数据表用影响的行则返回true，否则为false
		if(!$i){//没有插入成功
			die('Failure,data cannot been inserted!');
		
		}
		
		else{
			
			
		   include('show_student.php');
		}
	
	}
	if($action=='modify'){//修改题目
		$strSQL=sprintf("select * from students where sno='%s' and psw='%s' and name='%s'",$sno,$psw,$name);//修改额时候先判断输入的学号，密码和姓名是否正确
		$result=$myDB->ExecSQL($strSQL);
		
		if($result->num_rows==0){//判断sql语句执行后没有结果
		header('Location:error.html');
		exit();
	    }
		else{
			
			 $strSQL = sprintf("update students set title='%s' where sno='%s'",$title, $sno);//修改题目
    //执行更新语句
           $result = $myDB->ExecSQL($strSQL);
		}
		
		
	}
	
	?>
</body>
</html>