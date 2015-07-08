<?php
/**
 * 支付宝通知地址
 *
 * 
<<<<<<< HEAD
 * by 33hao 好商城V3  www.33hao.com 开发
=======
 * by shopx shopx  www.yywxx.com 开发
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
 */
$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>