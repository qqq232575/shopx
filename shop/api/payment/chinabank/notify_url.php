<?php
/**
 * 网银在线自动对账文件
 *
 * 
<<<<<<< HEAD
 * by 33hao 好商城V3  www.33hao.com 开发
=======
 * by shopx shopx  www.yywxx.com 开发
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
 */
error_reporting(7);
$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'chinabank';

//赋值，方便后面合并使用支付宝验证方法
$_POST['out_trade_no'] = $_POST['v_oid'];
$_POST['extra_common_param'] = $_POST['remark1'];
$_POST['trade_no'] = $_POST['v_idx'];

require_once(dirname(__FILE__).'/../../../index.php');
?>