<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankCardUpdateRequest extends AbstractDockingRequest
{

    public string $ip;
    /**
     * 账号编号
     */
    public string $businessNo;

    /**
     * 银行卡号
     */
    public string $bankCardNo;

    /**
     * 开户名
     */
    public string $bankCardName;

    /**
     * 联行号
     */
    public string $bankNo;

    /**
     * 支行名称
     */
    public string $bankName;

    /**
     * 银行预留手机号
     */
    public string $bankCardMobile;

    /**
     * 开户许可证url
     */
    public string $openAcctUrl;

    /**
     * 开户许可证核准号或基本存款账户编号
     */
    public string $openLicenceNo;

    public function getResource(): string
    {
        return "api.hl.bank.card.update";
    }
}