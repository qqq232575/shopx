<?php
/**
 * 队列
 *
 *
<<<<<<< HEAD
 * 计划任务触发 by 33hao.com
=======
 * 计划任务触发 by yywxx.com
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
 */


$_SERVER['argv'][1] = $_GET['act'];
@$_SERVER['argv'][2] = $_GET['op'];

if (empty($_SERVER['argv'][1])) exit('Access Invalid!');

define('APP_ID','crontab');
define('BASE_PATH',str_replace('\\','/',dirname(__FILE__)));
define('TRANS_MASTER',true);
if (!@include(dirname(dirname(__FILE__)).'/global.php')) exit('global.php isn\'t exists!');
<<<<<<< HEAD
if (!@include(BASE_CORE_PATH.'/33hao.php')) exit('33hao.php isn\'t exists!');
=======
if (!@include(BASE_CORE_PATH.'/shopx.php')) exit('shopx.php isn\'t exists!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

if (PHP_SAPI == 'cli') {
    $_GET['act'] = $_SERVER['argv'][1];
    $_GET['op'] = empty($_SERVER['argv'][2]) ? 'index' : $_SERVER['argv'][2];
}
if (!@include(BASE_PATH.'/control/control.php')) exit('control.php isn\'t exists!');

Base::run();
?>