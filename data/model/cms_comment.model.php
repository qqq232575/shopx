<?php
/**
 * CMS评论模型
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
class cms_commentModel extends Model{

    public function __construct(){
        parent::__construct('cms_comment');
    }

	/**
	 * 读取列表 
	 * @param array $condition
	 *
	 */
	public function getList($condition,$page='',$order='',$field='*'){
        $result = $this->table('cms_comment')->field($field)->where($condition)->page($page)->order($order)->select();
        return $result;
	}

	/**
	 * 读取用户信息
	 *
	 */
	public function getListWithUserInfo($condition, $page='', $order='', $field='*'){
        $on = 'cms_comment.comment_member_id = member.member_id';
        $result = $this->table('cms_comment,member')->field($filed)->join('left')->on($on)->where($condition)->page($page)->order($order)->select();
        return $result;
	}

    /**
	 * 读取单条记录
	 * @param array $condition
	 *
	 */
    public function getOne($condition){
        $result = $this->where($condition)->find();
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
	 * 增加 
	 * @param array $param
	 * @return bool
	 */
    public function saveAll($param){
        return $this->insertAll($param);	
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
