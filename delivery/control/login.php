<?php
/**
 * 物流自提服务站首页
 *
<<<<<<< HEAD
 **by 好商城V3 www.33hao.com 运营版*/

defined('InShopNC') or exit('Access Invalid!');
=======
 **by shopx www.yywxx.com 运营版*/

defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

class loginControl extends BaseAccountCenterControl{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 登录
     */
    public function indexOp() {
        if ($_SESSION['delivery_login'] == 1) {
            @header('location: index.php?act=d_center');die;
        }
        if (chksubmit()) {
            $where = array();
            $where['dlyp_name'] = $_POST['dname'];
            $where['dlyp_passwd'] = md5($_POST['dpasswd']);
            $dp_info = Model('delivery_point')->getDeliveryPointInfo($where);
            if (!empty($dp_info)) {
                $_SESSION['delivery_login'] = 1;
                $_SESSION['dlyp_id'] = $dp_info['dlyp_id'];
                $_SESSION['dlyp_name'] = $dp_info['dlyp_name'];
                showDialog('登录成功', 'index.php?act=d_center', 'succ');
            } else {
                showDialog('登录失败');
            }
        }
        Tpl::showpage('login');
    }
    /**
     * 登出
     */
    public function logoutOp() {
        unset($_SESSION['delivery_login']);
        unset($_SESSION['dlyp_id']);
        unset($_SESSION['dlyp_name']);
        showDialog('退出成功', 'reload', 'succ');
    }
}

