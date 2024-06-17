<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankCheckoutWithdrawalRequest extends AbstractDockingRequest
{

    public string $ip;
    /**
     * 账户编号
     */
    public string $businessNo;
    /**
     * 提现金额
     */
    public string $amount;
    /**
     * 摘要
     */
    public string $memo;

    public function getResource(): string
    {
        return "api.hl.bank.checkout.withdrwawal";
    }
}