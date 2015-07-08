<?php
/**
 * 任务计划执行入口
 *
 * 
<<<<<<< HEAD
 * by 33hao.com 好商城V3 运营版
 */


define('InShopNC',true);
=======
 * by yywxx.com shopx 运营版
 */


define('IN_OS',true);
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

// $_SERVER['argv'][1] = 'xs';
// $_SERVER['argv'][2] = 'create';

$_SERVER['argv'][1] = 'order';
$_SERVER['argv'][2] = 'create_bill';

if (empty($_SERVER['argv'][1]) || empty($_SERVER['argv'][2])) exit('parameter error');

require(dirname(__FILE__).'/../../global.php');
<<<<<<< HEAD
if (!@include(BASE_CORE_PATH.'/33hao.php')) exit('33hao.php isn\'t exists!');
=======
if (!@include(BASE_CORE_PATH.'/shopx.php')) exit('shopx.php isn\'t exists!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

Base::init();

$file_name = strtolower($_SERVER['argv'][1]);

$method = $_SERVER['argv'][2].'Op';

if (!@include(dirname(__FILE__).'/include/'.$file_name.'.php')) exit($file_name.'.php isn\'t exists!');

$class_name = $file_name.'Control';
$cron = new $class_name();

if (method_exists($cron,$method)){
    $cron->$method();
}else{
    exit('method '.$method.' isn\'t exists');
}