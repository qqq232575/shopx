<?php
/**
 * cms模板模块模型
 *
 * 
 *
 *
<<<<<<< HEAD
 * by 33hao www.33hao.com 开发修正
 */
defined('InShopNC') or exit('Access Invalid!');
=======
 * by shopx www.yywxx.com 开发修正
 */
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
class cms_moduleModel extends Model{

    public function __construct(){
        parent::__construct('cms_module');
    }

	/**
	 * 读取列表 
	 * @param array $condition
	 *
	 */
	public function getList($condition,$page=null,$order='',$field='*'){
        $result = $this->field($field)->where($condition)->page($page)->order($order)->select();
        return $result;
	}

    /**
	 * 读取单条记录
	 * @param array $condition
	 *
	 */
    public function getOne($condition,$order=''){
        $result = $this->where($condition)->order($order)->find();
        return $result;
    }

	/*
	 *  判断是否存在 
	 *  @param array $condition
     *
	 */
	public function isExist($condition) {
        $result = $this->getOne($condition);
        if(empty($result)) {
            return FALSE;
        }
        else {
            return TRUE;
        }
	}

	/*
	 * 增加 
	 * @param array $param
	 * @return bool
	 */
    public function save($param){
        return $this->insert($param);	
    }
	
	/*
	 * 更新
	 * @param array $update
	 * @param array $condition
	 * @return bool
	 */
    public function modify($update, $condition){
        return $this->where($condition)->update($update);
    }

	/*
	 * 删除
	 * @param array $condition
	 * @return bool
	 */
    public function drop($condition){
        return $this->where($condition)->delete();
    }
	
}

