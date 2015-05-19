<?php
/**
 * 支付宝通知地址
 *
 * 
 * by shopx team   
 */
$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>