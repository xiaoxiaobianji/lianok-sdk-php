<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankReceiptGetRequest extends AbstractDockingRequest
{

    /**
     * 申请单类型
     * 1-提现
     * 2-订单交易
     * 3-交易退回
     * 4-充值入金
     */
    public $receiptType;
    /**
     * 申请单号
     */
    public  $orderNo;


    public function getResource(): string
    {
        return "api.hl.bank.receipt.get";
    }
}