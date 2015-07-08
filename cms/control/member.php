<?php
/**
 * APP会员
 *
 *
<<<<<<< HEAD
 **by 好商城V3 www.33hao.com 运营版*/

defined('InShopNC') or exit('Access Invalid!');
=======
 **by shopx www.yywxx.com 运营版*/

defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

class memberControl{

	public function __construct(){
		require_once(BASE_PATH.'/framework/function/client.php');
	}

	public function infoOp(){
		if (!empty($_GET['uid'])){
			$member_info = nc_member_info($_GET['uid'],'uid');
		}elseif(!empty($_GET['user_name'])){
			$member_info = nc_member_info($_GET['user_name'],'user_name');
		}
		return $member_info;
	}
}
