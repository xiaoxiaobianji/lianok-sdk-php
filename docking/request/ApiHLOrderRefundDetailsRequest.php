<?php

class ApiHLOrderRefundDetailsRequest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.refund.details";
    }

    public $refundNo;
    public $channelRefundNo;
    public $businessRefundNo;
    public $merchantNo;

}