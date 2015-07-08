<?php
/**
 * 我的代金券
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

class member_voucherControl extends mobileMemberControl {

	public function __construct() {
		parent::__construct();
	}

    /**
     * 地址列表
     */
    public function voucher_listOp() {
		$model_voucher = Model('voucher');
        $voucher_list = $model_voucher->getMemberVoucherList($this->member_info['member_id'], $_POST['voucher_state'], $this->page);
        $page_count = $model_voucher->gettotalpage();

        output_data(array('voucher_list' => $voucher_list), mobile_page($page_count));
    }
}
