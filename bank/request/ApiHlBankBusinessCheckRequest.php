<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankBusinessCheckRequest extends AbstractDockingRequest
{
    public  $ip;
    /**
     * 账号编号
     */
    public  $businessNo;
    /**
     * 打款金额
     */
    public  $amount;
    /**
     * 流水号
     * <p>
     * 1.开户不需要传
     * 2.修改结算卡返回打款验证 上传修改结算卡返回的flowNo
     */
    public  $flowNo;

    public function getResource(): string
    {
        return "api.hl.bank.business.check";
    }
}