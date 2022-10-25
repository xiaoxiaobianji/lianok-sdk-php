<?php

class ApiHLOrderAccountStatementApplyReuqest extends RequestBase
{
    public function getApiName()
    {
        return "api.hl.order.accountStatementApply";
    }

    public $billDate;
    public $downType;
    public $merchantNo;

}