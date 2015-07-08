<?php
<<<<<<< HEAD
/**
 * 微信支付通知地址
 *
 * 
 * by 33hao.com 好商城V3 运营版
=======
/* *
 * 功能：微信异步通知页面
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
 */


$_GET['act'] = 'payment';
$_GET['op']	= 'notify_weixin';
$_GET['payment_code']	= 'wxpay';
require_once(dirname(__FILE__).'/../../../index.php');
?>
