<style>
.change_search_bar{
    position:fixed;
    top:0px;
    color:#fff;
    z-index:1000;
    background:rgba(0, 0, 0, 0.8) none repeat scroll 0 0 !important;/*实现FF背景透明，文字不透明*/
    filter:Alpha(opacity=80); background:#000;/*实现IE背景透明*/}
    height:50px;
}
</style>
<script type="text/javascript">
$(function(){
		window.onscroll = function(){
        if(300 < $(document).scrollTop()){
            $('.header-wrap').addClass("change_search_bar").fadeIn('slow');
            $('.public-head-layout ').css({'height':'50px'})
            $('.keyword,.head-app,.head-user-menu,.head-search-bar .tab').css({'display':'none'});
            $('.public-head-layout .site-logo').css({'margin-right':'150px','height':'50px'});
            $('.head-search-bar').css({'padding-top':'13px'});
        }else{
            $('.header-wrap').removeClass("change_search_bar");
            $('.public-head-layout').css({'height':'100px'})
            $('.keyword,.head-app,.head-user-menu,.head-search-bar .tab').css({'display':'block'});
            $('.public-head-layout .site-logo').css({'margin-right':'10px'});
            $('.head-search-bar').css({'padding-top':'28px'});
        }
    }
});
</script>
