<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankEnterpriseInfoUpdateRequest extends AbstractDockingRequest
{


    public  $ip;
    /**
     * 修改时传入
     */
    public  $businessNo;

    /**
     * 交易户名称
     */
    public  $businessName;

    /**
     * 姓名
     */
    public  $legalName;

    /**
     * 身份证类型
     */
    public  $legalIdType;

    /**
     * 身份证编号
     */
    public  $legalIdNo;

    /**
     * 证件有效期(开始时间)
     */
    public  $legalIdStartDate;

    /**
     * 证件有效期(结束时间)
     */
    public  $legalIdEndDate;

    /**
     * 是否永久有效
     */
    public $legalPermanent;

    /**
     * 身份证人像图片
     */
    public  $legalIdFrontUrl;

    /**
     * 身份证国徽图片
     */
    public  $legalIdBackUrl;

    /**
     * 企业联系电话
     */
    public  $corpContractPhone;

    /**
     * 营业执照副本url
     */
    public  $businessLicenceUrl;

    /**
     * 注册资本,单位元
     */
    public  $registeredCapital;

    /**
     * 经营范围
     */
    public  $businessScope;

    /**
     * 营业期限开始日期
     */
    public  $businessLicenceStartDate;

    /**
     * 营业期限结束日期
     */
    public  $businessLicenceEndDate;

    /**
     * 是否永久有效
     */
    public $corpPermanent;

    public function getResource(): string
    {
        return "api.hl.bank.enterprise.info.update";
    }
}