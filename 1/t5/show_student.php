<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>实验5.3</title>
	<style type="text/css">
		.main{
			margin: 10px auto;
			width: 700px;
		}
		table{
			
			width: 700px;
		}
		
		table,th,td{
			  border: 2px black solid;
			  border-collapse: collapse;
			  text-align: center;
			  padding: 5px;
			
		}
		.th{
			background: yellow;/*标题*/
		}
		.even {
			background:#A0DCCA;/*序号为偶数的行样式*/
		}
	</style>
</head>

<body>
	
	<div class="main">
	<form >
		<table>
		<tr class="th">
	<th>序号</th>
	<th>学号</th>
		<th>姓名</th>
		<th>题目</th>
		<th>状态</th>
		<th>录入时间</th>
		<th>合作学生</th
	</tr>
		
	
		</div>
	<?php
		require_once('sql.php');
	$myDB=new MyDB();
	$strSQL="select * from students order by sno"; 
	
 $result=$myDB->ExecSQL($strSQL);
	$i=0; 
		while($obj=$result->fetch_object()){//获取字段
		$i++;
	  	if($i%2==0){//序号是否是双数
			echo "<tr class='even'>";
		}
			else{
				echo'<tr>';
			}
			
	?> 
		
		
		<td>
			<?php echo $i ?>
		</td>
		<td>
			<?php echo $obj->sno ?>
		</td>
			<td>
			<?php echo $obj->name  ?>
		</td>
			<td>
			<?php echo $obj->title ?>
		</td>
				<td>
			<?php echo $obj->state ?>
		</td>
			
				<td>
			<?php echo $obj->last_time?>
		</td>
				<td>
			<?php echo $obj->partner?>
		</td>
			
		
		<?php
		
		   echo '</tr>';
		  
		}
		?>
				</table>
	
	
	
	</form>
</body>
</html>