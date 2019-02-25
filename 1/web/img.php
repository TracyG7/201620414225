<?php

    session_start();
$username=$_SESSION["username"];
	$fileType=array('image/gif','image/jpeg','image/png');//设置图片类型，如果是图片就显示出来
$file=$_FILES["file"];
$storage=new SaeStorage();//使用云存储
	$totalError=0;//记录不
    
if (in_array($file['type'],$fileType)){
	if($file['size']>=2097152){
		echo 0;
	}
	else{
			 $file['name']="username".$username.".jpg";
	$storage->upload('webload', $file['name'], $file['tmp_name']);//将文件上传到云存储
	$showPath=$storage->getUrl('webload',$file['name']);//得到上传文件在云存储的地址
     echo($showPath);
	 }
}


	else{
		echo 0;
	}

   
	
	?>