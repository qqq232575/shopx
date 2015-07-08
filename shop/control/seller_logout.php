<?php
/**
 * 店铺卖家注销
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

class seller_logoutControl extends BaseSellerControl {

	public function __construct() {
		parent::__construct();
	}

    public function indexOp() {
        $this->logoutOp();
    }

    public function logoutOp() {
        $this->recordSellerLog('注销成功');
        // 清除店铺消息数量缓存
        setNcCookie('storemsgnewnum'.$_SESSION['seller_id'],0,-3600);
        session_destroy();
        redirect('index.php?act=seller_login');
    }

}
