<?php
/**
 * 注销
 *
 *
 *
 *
<<<<<<< HEAD
 * by 33hao.com 好商城V3 运营版
=======
 * by yywxx.com shopx 运营版
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
 */

//use Shopnc\Tpl;

<<<<<<< HEAD
defined('InShopNC') or exit('Access Invalid!');
=======
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

class logoutControl extends mobileMemberControl {

	public function __construct(){
		parent::__construct();
	}

    /**
     * 注销
     */
	public function indexOp(){
        if(empty($_POST['username']) || !in_array($_POST['client'], $this->client_type_array)) {
            output_error('参数错误');
        }

        $model_mb_user_token = Model('mb_user_token');

        if($this->member_info['member_name'] == $_POST['username']) {
            $condition = array();
            $condition['member_id'] = $this->member_info['member_id'];
            $condition['client_type'] = $_POST['client'];
            $model_mb_user_token->delMbUserToken($condition);
            output_data('1');
        } else {
            output_error('参数错误');
        }
	}

}
