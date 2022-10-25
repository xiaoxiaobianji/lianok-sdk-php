<?php

class ApiHLOrderQueryApplyRequest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.queryApply";
    }

    public $downIdentification;

}