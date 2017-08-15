<?php
namespace app\index\controller;

use think\Controller;
use Wechat\WechatPay;

class Wxpay extends Controller
{
    public function index()
    {
        $wxPay = new WechatPay();
        $result = $wxPay->getQrcPayUrl('测试', '20154785171254122', 1, 'http://www.baidu.com');
        var_dump($result) ;
    }

    public function queryOrder()
    {
        $wxPay = new WechatPay();
        $result = $wxPay->queryOrder('20154785171254122');
        var_dump($result);
    }

    public function refund()
    {
        $wxPay = new WechatPay();
        $result = $wxPay->refund('20154785171254122', '4004042001201708146185283281' , '5151951981891981', '1', '1');
        var_dump($result);
    }
    public function transfers()
    {
        $wxPay = new WechatPay();
        $result = $wxPay->transfers('oZcUCwQe_LF73EbQ9eTkOs55wYJY', 1, '2015478517125412222','dd');
        var_dump($result);
    }
}
