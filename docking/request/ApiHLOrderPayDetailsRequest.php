<?php

class ApiHLOrderPayDetailsRequest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.pay.details";
    }

    public $orderNo;
    public $merchantNo;
    public $channelOrderNo;
    public $businessOrderNo;

}