<?php
/**
 * 前台control父类
 *
 */

defined('IN_OS') or exit('Access Invalid!');

/********************************** 前台control父类 **********************************************/

class BaseControl {
	public function __construct(){
		Language::read('common');
	}
}
