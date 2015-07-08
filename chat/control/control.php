<?php
/**
 * 前台control父类
 *
 */

<<<<<<< HEAD
defined('InShopNC') or exit('Access Invalid!');
=======
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

/********************************** 前台control父类 **********************************************/

class BaseControl {
	public function __construct(){
		Language::read('common');
	}
}
