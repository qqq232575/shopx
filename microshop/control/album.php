<?php
/**
 * 默认展示页面
 *
 *
 *
 *by shopx www.yywxx.com 开发修正
 */
defined('IN_OS') or exit('Access Invalid!');
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
