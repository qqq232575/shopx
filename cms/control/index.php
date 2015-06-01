<?php
/**
 * cms首页
 *
 *
 **by shopx www.yywxx.com 运营版*/

defined('IN_OS') or exit('Access Invalid!');
class indexControl extends CMSHomeControl{

	public function __construct() {
		parent::__construct();
        Tpl::output('index_sign','index');
    }
	public function indexOp(){
        Tpl::showpage('index');
	}
}
