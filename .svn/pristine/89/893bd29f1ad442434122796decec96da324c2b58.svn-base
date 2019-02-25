<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>实验3.5</title>
<style type="text/css">
	.main{
			margin:0px  auto;/*页面显示为居中*/
		width: 700px;
	}
	table{
	
		width: 700px;
	
	
		border-collapse: collapse;/*设置两边框合并为一条。*/

		
	}
	th{
		font-weight:bolder;
		color: red;
	}
	th,td{
		width:70px;
		border:1px black solid;
		text-align: center;/*文字居中*/
		
	}
	
	
	
	
	</style>
</head>
 
<body>
	<div class="main">
	<table>
		<caption>乘法口诀表</caption>
	<?php
		
		for($i=0;$i<=9;$i++){
			echo '<tr>';
			for ($j=0;$j<=9;$j++){
				
				if ($i==0&&$j==0){
					echo "<th>x</th>";/*输出特殊的x*/
				}
				elseif($i==0&&$j!=0){
					echo "<th>$j</th>";/*对第一行*/
					
				}
				else{
					
					if($j==0){
						echo "<th>$i</th>";/*对第一行后的第一列*/
					}
					else{
						
						if(($i-$j)>=0){/*发现2*2，当行数-列数<0后为空格*/
							$s=$i*$j;
							echo '<td>',$i,'x',$j,'=',$s,'</td>';/*=比较特殊，只能用分开的方法*/
						}
						else{
							echo "<td></td>";
						}
						
					}
				}
				
			}
		  echo '</tr>';
		}
		
     ?>
	
	
	</table>
		</div>
</body>
</html>