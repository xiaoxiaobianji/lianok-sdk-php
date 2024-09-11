<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankCardUpdateStatusRequest extends AbstractDockingRequest
{
    /**
     * 账户编号
     */
    public  $businessNo;
    /**
     * 修改结算卡返回流水号
     */
    public  $flowNo;

    public function getResource(): string
    {
        return "api.hl.bank.card.update.status";
    }
}