$(function(){
	var speen = 150;
 	outPlay = function(){
		setInter = setInterval("out_fun()",speen); //setInterval间隔指定的毫秒数不停地执行指定的代码
				  //设置时间控制器					   //out_fun()方法进行轮播
	}
	outPlay(); //一定需要这一句话，这是方法的执行
	out_fun = function(){
		$(".title_div .titlel").fadeToggle("slow");
		$(".title_div .titler").fadeToggle('slow');
	}
})