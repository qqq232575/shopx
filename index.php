<?php
/**
 * 入口
 *
 *
 *
<<<<<<< HEAD
 * by 33hao 好商城V3  www.33hao.com 开发
=======
 * by shopx shopx  www.yywxx.com 开发
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
 */
$site_url = strtolower('http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/index.php')).'/shop/index.php');
//@header('Location: '.$site_url);
include('shop/index.php');

