<?php

$area=["gd"=>"17.97万平方公里","hn"=>"21.18万平方公里","gx"=>"23.67万平方公里","ah"=>"14万平方公里"];
$population=["gd"=>"1.1亿人","hn"=>"6822万人","gx"=>"4838万人","ah"=>"6196万人"];
$cities=["gd"=>array("广州","佛山","深圳","东莞"),"hn"=>array("长沙","株洲","湘潭","衡阳"),"gx"=>array("南宁","柳州","桂林","梧州"),"ah"=>array("合肥","芜湖","蚌埠","淮南")];
$data=array();//创建数组
$province=$_POST["provinces"];//获取值
$data["area"]=$area[$province];
$data["population"]=$population[$province];
$data["cities"]=$cities[$province];
 echo json_encode($data);//返回json
?>