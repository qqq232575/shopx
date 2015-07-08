<?php
/**
 * 图片空间操作
<<<<<<< HEAD
 **by 好商城V3 www.33hao.com 运营版*/


defined('InShopNC') or exit('Access Invalid!');
=======
 **by shopx www.yywxx.com 运营版*/


defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
class sns_settingControl extends BaseSNSControl {
	public function __construct() {
		parent::__construct();
		/**
		 * 读取语言包
		 */
		Language::read('sns_setting');
	}
	public function change_skinOp(){
		Tpl::showpage('sns_changeskin', 'null_layout');
	}
	public function skin_saveOp(){
		$insert = array();
		$insert['member_id']	= $_SESSION['member_id'];
		$insert['setting_skin']	= $_GET['skin'];

		Model()->table('sns_setting')->insert($insert,true);
	}
}
?>
