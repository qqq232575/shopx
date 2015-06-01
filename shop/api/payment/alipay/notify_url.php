<?php
/**
 * 支付宝通知地址
 *
 * 
 * by shopx shopx  www.yywxx.com 开发
 */
$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>