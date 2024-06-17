<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankPersonUpdateRequest extends AbstractDockingRequest
{


    public string $ip;

    /**
     * 交易账户编号
     */
    public string $businessNo;
    /**
     * 账户类型
     * person=个人个体工商=individual,企业商户=enterprise
     */
    public string $businessType;
    /**
     * 交易户名称
     */
    public string $businessName;

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
     * 预留手机号
     */
    public string $bankCardMobile;

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
     * 身份证永久有效
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

    /**
     * 地址
     */
    public string $userAddress;

    /**
     * 职业
     */
    public string $userProfession;

    /**
     * 备注
     */
    public string $userRemark;

    public function getResource(): string
    {
        return "api.hl.bank.person.update";
    }
}