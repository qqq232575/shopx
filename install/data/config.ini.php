<?php
<<<<<<< HEAD
// defined('InShopNC') or exit('Access Invalid!');
=======
// defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

$config = array();
$config['shop_site_url'] 		= '===url===/shop';
$config['cms_site_url'] 		= '===url===/cms';
$config['microshop_site_url'] 	= '===url===/microshop';
$config['circle_site_url'] 		= '===url===/circle';
$config['admin_site_url'] 		= '===url===/admin';
$config['mobile_site_url'] 		= '===url===/mobile';
$config['wap_site_url'] 		= '===url===/wap';
$config['chat_site_url'] 		= '===url===/chat';
$config['node_site_url'] 		= 'http://===node_ip===:8090';
$config['upload_site_url']		= '===url===/data/upload';
$config['resource_site_url']	= '===url===/data/resource';
$config['version'] 		= '201502020315';
$config['setup_date'] 	= '===setup_date===';
$config['gip'] 			= 0;
$config['dbdriver'] 	= '===db_driver===';
$config['tablepre']		= '===db_prefix===';
$config['db']['1']['dbhost']       = '===db_host===';
$config['db']['1']['dbport']       = '===db_port===';
$config['db']['1']['dbuser']       = '===db_user===';
$config['db']['1']['dbpwd']        = '===db_pwd===';
$config['db']['1']['dbname']       = '===db_name===';
$config['db']['1']['dbcharset']    = '===db_charset===';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '===cookie_pre===';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '127.0.0.1';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = '33hao';
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
$config['delivery_site_url']    = '===url===/delivery';
return $config;