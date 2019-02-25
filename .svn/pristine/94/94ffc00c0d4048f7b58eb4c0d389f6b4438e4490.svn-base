<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>实验3.4</title>
</head>

<body>
	<?php 
	   $str='The Quick Brown Fox.';
	    echo '<p>',$str,'</p>';
	$str1=strtolower($str);/*转为小写*/
	$str2=str_replace('brown','red',$str1);/*更改*/
	    echo '<p>',$str2,'</p>';
	    
	$min=ord('a');
	$max=ord('z');/*获得ASCII码*/
	
	for ($i=0;$i < strlen($str2);$i++){
		$a=ord($str2{$i});
	
		if($a>$max||$a<$min){
			
			continue;/*不是字谜就跳开*/
		}
		else{
				
			
			$a=$a+5;
		   if($a>$max)
			   $a=$a-26;/*因为如z的ascii码的时候大于26，从a开始，而字母一共有26，所以减26*/
		}
		$str2{$i}=chr($a);
		
	}
	  echo '<p>',$str2,'</p>';
	?>
	</body>
</html>

