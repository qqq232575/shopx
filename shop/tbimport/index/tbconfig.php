<?php
//引用全局文件 v3- b11 直接调用
if (!@include('../../../global.php')) exit('global.php isn\'t exists!');
if (!@include(BASE_DATA_PATH.'/config/config.ini.php')) exit('config.ini.php isn\'t exists!');
if (file_exists(BASE_PATH.'/config/config.ini.php')){
	include(BASE_PATH.'/config/config.ini.php');
}
global $config;
$tbconfig =array();
<<<<<<< HEAD
$tbconfig['web_root'] = '../../../data/upload/shop/store/goods/';//图片路经
$tbconfig['datahost']     = $config['db']['1']['dbhost'].':'.$config['db']['1']['dbport'];//数据库服务器地址和端口
$tbconfig['datausername'] = $config['db']['1']['dbuser'];//数据库用户名
$tbconfig['datauserpass'] = $config['db']['1']['dbpwd'];//数据库用户密码
$tbconfig['databasename'] = $config['db']['1']['dbname'];//使用的数据库名
$tbconfig['datatablepre'] = $config['tablepre']; //数据表前缀
=======
$tbconfig['web_root'] = '../../../data/upload/shop/store/goods/';//上传图片的存放位置。shopnc默认存放在/data/upload/shop/store/goods/ 目录下，如果你未更改，则此处无需修改。默认存放位置在 /global.php文件中定义，由define('DIR_UPLOAD','data/upload'); define('ATTACH_GOODS','shop/store/goods');共同决定。
	//如果你修改了shopnc的默认存放位置，此处需要相应作出修改。
$tbconfig['datahost']     = 'localhost:3306';//数据库服务器地址和端口
$tbconfig['datausername'] = 'root';//数据库用户名
$tbconfig['datauserpass'] = 'root';//数据库用户密码
$tbconfig['databasename'] = 'shopx';//使用的数据库名
$tbconfig['datatablepre'] = 'shopx_'; //数据表前缀
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
