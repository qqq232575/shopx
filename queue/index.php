<?php
/**
 * 队列
 *
 * 
<<<<<<< HEAD
 * by 33hao www.33hao.com 二次开发修正版本
=======
 * by shopx www.yywxx.com 二次开发修正版本
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
 */


define('APP_ID','queue');
define('BASE_PATH',str_replace('\\','/',dirname(__FILE__)));

if (!@include(dirname(dirname(__FILE__)).'/global.php')) exit('global.php isn\'t exists!');
<<<<<<< HEAD
if (!@include(BASE_CORE_PATH.'/33hao.php')) exit('33hao.php isn\'t exists!');
=======
if (!@include(BASE_CORE_PATH.'/shopx.php')) exit('shopx.php isn\'t exists!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

if (empty($_SERVER['argv'][1]) || empty($_SERVER['argv'][2])) exit('parameter error');

$_GET['act'] = $_SERVER['argv'][1];
$_GET['op'] = $_SERVER['argv'][2];
if (!@include(BASE_PATH.'/control/control.php')) exit('control.php isn\'t exists!');

Base::run();
?>