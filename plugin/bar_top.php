<?php defined('IN_OS') or exit('Access Invalid!'); ?>

<div class="public-top-layout w">
  <div class="topbar wrapper">
    <div class="user-entry">
      <?php if($_SESSION['is_login'] == '1'){?>
      <?php echo $lang['nc_hello'];?> <span>
      <a href="<?php echo urlShop('member','home');?>"><?php echo $_SESSION['member_name'];?></a>
      <?php if ($output['member_info']['level_name']){ ?>
      <div class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go('<?php echo urlShop('pointgrade','index');?>');"><?php echo $output['member_info']['level_name'];?></div>
      <?php } ?>
      </span> <?php echo $lang['nc_comma'],$lang['welcome_to_site'];?> <a href="<?php echo BASE_SITE_URL;?>"  title="<?php echo $lang['homepage'];?>" alt="<?php echo $lang['homepage'];?>"><span><?php echo $output['setting_config']['site_name']; ?></span></a> <span>[<a href="<?php echo urlShop('login','logout');?>"><?php echo $lang['nc_logout'];?></a>] </span>
      <?php }else{?>
      <?php echo $lang['nc_hello'].$lang['nc_comma'].$lang['welcome_to_site'];?> <a href="<?php echo BASE_SITE_URL;?>" title="<?php echo $lang['homepage'];?>" alt="<?php echo $lang['homepage'];?>"><?php echo $output['setting_config']['site_name']; ?></a> <span>[<a href="<?php echo urlShop('login');?>"><?php echo $lang['nc_login'];?></a>]</span> <span>[<a href="<?php echo urlShop('login','register');?>"><?php echo $lang['nc_register'];?></a>]</span>
      <?php }?><span style="margin-left:10px;"><a href="index.php?act=invite" style="color:red;">邀请返利</a></span>
    </div>
    <div class="quick-menu">
      <dl>
        <dt><a href="<?php echo BASE_SITE_URL;?>/wap">手机触屏版</a></dt>
      </dl>
	  <dl>
        <dt><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=show_joinin&op=index" title="免费开店">免费开店</a><i></i></dt>
        <dd>
          <ul>
		    <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=show_joinin&op=index" title="招商入驻">招商入驻</a></li>
            <li><a href="<?php echo urlShop('seller_login','show_login');?>" target="_blank" title="登录商家管理中心">商家登录</a></li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order">我的订单</a><i></i></dt>
        <dd>
          <ul>
            <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_new">待付款订单</a></li>
            <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_send">待确认收货</a></li>
            <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_noeval">待评价交易</a></li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fglist"><?php echo $lang['nc_favorites'];?></a><i></i></dt>
        <dd>
          <ul>
            <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fglist">商品收藏</a></li>
            <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fslist">店铺收藏</a></li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt>客户服务<i></i></dt>
        <dd>
          <ul>
            <li><a href="<?php echo urlShop('article', 'article', array('ac_id' => 2));?>">帮助中心</a></li>
            <li><a href="<?php echo urlShop('article', 'article', array('ac_id' => 5));?>">售后服务</a></li>
            <li><a href="<?php echo urlShop('article', 'article', array('ac_id' => 6));?>">客服中心</a></li>
          </ul>
        </dd>
      </dl>
      <?php
      if(!empty($output['nav_list']) && is_array($output['nav_list'])){
	      foreach($output['nav_list'] as $nav){
	      if($nav['nav_location']<1){
	      	$output['nav_list_top'][] = $nav;
	      }
	      }
      }
      if(!empty($output['nav_list_top']) && is_array($output['nav_list_top'])){
      	?>
      <dl>
        <dt>站点导航<i></i></dt>
        <dd>
          <ul>
            <?php foreach($output['nav_list_top'] as $nav){?>
            <li><a
        <?php
        if($nav['nav_new_open']) {
            echo ' target="_blank"';
        }
        echo ' href="';
        switch($nav['nav_type']) {
        	case '0':echo $nav['nav_url'];break;
        	case '1':echo urlShop('search', 'index', array('cate_id'=>$nav['item_id']));break;
        	case '2':echo urlShop('article', 'article', array('ac_id'=>$nav['item_id']));break;
        	case '3':echo urlShop('activity', 'index', array('activity_id'=>$nav['item_id']));break;
        }
        echo '"';
        ?>><?php echo $nav['nav_title'];?></a></li>
            <?php }?>
          </ul>
        </dd>
      </dl>
      <?php }?>
	  <dl class="weixin">
        <dt>关注我们<i></i></dt>
        <dd>
          <h4>扫描二维码<br/>
            关注商城微信号</h4>
          <img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$GLOBALS['setting_config']['site_logowx']; ?>" > </dd>
        </dl>
    </div>
  </div>
</div>
