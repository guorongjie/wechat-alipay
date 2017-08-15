<?php
namespace app\index\controller;

use think\Controller;

class Alipay extends Controller
{
    /**
     * 转账
     */
    public function transfer()
    {
        $aliPay = new \alipay\alipay();
        $result = $aliPay->transfer('14848915156153615','15088132389',0.1);
        var_dump($result);
    }

    /**
     * 转账查询
     */
    public function queryTransfer()
    {
        $aliPay = new \alipay\alipay();
        $result = $aliPay->queryTransfer('14848915156153333615','');
        var_dump($result);
    }


}
