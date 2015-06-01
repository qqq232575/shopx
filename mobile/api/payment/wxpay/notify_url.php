<?php
/* *
 * 功能：微信异步通知页面
 */


$_GET['act'] = 'payment';
$_GET['op']	= 'notify_weixin';
$_GET['payment_code']	= 'wxpay';
require_once(dirname(__FILE__).'/../../../index.php');
?>
