<?php
/**
 *
 *
<<<<<<< HEAD
 * by 33hao 好商城V3  www.33hao.com 开发
=======
 * by shopx shopx  www.yywxx.com 开发
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
 */
define('APP_ID','delivery');
define('BASE_PATH',str_replace('\\','/',dirname(__FILE__)));

if (!@include(dirname(dirname(__FILE__)).'/global.php')) exit('global.php isn\'t exists!');
<<<<<<< HEAD
if (!@include(BASE_CORE_PATH.'/33hao.php')) exit('33hao.php isn\'t exists!');
=======
if (!@include(BASE_CORE_PATH.'/shopx.php')) exit('shopx.php isn\'t exists!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

define('APP_SITE_URL',DELIVERY_SITE_URL);
define('TPL_NAME',TPL_SHOP_NAME);
define('DELIVERY_TEMPLATES_URL', DELIVERY_SITE_URL.'/templates/'.TPL_NAME);
define('BASE_DELIVERY_TEMPLATES_URL', dirname(__FILE__).'/templates/'.TPL_NAME);
define('DELIVERY_RESOURCE_SITE_URL',DELIVERY_SITE_URL.'/resource');
if (!@include(BASE_PATH.'/control/control.php')) exit('control.php isn\'t exists!');

Base::run();
?>
