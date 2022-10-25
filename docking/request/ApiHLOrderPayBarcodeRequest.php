<?php

class ApiHLOrderPayBarcodeRequest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.pay.barcode";
    }

    public $payBarcode;
    public $businessOrderNo;
    public $payAmount;
    public $remark;
    public $merchantNo;
    public $operatorAccount;
    public $deviceNo;
    public $notifyUrl;
    public $stageNum;
    public $subject;
    public $limitPay;
    public $payExpireTime;
    public $goodsTag;
    public $goodsInfo;

}