<?php
/**
 * 支付宝返回地址
 *
 * 
 * by shopx team   
 */
$_GET['act']	= 'payment';
$_GET['op']		= 'return';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>