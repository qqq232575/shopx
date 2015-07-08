<?php
/**
 * 店铺续签
 *
<<<<<<< HEAD
 * by 33hao.com 好商城V3 运营版
 */
defined('InShopNC') or exit('Access Invalid!');
=======
 * by yywxx.com shopx 运营版
 */
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

class store_reopenModel extends Model {
    public function __construct() {
        parent::__construct('store_reopen');
    }

    /**
     * 取得列表
     * @param unknown $condition
     * @param string $pagesize
     * @param string $order
     */
    public function getStoreReopenList($condition = array(), $pagesize = '', $order = 're_id desc') {
        return $this->where($condition)->order($order)->page($pagesize)->select();
    }

    /**
     * 增加新记录
     * @param unknown $data
     * @return
     */
    public function addStoreReopen($data) {
        return $this->insert($data);
    }

    /**
     * 取单条信息
     * @param unknown $condition
     */
    public function getStoreReopenInfo($condition) {
        return $this->where($condition)->find();
    }

    /**
     * 更新记录
     * @param unknown $condition
     * @param unknown $data
     */
    public function editStoreReopen($data,$condition) {
        return $this->where($condition)->update($data);
    }

    /**
     * 取得数量
     * @param unknown $condition
     */
    public function getStoreReopenCount($condition) {
        return $this->where($condition)->count();
    }

    /**
     * 删除记录
     * @param unknown $condition
     */
    public function delStoreReopen($condition) {
        return $this->where($condition)->delete();
    }
}