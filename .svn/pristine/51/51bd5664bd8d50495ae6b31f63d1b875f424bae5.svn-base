<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
	<style type="text/css">
		.main{
			width: 350px;
			margin: 20px auto;
		}
		.t{
			margin-bottom: 20px;/*每一行*/
		}
		.l{
		  display: inline-block;/*左边的标签*/
			width: 200px;
		}
		
	</style>
</head>

<body>
	<div class="main">
	<?php
	$username=$_POST['username'];
	$productNames=array(1=>'4个100瓦灯泡','8个100瓦灯泡','4个100瓦节能灯泡','8个100瓦节能灯泡');//物品
	$prices=array(1=>2.0,4.0,3.0,6.0);//价格
	  echo '<p>','尊敬的用户',$username,'你购买了以下产品','</p>';
	  $buy=$_POST['lights'];
		$total=0;
	  foreach($buy  as $v)//v是t51.html的value值，$buy是t51.html的name
	  {
		  $total=$prices[$v]+$total;
	?>
	<div class="t">
	<span class="l"><?php echo $productNames[$v]?> </span>
	<span><?php echo '￥',$prices[$v]?> </span>
	</div>
	<?php
	}
		echo '<hr/>';
		echo  '<span>','支付方式: ',$_POST['pay'],'<sapn>';
		
	?>
	<div class="t">
	<span class="l">原价: <?php echo '￥',$total?> </span>
	<span>优惠价: <?php echo '￥',$total*0.7?> </span>
	</div>
	
	</div>
	
</body>
</html>