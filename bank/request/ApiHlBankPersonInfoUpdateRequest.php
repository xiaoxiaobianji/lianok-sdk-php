<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankPersonInfoUpdateRequest extends AbstractDockingRequest
{


    public  $ip;
    /**
     * 账户编号
     */
    public  $businessNo;

    /**
     * 交易户名称
     */
    public  $businessName;


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
     * 是否永久有效
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

    public function getResource(): string
    {
        return "api.hl.bank.person.info.update";
    }
}