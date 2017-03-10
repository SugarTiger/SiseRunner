$(function(){
	$(window).scroll(function(event){
		if(arrivedAtBottom()) {
            console.log("到底部了");
            if(true){
            	var num=document.getElementsByClassName("smalldiv").length;
            	var smalldiv=document.createElement("div");
            	smalldiv.setAttribute('class','smalldiv');
            	var DivId = 'smalldiv'+num;
            	smalldiv.setAttribute('id',DivId);
            	$("#main").append(smalldiv);

            	var circle=document.createElement("div");
            	circle.setAttribute('class','circle');
            	circle.innerHTML=num+1;
            	var xDivId = '#'+DivId;//选择
            	$(xDivId).append(circle);

            	var vline=document.createElement("div");
            	vline.setAttribute('class','v-line');
            	$(xDivId).append(vline);

            	var day=document.createElement("div");
            	day.setAttribute('class','day');
            	day.innerHTML="周二";
            	var DayId = 'day'+num;
            	day.setAttribute('id',DayId);
            	$(xDivId).append(day);

            	var xDayId = '#'+DayId;//选择
            	var hline=document.createElement("div");
            	hline.setAttribute('class','h-line');
            	$(xDayId).append(hline);
            	
            	var text=document.createElement("div");
            	text.setAttribute('class','text');
            	var TextId = 'text'+num;
            	text.setAttribute('id',TextId);
            	var xTextId = '#'+TextId;//选择
            	var a=document.createElement("a");
            	a.setAttribute('href','#');
            	var AId = 'a'+num;
            	a.setAttribute('id',AId);
            	var xAId = '#'+AId;//选择
            	$(xDivId).append(text);
            	$(xTextId).append(a);

            	var title=document.createElement("h2");
            	title.setAttribute('class','title');
            	title.innerHTML="2016温州马拉松";
            	$(xAId).append(title);

            	var p1=document.createElement("p");
            	p1.innerHTML = "地点:<span>温州市</span>起跑时间：<span>2016年12月06日 赛事网站</span>";
            	$(xAId).append(p1);

            	var p2=document.createElement("p");
            	p2.innerHTML ="项目:<span>全程/半程</span>规模：<span>3000人/4000人/5000人 赛事网站</span>";
            	$(xAId).append(p2);   	
            }else{
            	$("#footerP").text("没有更多了");
            }
        }
	});
	// 检查是否到达底部的函数
	var arrivedAtBottom = function () {
        return $(document).scrollTop() + $(window).height() == $(document).height();
    }
});