<?php
/**
 * 默认展示页面
 *
 *
 *
<<<<<<< HEAD
 *by 33hao www.33hao.com 开发修正
 */
defined('InShopNC') or exit('Access Invalid!');
=======
 *by shopx www.yywxx.com 开发修正
 */
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
class albumControl extends MircroShopControl{

	public function __construct() {
		parent::__construct();
        Tpl::output('index_sign','album');
    }

	//首页
	public function indexOp(){
		Tpl::showpage('album');
	}
}
