$(function(){
	var r = 200,
		hd = 360/$("#time li").length;
	$("#time li").each(function(index){
		$(this).css({"left":Math.sin((hd*index))*r-10,"top":Math.cos((hd*index))*r-10});
	});
	
	var time = new Date(),
		second = time.getSeconds(),
		minute = time.getMinutes(),
		hour = time.getHours(),
		minuteDeg = minute*6 + second*6/60;	
	$("#second").css({"transform": "rotate("+second*6+"deg)" });
	$("#minute").css({"transform": "rotate("+minute*6+"deg)" });
	if(hour>12){hour = hour -12;}
	hourDeg = hour * 30 + minute*30/60;
	$("#hour").css({"transform": "rotate("+hour*30+"deg)"});

  setInterval(function(){
    var time = new Date(),
      second = time.getSeconds(),
      minute = time.getMinutes(),
      hour = time.getHours(),
      minuteDeg = minute*6 + second*6/60;	
    if(hour>12){hour = hour -12;}
    hourDeg = hour * 30 + minute*30/60;
    $("#second").css({ "transform": "rotate("+second*6+"deg)" });
    $("#minute").css({ "transform": "rotate("+minuteDeg+"deg)"});
    $("#hour").css({ "transform": "rotate("+hourDeg+"deg)" });
	},1000)
})