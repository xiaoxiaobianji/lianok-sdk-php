<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankCardUpdateRequest extends AbstractDockingRequest
{

    public  $ip;
    /**
     * 账号编号
     */
    public  $businessNo;

    /**
     * 银行卡号
     */
    public  $bankCardNo;

    /**
     * 开户名
     */
    public  $bankCardName;

    /**
     * 联行号
     */
    public  $bankNo;

    /**
     * 支行名称
     */
    public  $bankName;

    /**
     * 银行预留手机号
     */
    public  $bankCardMobile;

    /**
     * 开户许可证url
     */
    public  $openAcctUrl;

    /**
     * 开户许可证核准号或基本存款账户编号
     */
    public  $openLicenceNo;

    public function getResource(): string
    {
        return "api.hl.bank.card.update";
    }
}