<?php
/**
 * 线下抢购管理
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
class live_groupbuyModel extends Model {

    public function __construct(){
        parent::__construct('live_groupbuy');
    }
    
    /**
     * 线下抢购信息
     * @param array $condition
     * @param string $field
     * @return array
     */
    public function live_groupbuyInfo($condition, $field = '*') {
        return $this->table('live_groupbuy')->field($field)->where($condition)->find();
    }

    /**
     * 线下抢购列表
     * @param array $condition
     * @param string $field
     * @param number $page
     * @param string $order
	 * @param string $limit
     */
    public function getList($condition = array(), $field = '*', $page='15', $order = 'groupbuy_id desc') {
       return $this->table('live_groupbuy')->where($condition)->page($page)->order($order)->select();
    }

    
    /**
     * 添加线下抢购
     * @param array $data
     */	
	public function add($data){
		return $this->table('live_groupbuy')->insert($data);
	}

    /**
     * 编辑线下抢购
     * @param array $condition
     * @param array $data
     */
    public function edit($condition, $data) {
        return $this->table('live_groupbuy')->where($condition)->update($data);
    }
	

    /**
     * 删除线下分类
     * @param array $condition
     */
	public function del($condition){
		return $this->table('live_groupbuy')->where($condition)->delete();
	}


    /**
     * 待审核抢购统计
     */
	public function getLivegroupbuyCount(){
		return $this->table('live_groupbuy')->where(array('is_audit'=>1))->count();
	}
}
