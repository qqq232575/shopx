<?php
<<<<<<< HEAD
// defined('InShopNC') or exit('Access Invalid!');

$config = array();
$config['shop_site_url'] 		= 'http://v3.xupushop.com/shop';
$config['base_site_url']        = 'http://v3.xupushop.com'; //把localhost修改为你的域名
$config['cms_site_url'] 		= 'http://v3.xupushop.com/cms';
$config['microshop_site_url'] 	= 'http://v3.xupushop.com/microshop';
$config['circle_site_url'] 		= 'http://v3.xupushop.com/circle';
$config['admin_site_url'] 		= 'http://v3.xupushop.com/admin';
$config['mobile_site_url'] 		= 'http://v3.xupushop.com/mobile';
$config['wap_site_url'] 		= 'http://v3.xupushop.com/wap';
$config['chat_site_url'] 		= 'http://v3.xupushop.com/chat';
$config['node_site_url'] 		= 'http://10.1.1.11:8090';
$config['upload_site_url']		= 'http://v3.xupushop.com/data/upload';
$config['resource_site_url']	= 'http://v3.xupushop.com/data/resource';
$config['version'] 		= '201502020315';
$config['setup_date'] 	= '2015-07-06 09:37:02';
=======
// defined('IN_OS') or exit('Access Invalid!');

$config = array();
$config['base_site_url'] 		= 'http://192.168.1.168';
$config['shop_site_url'] 		= 'http://192.168.1.168/shop';
$config['cms_site_url'] 		= 'http://192.168.1.168/cms';
$config['microshop_site_url'] 	= 'http://192.168.1.168/microshop';
$config['circle_site_url'] 		= 'http://192.168.1.168/circle';
$config['admin_site_url'] 		= 'http://192.168.1.168/admin';
$config['mobile_site_url'] 		= 'http://192.168.1.168/mobile';
$config['wap_site_url'] 		= 'http://192.168.1.168/wap';
$config['chat_site_url'] 		= 'http://192.168.1.168/chat';
$config['node_site_url'] 		= 'http://192.168.1.168:8090';
$config['upload_site_url']		= 'http://192.168.1.168/data/upload';
$config['resource_site_url']	= 'http://192.168.1.168/data/resource';
$config['version'] 		= '201502020315';
$config['setup_date'] 	= '2015-06-28 01:32:40';
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= 'fdbc58';
$config['db']['1']['dbhost']       = 'localhost';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'root';
<<<<<<< HEAD
$config['db']['1']['dbpwd']        = 'root';
$config['db']['1']['dbname']       = 'v3_sdgsdgdg';
=======
$config['db']['1']['dbpwd']        = '';
$config['db']['1']['dbname']       = 'shopx';
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
<<<<<<< HEAD
$config['cookie_pre'] 		= 'F43C_';
=======
$config['cookie_pre'] 		= '5BCE_';
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '127.0.0.1';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
<<<<<<< HEAD
//$config['fullindexer']['appname']   = '33hao';
=======
//$config['fullindexer']['appname']   = 'shopx';
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
$config['debug'] 			= false;
$config['default_store_id'] = '1';
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
$config['cache_open'] = false;
<<<<<<< HEAD
$config['delivery_site_url']    = 'http://v3.xupushop.com/delivery';
=======
$config['delivery_site_url']    = 'http://192.168.1.168/delivery';
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
return $config;