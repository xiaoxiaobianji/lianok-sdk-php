<?php

class ApiHLOrderPayUnifiedRequest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.pay.unified";
    }

    public $businessOrderNo;
    public $payAmount;
    public $remark;
    public $merchantNo;
    public $operatorAccount;
    public $deviceNo;
    public $notifyUrl;
    public $stageNum;
    public $subject;
    public $payWay;
    public $limitPay;
    public $PayExpireTime;
    public $PayUrlExpireTime;
    public $GoodsTag;
    public $goodsInfo;

}