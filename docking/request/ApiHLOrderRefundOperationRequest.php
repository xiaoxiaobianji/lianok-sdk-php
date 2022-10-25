<?php

class ApiHLOrderRefundOperationRequest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.refund.operation";
    }

    public $orderNo;
    public $businessRefundNo;
    public $refundAmount;
    public $remark;
    public $refundPassword;
    public $merchantNo;
    public $operatorAccount;
    public $deviceNo;
    public $notifyUrl;

}