<?php defined('IN_OS') or exit('Access Invalid!'); ?>
<style>
/*控制左侧导航菜单*/
.nav_Sidebar { width: 39px; height: 396px; position: fixed; bottom: 100px; left: 50%; margin-left: -660px; display: none; }
.nav_Sidebar a { width: 39px; height: 35px; border:1px solid gray; display: block; text-align:center; line-height:35px; z-index:10000; }


</style>
<?php 
        $condition['web_page'] = 'index';
        $condition['web_show'] = '1';
		$arr=Model()->table('web')->field('web_name,web_html')->where($condition)->select();
		foreach($arr as $key => $value){
		    $arr_floor[$key]['web_name']=$value['web_name'];

		    preg_match_all("|<span>(.*?)<\/span>|", $value['web_html'],$floor_level);
		    preg_match_all("|<h2 title=\"(.*?)\">.*?<\/h2>|", $value['web_html'],$floor_name);

		    $arr_floor[$key]['floor_level']=$floor_level[1][0];
		    $arr_floor[$key]['floor_name']=$floor_name[1][0];		    
		}
		$output['arr_floor']=$arr_floor;
?>
<div class="nav_Sidebar">
<?php foreach($output['arr_floor'] as $k => $v){?>
<a class="nav_Sidebar_<?php echo $k;?>" style="background-position: 0 <?php echo $k*-34;?>px" href="javascript:;" ><?php echo $v['floor_level']; ?></a>
<?php } ?>
</div>
<script>
/*监听滚动条和左侧菜单点击事件 start */
$(function(){

var _arr = [];
window.onscroll = function(){
    if(800 < $(document).scrollTop()){
        $('.nav_Sidebar').fadeIn('slow');
    }else{
        $('.nav_Sidebar').fadeOut('slow');
    }
    $('.home-standard-layout').each(function(index){
        var that = $(this);
        that.index = index;
        if($(document).scrollTop() + $(window).height()/2 > that.offset().top){
            _arr.push(index);
        }
    }); 
    if(_arr.length){
        $('.nav_Sidebar a').eq(_arr[_arr.length-1]).css({'background-color':'red'}).addClass('current').siblings().css({'background-color':'#fff'}).removeClass('current');
        _arr = [];
    }
}
$('.nav_Sidebar a').each(function(index){
    $(this).click(function(){
        $('html,body').animate({scrollTop: $('.home-standard-layout').eq(index).offset().top - 20 + 'px'}, 500);
    }).mouseover(function(){
        if($(this).hasClass('current')){
            return;
        }else{
            $(this).css({'background-color':'#fff'});
        }
    }).mouseout(function(){
        if($(this).hasClass('current')){
            return;
        }else{
            $(this).css({'background-color':'#fff'});
        }
    });
});

window.onload = window.onresize = function(){
    if($(window).width() < 1300 || 800 > $(document).scrollTop()){
        $('.nav_Sidebar').fadeOut('slow');
    }else{
        $('.nav_Sidebar').fadeIn('slow');
    }
    
}

});
</script>