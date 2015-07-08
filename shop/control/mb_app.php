<?php
/**
 * 手机端下载地址
 *
 *
 *
<<<<<<< HEAD
 **by 好商城V3 www.33hao.com 运营版*/


defined('InShopNC') or exit('Access Invalid!');
=======
 **by shopx www.yywxx.com 运营版*/


defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
class mb_appControl extends BaseHomeControl {
    public function __construct() {
        parent::__construct();
    }
	/**
	 * 下载地址
	 *
	 */
    public function indexOp() {
		$mobilebrowser_list ='iphone|ipad';
		if(preg_match("/$mobilebrowser_list/i", $_SERVER['HTTP_USER_AGENT'])) {
		    @header('Location: '.C('mobile_ios'));exit;
        } else {
            @header('Location: '.C('mobile_apk'));exit;
        }
    }
}
