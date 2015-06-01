<?php
/**
 * 物流自提服务站首页
 *
 **by shopx www.yywxx.com 运营版*/

defined('IN_OS') or exit('Access Invalid!');

class indexControl extends BaseDeliveryControl{
    public function __construct(){
        parent::__construct();
        @header('location: index.php?act=login');die;
    }
}

