<?php
/**
 * 我的反馈
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

class member_feedbackControl extends mobileMemberControl {

	public function __construct() {
		parent::__construct();
	}

    /**
     * 添加反馈
     */
    public function feedback_addOp() {
        $model_mb_feedback = Model('mb_feedback');

        $param = array();
        $param['content'] = $_POST['feedback'];
        $param['type'] = $this->member_info['client_type'];
        $param['ftime'] = TIMESTAMP;
        $param['member_id'] = $this->member_info['member_id'];
        $param['member_name'] = $this->member_info['member_name'];

        $result = $model_mb_feedback->addMbFeedback($param);

        if($result) {
            output_data('1');
        } else {
            output_error('保存失败');
        }
    }
}
