<?php
/**
 * 卖家日志模型
 *
 * 
 *
 *
<<<<<<< HEAD
 * by 33hao 好商城V3  www.33hao.com 开发
 */
defined('InShopNC') or exit('Access Invalid!');
=======
 * by shopx shopx  www.yywxx.com 开发
 */
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
class seller_logModel extends Model{

    public function __construct(){
        parent::__construct('seller_log');
    }

	/**
	 * 读取列表 
	 * @param array $condition
	 *
	 */
	public function getSellerLogList($condition, $page='', $order='', $field='*') {
        $result = $this->field($field)->where($condition)->page($page)->order($order)->select();
        return $result;
	}

    /**
	 * 读取单条记录
	 * @param array $condition
	 *
	 */
    public function getSellerLogInfo($condition) {
        $result = $this->where($condition)->find();
        return $result;
    }

	/*
	 * 增加 
	 * @param array $param
	 * @return bool
	 */
    public function addSellerLog($param){
        return $this->insert($param);	
    }
	
	/*
	 * 删除
	 * @param array $condition
	 * @return bool
	 */
    public function delSellerLog($condition){
        return $this->where($condition)->delete();
    }
	
}
