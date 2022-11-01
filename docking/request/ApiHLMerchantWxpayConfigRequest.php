<?php

class ApiHLMerchantWxpayConfigRequest extends RequestBase
{
    public function getApiName(){
        return "api.hl.merchant.wxpayconfig";
    }

    public $merchantNo;
    public $operatorAccount;
    public $appid;
    public $channelCode;
}