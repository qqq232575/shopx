<?php
/**
 * 店铺类别模型
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

class store_classModel extends Model {

    public function __construct(){
        parent::__construct('store_class');
    }

    /**
     * 取店铺类别列表
     * @param unknown $condition
     * @param string $pagesize
     * @param string $order
     */
    public function getStoreClassList($condition = array(), $pagesize = '', $limit = '', $order = 'sc_sort asc,sc_id asc') {
        return $this->where($condition)->order($order)->page($pagesize)->limit($limit)->select();
    }

    /**
     * 取得单条信息
     * @param unknown $condition
     */
    public function getStoreClassInfo($condition = array()) {
        return $this->where($condition)->find();
    }

    /**
     * 删除类别
     * @param unknown $condition
     */
    public function delStoreClass($condition = array()) {
        return $this->where($condition)->delete();
    }

    /**
     * 增加店铺分类
     * @param unknown $data
     * @return boolean
     */
    public function addStoreClass($data) {
        return $this->insert($data);
    }

    /**
     * 更新分类
     * @param unknown $data
     * @param unknown $condition
     */
    public function editStoreClass($data = array(),$condition = array()) {
        return $this->where($condition)->update($data);
    }
}