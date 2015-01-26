	var go = document.getElementById('backtop');
	var timer = null;
	var isTop = true;
	var clientHeight = document.documentElement.clientHeight; //获取页面可视区域的高度
	//滚动条滚动时触发
	window.onscroll = function(){
		var osTop = document.documentElement.scrollTop || document.body.scrollTop;
		if(osTop >= clientHeight){
			go.style.display = 'block';
		}else{
			go.style.display = 'none';
		}

		if(!isTop){
			clearInterval(timer);
		}
		isTop = false;
	}
