<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>实验4.2</title>
</head>

<body>
	<?php
	$fileType=array('image/gif','image/jpeg','image/png');//设置图片类型，如果是图片就显示出来
	$totalError=0;//记录不能上传的文件数
   $i=1;//从文件1开始
	$storage=new SaeStorage();//使用云存储
	foreach ($_FILES as $file){//在上传的文件是一个数组，而file是数组里面的值
       
		if( $file['error']>0){//若上传失败，那么不能上传
			$totalError++;
		}
		
		else{
			echo '<p>','文件',$i++,'</p>';//显示文件数
			if($file['size']>2097152){//如果超过2MB的文件就显示错误信息
				echo '文件上传过大，超过2MB';
				$totalError++;
			}
		else		
			{
				$storage->upload('webload', $file['name'], $file['tmp_name']);//将文件上传到云存储
			$showPath=$storage->getUrl('webload',$file['name']);//得到上传文件在云存储的地址
			if (in_array($file['type'],$fileType)){
			echo "<p><img src=\"{$showPath}\" alt=\"加载中\"></p>";//如果是图片类型的就显示出来
	        }
			else{
				echo "<p>文件下载：<a href=\"{$showPath}\" >{$file['name']}</a></p> ";//否则进行下载
			}
			echo "<hr/>";
			
		}
		}
	
	}
	  
	if ($totalError == sizeof($_FILES)){
		echo  '全部文件都上传失败!';//如果全部上传的文件刚好等于想上传文件的数，那么就显示全部文件都上传失败
	}
	?>
</body>
</html>