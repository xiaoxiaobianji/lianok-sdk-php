<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankInfoUpdateStatusRequest extends AbstractDockingRequest
{
    /**
     * 账户编号
     */
    public  $businessNo;
    /**
     * 修改基础信息返回的流水号
     */
    public  $flowNo;

    public function getResource(): string
    {
        return "api.hl.bank.info.update.status";
    }
}