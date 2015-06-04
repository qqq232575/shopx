<?php defined('IN_OS') or exit('Access Invalid!'); ?>

<?php if ($output['hidden_nctoolbar'] != 1) {?>
<div id="ncToolbar" class="nc-appbar">
  <div class="nc-appbar-tabs" id="appBarTabs">
    <?php if ($_SESSION['is_login']) {?>
    <div class="user" nctype="a-barUserInfo">
      <div class="avatar"><img src="<?php echo getMemberAvatar($_SESSION['avatar']);?>"/></div>
      <p>我</p>
    </div>
    <div class="user-info" nctype="barUserInfo" style="display:none;"><i class="arrow"></i>
      <div class="avatar"><img src="<?php echo getMemberAvatar($_SESSION['avatar']);?>"/>
        <div class="frame"></div>
      </div>
      <dl>
        <dt>Hi, <?php echo $_SESSION['member_name'];?></dt>
        <dd>当前等级：<strong nctype="barMemberGrade"><?php echo $output['member_info']['level_name'];?></strong></dd>
        <dd>当前经验值：<strong nctype="barMemberExp"><?php echo $output['member_info']['member_exppoints'];?></strong></dd>
      </dl>
    </div>
    <?php } else {?>
    <div class="user" nctype="a-barLoginBox">
      <div class="avatar"><img src="<?php echo getMemberAvatar($_SESSION['avatar']);?>"/></div>
      <p>未登录</p>
    </div>
    <div class="user-login-box" nctype="barLoginBox" style="display:none;"> <i class="arrow"></i> <a href="javascript:void(0);" class="close" nctype="close-barLoginBox" title="关闭">X</a>
      <form id="login_form" method="post" action="index.php?act=login&op=login" onsubmit="ajaxpost('login_form', '', '', 'onerror')">
        <?php Security::getToken();?>
        <input type="hidden" name="form_submit" value="ok" />
        <input name="nchash" type="hidden" value="<?php echo getNchash('login','index');?>" />
        <dl>
          <dt><strong>登录名</strong></dt>
          <dd>
            <input type="text" class="text" tabindex="1" autocomplete="off"  name="user_name" autofocus >
            <label></label>
          </dd>
        </dl>
        <dl>
          <dt><strong>登录密码</strong><a href="index.php?act=login&op=forget_password" target="_blank">忘记登录密码？</a></dt>
          <dd>
            <input tabindex="2" type="password" class="text" name="password" autocomplete="off">
            <label></label>
          </dd>
        </dl>
        <?php if(C('captcha_status_login') == '1') { ?>
        <dl>
          <dt><strong>验证码</strong><a href="javascript:void(0)" class="ml5" onclick="javascript:document.getElementById('codeimage').src='<?php echo SHOP_SITE_URL?>/index.php?act=seccode&op=makecode&nchash=<?php echo getNchash('login','index');?>&t=' + Math.random();">更换验证码</a></dt>
          <dd>
            <input tabindex="3" type="text" name="captcha" autocomplete="off" class="text w130" id="captcha2" maxlength="4" size="10" />
            <img src="" name="codeimage" border="0" id="codeimage" class="vt">
            <label></label>
          </dd>
        </dl>
        <?php } ?>
        <div class="bottom">
          <input type="submit" class="submit" value="确认">
          <input type="hidden" value="<?php echo $_GET['ref_url']?>" name="ref_url">
          <a href="index.php?act=login&op=register&ref_url=<?php echo urlencode($output['ref_url']);?>" target="_blank">注册新用户</a> </div>
      </form>
    </div>
    <?php }?>

    <ul class="tools">
      <li><a href="javascript:void(0);" id="chat_show_user" class="chat">聊天<i id="new_msg" class="new_msg" style="display:none;"></i></a></li>
      <?php if (!$output['hidden_rtoolbar_cart']) { ?>
      <li><a href="javascript:void(0);" id="rtoolbar_cart" class="cart">购物车<i id="rtoobar_cart_count" class="new_msg" style="display:none;"></i></a></li>
      <?php } ?>
      <?php if (!$output['hidden_rtoolbar_compare']) { ?>
      <li><a href="javascript:void(0);" id="compare" class="compare">对比</a></li>
      <?php } ?>
      <?php  require_once BASE_ROOT_PATH.'/plugin/gotop.php';?>
    </ul>

    <div class="content-box" id="content-compare">
      <div class="top">
        <h3>商品对比</h3>
        <a href="javascript:void(0);" class="close" title="隐藏"></a></div>
      <div id="comparelist"></div>
    </div>
    <div class="content-box" id="content-cart">
      <div class="top">
        <h3>我的购物车</h3>
        <a href="javascript:void(0);" class="close" title="隐藏"></a></div>
      <div id="rtoolbar_cartlist"></div>
    </div>
    <a id="activator" href="javascript:void(0);" class="nc-appbar-hide"></a> </div>
  <div class="nc-hidebar" id="ncHideBar">
    <div class="nc-hidebar-bg">
      <?php if ($_SESSION['is_login']) {?>
      <div class="user-avatar"><img src="<?php echo getMemberAvatar($_SESSION['avatar']);?>"/></div>
      <?php } else {?>
      <div class="user-avatar"><img src="<?php echo getMemberAvatar($_SESSION['avatar']);?>"/></div>
      <?php }?>
      <div class="frame"></div>
      <div class="show"></div>
    </div>
  </div>
</div>

<?php } ?>


<script type="text/javascript">
//动画显示边条内容区域
$(function() {
	$(function() {
		$('#activator').click(function() {
			$('#content-cart').animate({'right': '-250px'});
			$('#content-compare').animate({'right': '-150px'});
			$('#ncToolbar').animate({'right': '-60px'}, 300,
			function() {
				$('#ncHideBar').animate({'right': '59px'},	300);
			});
	        $('div[nctype^="bar"]').hide();
		});
		$('#ncHideBar').click(function() {
			$('#ncHideBar').animate({
				'right': '-79px'
			},
			300,
			function() {
				$('#content-cart').animate({'right': '-250px'});
				$('#content-compare').animate({'right': '-250px'});
				$('#ncToolbar').animate({'right': '0'},300);
			});
		});
	});
    $("#compare").click(function(){
    	if ($("#content-compare").css('right') == '-210px') {
 		   loadCompare(false);
 		   $('#content-cart').animate({'right': '-210px'});
  		   $("#content-compare").animate({right:'50px'});
    	} else {
    		$(".close").click();
    		$(".chat-list").css("display",'none');
        }
	});
    $("#rtoolbar_cart").click(function(){
        if ($("#content-cart").css('right') == '-210px') {
         	$('#content-compare').animate({'right': '-210px'});
    		$("#content-cart").animate({right:'50px'});
    		if (!$("#rtoolbar_cartlist").html()) {
    			$("#rtoolbar_cartlist").load('index.php?act=cart&op=ajax_load&type=html');
    		}
        } else {
        	$(".close").click();
        	$(".chat-list").css("display",'none');
        }
	});
	$(".close").click(function(){
		$(".content-box").animate({right:'-210px'});
      });

	$(".quick-menu dl").hover(function() {
		$(this).addClass("hover");
	},
	function() {
		$(this).removeClass("hover");
	});

    // 右侧bar用户信息
    $('div[nctype="a-barUserInfo"]').click(function(){
        $('div[nctype="barUserInfo"]').toggle();
    });
    // 右侧bar登录
    $('div[nctype="a-barLoginBox"]').click(function(){
        $('div[nctype="barLoginBox"]').toggle();
        document.getElementById('codeimage').src='<?php echo SHOP_SITE_URL?>/index.php?act=seccode&op=makecode&nchash=<?php echo getNchash('login','index');?>&t=' + Math.random();
    });
    $('a[nctype="close-barLoginBox"]').click(function(){
        $('div[nctype="barLoginBox"]').toggle();
    });
    <?php if ($output['cart_goods_num'] > 0) { ?>
    $('#rtoobar_cart_count').html(<?php echo $output['cart_goods_num'];?>).show();
    <?php } ?>
});
</script>

