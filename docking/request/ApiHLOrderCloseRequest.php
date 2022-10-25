<?php

class ApiHLOrderCloseRequest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.close";
    }

    public $orderNo;
    public $merchantNo;
    public $businessOrderNo;

}
