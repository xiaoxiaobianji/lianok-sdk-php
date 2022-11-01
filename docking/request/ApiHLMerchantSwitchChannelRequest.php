<?php

class ApiHLMerchantSwitchChannelRequest extends RequestBase
{

    public function getApiName(){
        return "api.hl.merchant.switchChannel";
    }

    public $merchantNo;
    public $operatorAccount;
    public $payWay;
    public $payStyle;
    public $channelCode;
}