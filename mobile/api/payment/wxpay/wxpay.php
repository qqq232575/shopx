<?php
/**
 * 微信支付接口类
 *
 *
 */
class wxpay{

    public function __construct() {
        require_once 'WxPayPubHelper/WxPay.pub.config.php';
        require_once 'WxPayPubHelper/WxPayPubHelper.php';
    }

    /**
     * 获取notify信息
     */
    public function getNotifyInfo($payment_config) {
        $verify = $this->_verify('notify', $payment_config);

        if($verify) {
            return array(
                //商户订单号
                'out_trade_no' => $_GET['out_trade_no'],
                //支付宝交易号
                'trade_no' => $_GET['transaction_id'],
            );
        }

        return false;
    }

    /**
     * 验证返回信息
     */
    private function _verify($payment_config) {
        if(empty($payment_config)) {
            return false;
        }

        //将系统的控制参数置空，防止因为加密验证出错
        unset($_GET['act']);
        unset($_GET['op']);
        unset($_GET['payment_code']);	

        ksort($_GET);
        $hash_temp = '';
        foreach ($_GET as $key => $value) {
            if($key != 'sign') {
                $hash_temp .= $key . '=' . $value . '&';
            }
        }

        $s .= 'key' . '=' . $payment_config['wxpay_key'];

        $hash = strtoupper(md5($s));

        return $hash == $_GET['sign'];
    }




    /***************新增 S******************/

    /**
     * 微信支付
     */
    public function submit($param,$code = ''){
        $where['pay_sn'] = $param['order_sn'];
        
        $orderObj = Model('order');
        $info = $orderObj->getOrderInfo($where,array('order_goods'));

        $JS_API_CALL_URL = urlencode('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
        
        $jsApi = new JsApi_pub();

        //=========步骤1：网页授权获取用户openid============
        //通过code获得openid
        if ($code == '')
        {
            //触发微信返回code码
            $url = $jsApi->createOauthUrlForCode($JS_API_CALL_URL);
            Header("Location: $url"); 
        }else
        {
            //获取code码，以获取openid
            $jsApi->setCode($code);
            $openid = $jsApi->getOpenId();
        }
        //=========步骤2：使用统一支付接口，获取prepay_id============
        //使用统一支付接口
        $unifiedOrder = new UnifiedOrder_pub();
        
        //设置统一支付接口参数
        //设置必填参数
        //appid已填,商户无需重复填写
        //mch_id已填,商户无需重复填写
        //noncestr已填,商户无需重复填写
        //spbill_create_ip已填,商户无需重复填写
        //sign已填,商户无需重复填写
        $unifiedOrder->setParameter("openid","$openid");//openid
        $unifiedOrder->setParameter("body",$info['extend_order_goods'][0]['goods_name']);//商品描述
        
        $notify_url = 'http://www.xxx.com/mobile/api/payment/wxpay/notify_url.php';
        //自定义订单号，此处仅作举例
        // $timeStamp = time();
        // $out_trade_no = WxPayConf_pub::APPID."$timeStamp";
        $unifiedOrder->setParameter("out_trade_no",$info['order_sn']);//商户订单号 
        $unifiedOrder->setParameter("total_fee",($info['order_amount']*100));//总金额
        $unifiedOrder->setParameter("notify_url",$notify_url);//通知地址 
        $unifiedOrder->setParameter("trade_type","JSAPI");//交易类型
        //非必填参数，商户可根据实际情况选填
        //$unifiedOrder->setParameter("sub_mch_id","XXXX");//子商户号  
        //$unifiedOrder->setParameter("device_info","XXXX");//设备号 
        //$unifiedOrder->setParameter("attach","XXXX");//附加数据 
        //$unifiedOrder->setParameter("time_start","XXXX");//交易起始时间
        //$unifiedOrder->setParameter("time_expire","XXXX");//交易结束时间 
        //$unifiedOrder->setParameter("goods_tag","XXXX");//商品标记 
        //$unifiedOrder->setParameter("openid","XXXX");//用户标识
        //$unifiedOrder->setParameter("product_id","XXXX");//商品ID

        $prepay_id = $unifiedOrder->getPrepayId();
        //=========步骤3：使用jsapi调起支付============
        $jsApi->setPrepayId($prepay_id);

        $jsApiParameters = $jsApi->getParameters();
        $html = $this->returnHtml($jsApiParameters);
        return $html;
    }
    public function returnHtml($jsApiParameters){
        return '<html>
        <head>
            <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
            <title>微信安全支付</title>

            <script type="text/javascript">

                //调用微信JS api 支付
                function jsApiCall()
                {
                    WeixinJSBridge.invoke(
                        "getBrandWCPayRequest",
                        '.$jsApiParameters.',
                        function(res){
                            //alert(res.err_msg);
                            //WeixinJSBridge.log(res.err_msg);
                            location.href = "http://www.xxx.com/wap/tmpl/member/order_list.html";
                        }
                    );
                }

                function callpay()
                {
                    if (typeof WeixinJSBridge == "undefined"){
                        if( document.addEventListener ){
                            document.addEventListener("WeixinJSBridgeReady", jsApiCall, false);
                        }else if (document.attachEvent){
                            document.attachEvent("WeixinJSBridgeReady", jsApiCall); 
                            document.attachEvent("onWeixinJSBridgeReady", jsApiCall);
                        }
                    }else{
                        jsApiCall();
                    }
                }
                callpay();
            </script>
        </head>
        <body>
            </br></br></br></br>
            <div align="center">
                <button style="width:210px; height:30px; background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;display:none" type="button" onclick="callpay()" >贡献一下</button>
            </div>
        </body>
        </html>';
    }

}
