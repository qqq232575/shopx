<?php
/**
 * 邀请返利页面
 * by shopx ww w.33 ha o.c om 
 */
defined('IN_OS') or exit('Access Invalid!');
class inviteControl extends BaseHomeControl{
	public function indexOp(){
		Tpl::showpage('invite');
	}
}
