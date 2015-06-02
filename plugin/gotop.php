<?php defined('IN_OS') or exit('Access Invalid!'); ?>
<li><a href="javascript:void(0);" id="gotop" class="gotop">顶部</a></li>
<script type="text/javascript">
$(document).ready(function(){
	//首先将#back-to-top隐藏
	$("#gotop").hide();
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	$(function () {
	$(window).scroll(function(){
    	if ($(window).scrollTop()>100){
    		$("#gotop").fadeIn(1000);	
    	}
	else
    	{
    		$("#gotop").fadeOut(1000);
    	}
	});
	//当点击跳转链接后，回到页面顶部位置
	$("#gotop").click(function(){
    	$('body,html').animate({scrollTop:0},500);
        	return false;
    	});
	});
});
</script>