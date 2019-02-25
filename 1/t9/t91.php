
	<?php
	sleep(2);//可以显示检测中
   
	$users=['tom','jack','admin'];//数组
	$data=$_GET['user'];//ajax用了get的方式
	if (in_array($data, $users) == true)//查询数组里是否含有数值
    {
		//有的话返回0
        echo 0;
    }
    else
    {
		//没有的话返回1
        echo 1;
    }
 
	?>