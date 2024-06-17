<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankEnterpriseInfoUpdateRequest extends AbstractDockingRequest
{


    public string $ip;
    /**
     * 修改时传入
     */
    public string $businessNo;

    /**
     * 交易户名称
     */
    public string $businessName;

    /**
     * 姓名
     */
    public string $legalName;

    /**
     * 身份证类型
     */
    public string $legalIdType;

    /**
     * 身份证编号
     */
    public string $legalIdNo;

    /**
     * 证件有效期(开始时间)
     */
    public string $legalIdStartDate;

    /**
     * 证件有效期(结束时间)
     */
    public string $legalIdEndDate;

    /**
     * 是否永久有效
     */
    public bool $legalPermanent;

    /**
     * 身份证人像图片
     */
    public string $legalIdFrontUrl;

    /**
     * 身份证国徽图片
     */
    public string $legalIdBackUrl;

    /**
     * 企业联系电话
     */
    public string $corpContractPhone;

    /**
     * 营业执照副本url
     */
    public string $businessLicenceUrl;

    /**
     * 注册资本,单位元
     */
    public string $registeredCapital;

    /**
     * 经营范围
     */
    public string $businessScope;

    /**
     * 营业期限开始日期
     */
    public string $businessLicenceStartDate;

    /**
     * 营业期限结束日期
     */
    public string $businessLicenceEndDate;

    /**
     * 是否永久有效
     */
    public bool $corpPermanent;

    public function getResource(): string
    {
        return "api.hl.bank.enterprise.info.update";
    }
}