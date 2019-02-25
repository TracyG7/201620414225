// JavaScript Document
  document.getElementById("phone").onblur=chphone;//手机号
  document.getElementById("creatpassword").onblur=chpassword;//密码
 document.getElementById("n").onblur=chname;//昵称
document.getElementById("checkword").onblur=chpp;//验证码
	function chphone(){
		var phonenumber=document.getElementById("phone");
		if(phonenumber.value==""){//值不能为空
			var i=document.getElementById("pn");
			i.src="1.png";
	        return false;
		}
	
	}
   function chpassword(){
	   
	   var password=document.getElementById("creatpassword");
		if(password.value.length<6){//值的长度不能小于6
			var i=document.getElementById("pw");
			i.src="2.png";
	        return false;
		}
   }

function chname(){
	   var hasname=new Array("Tom","Jack","Carson","Nadal","Federer","Djokovic","Murray")
	   var name=document.getElementById("n");
	   for (var i of hasname){
		   i1=i.toLowerCase();//小写
		   i2=i.toUpperCase();//大写
		if(name.value==i||name.value==i1||name.value==i2){
			var k=document.getElementById("nn");
			k.src="3.png";
	        return false;
		    break;
		}
	   }	  
	 if(name.value==""){
			alert("昵称不能为空");
	        return false;
		   
		}
			
	
   }
function ChangeProvince(){//在html中已使用onchange=“ ChangeProvince()”
	var data=[["广州","佛山","深圳","东莞"],["长沙","株洲","湘潭","衡阳"],["南宁","柳州","桂林","梧州"]];
	var p=document.getElementById("province");
	var c=document.getElementById("city");
    var cities=data[p.selectedIndex-1];//因为请选择已经占了一位，其实就是广东在数组的位置是1，而对于data的数组为0
	c.length=1;//只能选一个
    for (var i=0 ;i<cities.length;i++){
		c[i+1]=new Option(cities[i],cities[i]);//前面是显示，后面是提交后对应的值，因为请选择已占了1位，所以从1开始显示
	}
	
	
}
function chpp(){
	   var name=document.getElementById("checkword");
	var i=document.getElementById("ww");
	 if(name.value==""){
			i.src="4.png";
	       return false;		   
		}		
   }


