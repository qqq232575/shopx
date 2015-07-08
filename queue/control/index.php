<?php
/**
 * 队列
*
*
*
*
<<<<<<< HEAD
* by 33hao 好商城V3  www.33hao.com 开发
*/
defined('InShopNC') or exit('Access Invalid!');
=======
* by shopx shopx  www.yywxx.com 开发
*/
defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

class indexControl {

    public function queueOp() {
        if (ob_get_level()) ob_end_clean();

        $model_queue = Model('queue',BASE_PATH);

        $worker = new QueueServer();
        while (true) {
            $list_key = $worker->scan();
            if (!empty($list_key) && is_array($list_key)) {
                foreach ($list_key as $key) {
                    $content = $worker->pop($key);
                    if (empty($content)) continue;
                    $method = key($content);
                    $arg = current($content);
                    $model_queue->$method($arg);
                    echo date('Y-m-d H:i:s',time()).' '.$method."\n";
//                     $content['time'] = date('Y-m-d H:i:s',time());
//                     print_R($content);
//                     echo "\n";
                    flush();
                    ob_flush();
                }
            }
            sleep(1);
        }
    }
}