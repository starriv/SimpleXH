/* 
* @Author: hzwangzhiwei
* @Date:   2014-12-08 16:14:37
* @Last Modified by:   hzwangzhiwei
* @Last Modified time: 2014-12-08 16:14:43
*/
var opt = {}; //配置
var __returnTopInterval = null; //动画定时器
var xEle = null; //节点
var xBox = null; //子节点

//x-return-top.js执行方法
function xReturnTop(id, options) {
    opt = options;
    xEle = document.getElementById(id);
    
    __addHtml();
    __addCss();
    //防止屏蔽已有的事件
    var oldOnscroll = window.onscroll;
    window.onscroll = function () {
        if(typeof oldOnscroll == 'function'){
            oldOnscroll.call(this);
        }
        __onWindowScroll();
    }; //卷动事件
    xEle.onclick = __animateReturnTop; //点击
    xBox.onmouseover = __onBoxMouseOver; //鼠标
    xBox.onmouseout = __onBoxMouseOut;
}

function __getOption(key) {
    return opt[key] || '';
}

function __onBoxMouseOut() {
    xBox.style.width = '36px';
}

function __onBoxMouseOver() {
    xBox.style.width = '100px';
}

function __getScrollTopOffset() {
    return window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
}

function __setScrollTopOffset(value) {
	if (document.body && document.body.scrollTop) {
        document.body.scrollTop = value;
    }
    if (document.documentElement && document.documentElement.scrollTop) {
        document.documentElement.scrollTop = value;
    }
}

function __animateHideXReturnTop() {
    xBox.style.bottom = '-60px';
}

//显示按钮动画
function __animateShowXReturnTop() {
    xBox.style.bottom = '200px';
}

function __scrollMove() {
    __setScrollTopOffset(__getScrollTopOffset() / 1.15);
    //滚动到最上面的时候，清除定时器
    if (__getScrollTopOffset() < 1) {
        clearInterval(__returnTopInterval);
        __returnTopInterval = null;
    }
}
function __animateReturnTop() {
    __returnTopInterval = setInterval(__scrollMove, 10);//每10毫秒只是一次方法
}

function __onWindowScroll() {
    if (__returnTopInterval == null) __getScrollTopOffset() > 5 ? __animateShowXReturnTop() : __animateHideXReturnTop();
}

function __addHtml() {
    xBox = document.createElement("div");
//    xBox.className = "box";
    xBox.style.overflow = "hidden";
    
    var xA = document.createElement("a");
    xA.href = "javascript:void(0)";
        
    var xSpan = document.createElement("span");
    xSpan.appendChild(document.createTextNode("返回顶部"));
        
    xBox.appendChild(xA);
    xBox.appendChild(xSpan);
        
    xEle.appendChild(xBox);
}

function __addCss() {
    xCss = document.createElement("style");
    xCss.appendChild(document.createTextNode("#xReturnTop{font-size:12px;position:fixed;}#xReturnTop div,#xReturnTop div a{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;width:36px;height:36px;display:block;}#xReturnTop div{transition:0.3s;position:fixed;left:80%;bottom:-60px;background:url(" + __getOption('path') + "returnBgX.png) repeat;cursor:pointer;}#xReturnTop div a{float:left;background:url(" + __getOption('path') + "returnTopIco.png) no-repeat 11px 10px;}#xReturnTop div a:hover{background-color:#6e6e6e;}#xReturnTop div span{float:left;line-height:36px;color:#e6e6e6;margin-left:6px;}"));
    document.getElementsByTagName('head')[0].appendChild(xCss);
}