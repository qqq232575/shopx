<?php defined('IN_OS') or exit('Access Invalid!');?>


	                <?php if (!empty($output['goods_image'])) {?>
	                <?php echo implode(',', $output['goods_image']);?>
	                <?php }?>
<link href="<?php echo BASE_SITE_URL;?>/plugin/zoom/css/cloud-zoom.css" rel="stylesheet" type="text/css" />
<style>
.ncs-handle {
  width: 350px;
  height: 24px;
  padding-top: 10px;
  border-top: dotted 1px #EEE;
  position: absolute;
  z-index: 1;
  left: 10px;
  top: 422px;
</style>
<script type="text/javascript" src="<?php echo BASE_SITE_URL;?>/plugin/zoom/js/cloud-zoom.1.0.2.min.js"></script>
	<div class="zoom-section">    	  
		<div class="zoom-small-image">
			<a href-lcl='<?php echo BASE_SITE_URL;?>/plugin/zoom/images/3.png' class = 'cloud-zoom' id='zoom1' rel="adjustX:10, adjustY:-4">
			<img src="<?php echo BASE_SITE_URL;?>/plugin/zoom//images/2.png" title="" />
			</a>
		</div>

		<div class="zoom-desc">  
			<span class="left disable">&lt;</span>
		  <div class="small">
			<div>		              
<a href-lcl='<?php echo BASE_SITE_URL;?>/plugin/zoom/images/3.png' class='cloud-zoom-gallery' title='Blue' rel="useZoom: 'zoom1', smallImage: ' <?php echo BASE_SITE_URL;?>/plugin/zoom/images/2.png'"><img class="zoom-tiny-image" src="<?php echo BASE_SITE_URL;?>/plugin/zoom/images/1.png" /></a>
<a href-lcl='<?php echo BASE_SITE_URL;?>/plugin/zoom/images/3.png' class='cloud-zoom-gallery' title='Blue' rel="useZoom: 'zoom1', smallImage: ' <?php echo BASE_SITE_URL;?>/plugin/zoom/images/2.png'"><img class="zoom-tiny-image" src="<?php echo BASE_SITE_URL;?>/plugin/zoom/images/1.png" /></a>
<a href-lcl='<?php echo BASE_SITE_URL;?>/plugin/zoom/images/3.png' class='cloud-zoom-gallery' title='Blue' rel="useZoom: 'zoom1', smallImage: ' <?php echo BASE_SITE_URL;?>/plugin/zoom/images/2.png'"><img class="zoom-tiny-image" src="<?php echo BASE_SITE_URL;?>/plugin/zoom/images/1.png" /></a>
<a href-lcl='<?php echo BASE_SITE_URL;?>/plugin/zoom/images/3.png' class='cloud-zoom-gallery' title='Blue' rel="useZoom: 'zoom1', smallImage: ' <?php echo BASE_SITE_URL;?>/plugin/zoom/images/2.png'"><img class="zoom-tiny-image" src="<?php echo BASE_SITE_URL;?>/plugin/zoom/images/1.png" /></a>
<a href-lcl='<?php echo BASE_SITE_URL;?>/plugin/zoom/images/3.png' class='cloud-zoom-gallery' title='Blue' rel="useZoom: 'zoom1', smallImage: ' <?php echo BASE_SITE_URL;?>/plugin/zoom/images/2.png'"><img class="zoom-tiny-image" src="<?php echo BASE_SITE_URL;?>/plugin/zoom/images/1.png" /></a>
<a href-lcl='<?php echo BASE_SITE_URL;?>/plugin/zoom/images/3.png' class='cloud-zoom-gallery' title='Blue' rel="useZoom: 'zoom1', smallImage: ' <?php echo BASE_SITE_URL;?>/plugin/zoom/images/2.png'"><img class="zoom-tiny-image" src="<?php echo BASE_SITE_URL;?>/plugin/zoom/images/1.png" /></a>
<a href-lcl='<?php echo BASE_SITE_URL;?>/plugin/zoom/images/3.png' class='cloud-zoom-gallery' title='Blue' rel="useZoom: 'zoom1', smallImage: ' <?php echo BASE_SITE_URL;?>/plugin/zoom/images/2.png'"><img class="zoom-tiny-image" src="<?php echo BASE_SITE_URL;?>/plugin/zoom/images/1.png" /></a>			
		    </div>
		  </div>
			<span class="right">&gt;</span>			
		</div>
	</div>

	<!-- 左右滚动代码start -->
<script type="text/javascript">
$(function(){
	var smallImgLi = $('.small div a');
	var smallImgLiLength = smallImgLi.length;
	var smallImgLiWidth = smallImgLi.outerWidth(true);
	var smallImgUl = $('.small div');
	var leftBtn = $('span.left');
	var rightBtn = $('span.right');
	var now = 0;
	
	smallImgLi.bind("click",function(){
		$(this).addClass('current').siblings().removeClass('current');
	});

	if(smallImgLi.length>5){
	rightBtn.click(function(){
		leftBtn.removeClass('disable');
		if(now>=smallImgLiLength-6){
			$(this).addClass('disable');
			now = smallImgLiLength-6;

		}else{
			now++;
			smallImgUl.animate({'left':-now*smallImgLiWidth},100);
		}
	});

	leftBtn.click(function(){
		rightBtn.removeClass('disable');
		if(now==0){
			$(this).addClass('disable');
			now=0;
		}else{
			now--;
			smallImgUl.animate({'left':'+='+smallImgLiWidth},100);
		}
		
	});}
});
</script>
<!-- 左右滚动代码end -->