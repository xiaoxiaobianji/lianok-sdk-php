<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankPersonInfoUpdateRequest extends AbstractDockingRequest
{


    public string $ip;
    /**
     * 账户编号
     */
    public string $businessNo;

    /**
     * 交易户名称
     */
    public string $businessName;


    /**
     * 姓名
     */
    public string $userName;

    /**
     * 身份证类型
     */
    public string $userIdType;

    /**
     * 身份证编号
     */
    public string $userIdNo;

    /**
     * 证件有效期(开始时间)
     */
    public string $userIdStartDate;

    /**
     * 证件有效期(结束时间)/长期
     */
    public string $userIdEndDate;

    /**
     * 是否永久有效
     */
    public bool $userPermanent;

    /**
     * 身份证人像图片
     */
    public string $userIdFrontUrl;

    /**
     * 身份证国徽图片
     */
    public string $userIdBackUrl;

    public function getResource(): string
    {
        return "api.hl.bank.person.info.update";
    }
}