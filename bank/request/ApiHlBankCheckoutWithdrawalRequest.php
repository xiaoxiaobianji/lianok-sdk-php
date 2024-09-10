<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankCheckoutWithdrawalRequest extends AbstractDockingRequest
{

    public  $ip;
    /**
     * 账户编号
     */
    public  $businessNo;
    /**
     * 提现金额
     */
    public  $amount;
    /**
     * 摘要
     */
    public  $memo;

    public function getResource(): string
    {
        return "api.hl.bank.checkout.withdrwawal";
    }
}