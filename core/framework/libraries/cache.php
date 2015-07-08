<?php
/**
 * 缓存操作
 *
<<<<<<< HEAD
 *by 33hao www.33hao.com 开发修正
 */
defined('InShopNC') or exit('Access Invalid!');
=======
 *by shopx www.yywxx.com 开发修正
 */
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

class Cache {

	protected $params;
	protected $enable;
	protected $handler;

	/**
	 * 实例化缓存驱动
	 *
	 * @param unknown_type $type
	 * @param unknown_type $args
	 * @return unknown
	 */
	public function connect($type,$args = array()){
		if (empty($type)) $type = C('cache_open') ? 'redis' : 'file';
		$type = strtolower($type);
		$class = 'Cache'.ucwords($type);
		if (!class_exists($class)){
			import('cache.cache#'.$type);
		}
		return new $class($args);
	}

	/**
	 * 取得实例
	 *
	 * @return object
	 */
	public static function getInstance(){
		$args = func_get_args();
		return get_obj_instance(__CLASS__,'connect',$args);
	}
}
