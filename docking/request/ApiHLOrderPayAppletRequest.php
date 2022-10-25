<?php

class ApiHLOrderPayAppletRequest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.pay.applet";
    }

    public $merchantNo;
    public $operatorAccount;
    public $businessOrderNo;
    public $payAmount;
    public $payWay;
    public $appId;
    public $openId;
    public $userId;
    public $deviceNo;
    public $remark;
    public $notifyUrl;
    public $subject;
    public $payExpireTime;
    public $stageNum;
    public $goodsTag;
    public $goods_info;

}