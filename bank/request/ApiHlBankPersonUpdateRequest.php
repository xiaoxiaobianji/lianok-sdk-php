<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankPersonUpdateRequest extends AbstractDockingRequest
{


    public  $ip;

    /**
     * 交易账户编号
     */
    public  $businessNo;
    /**
     * 账户类型
     * person=个人个体工商=individual,企业商户=enterprise
     */
    public  $businessType;
    /**
     * 交易户名称
     */
    public  $businessName;

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
     * 预留手机号
     */
    public  $bankCardMobile;

    /**
     * 姓名
     */
    public  $userName;

    /**
     * 身份证类型
     */
    public  $userIdType;

    /**
     * 身份证编号
     */
    public  $userIdNo;

    /**
     * 证件有效期(开始时间)
     */
    public  $userIdStartDate;

    /**
     * 证件有效期(结束时间)/长期
     */
    public  $userIdEndDate;

    /**
     * 身份证永久有效
     */
    public $userPermanent;

    /**
     * 身份证人像图片
     */
    public  $userIdFrontUrl;

    /**
     * 身份证国徽图片
     */
    public  $userIdBackUrl;

    /**
     * 地址
     */
    public  $userAddress;

    /**
     * 职业
     */
    public  $userProfession;

    /**
     * 备注
     */
    public  $userRemark;

    public function getResource(): string
    {
        return "api.hl.bank.person.update";
    }
}