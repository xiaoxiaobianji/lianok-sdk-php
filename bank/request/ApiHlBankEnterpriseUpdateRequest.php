<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankEnterpriseUpdateRequest extends AbstractDockingRequest
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
     * 证件有效期(结束时间)/长期
     */
    public string $legalIdEndDate;

    /**
     * 0-结束时间点 1-永久有效
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
     * 企业名称
     */
    public string $corpName;

    /**
     * 企业证件类别 1-三证三号；2-三证合一；0-个体工商户；
     */
    public string $corpType;

    /**
     * 证件类型 20-统一社会信用代码
     */
    public string $corpIdType;

    /**
     * 统一社会信用代码
     */
    public string $businessLicenceNo;

    /**
     * 注册地址省
     */
    public string $registerProvince;

    /**
     * 注册地址市
     */
    public string $registerCity;

    /**
     * 注册地址区
     */
    public string $registerDistrict;

    /**
     * 注册详细地址
     */
    public string $registerAddress;

    /**
     * 注册资本,单位元
     */
    public string $registeredCapital;

    /**
     * 经营地址省
     */
    public string $operatingProvince;

    /**
     * 经营地址市
     */
    public string $operatingCity;

    /**
     * 经营地址区
     */
    public string $operatingDistrict;

    /**
     * 经营详细地址
     */
    public string $operatingAddress;

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
     * 营业执照是否永久有效
     */
    public bool $corpPermanent;

    /**
     * 企业联系电话
     */
    public string $corpContractPhone;

    /**
     * 税务登记号
     */
    public string $taxRegNo;

    /**
     * 组织机构代码
     */
    public string $orgNo;

    /**
     * 营业执照副本url
     */
    public string $businessLicenceUrl;

    /**
     * 税务登记证url
     */
    public string $taxCertUrl;

    /**
     * 组织机构代码证url
     */
    public string $orgCertUrl;

    /**
     * 开户许可证url
     */
    public string $openAcctUrl;

    /**
     * 委托授权书url
     */
    public string $authUrl;

    /**
     * 企业委托授权书url
     */
    public string $corpAuthUrl;

    /**
     * 其他审核图片1url
     */
    public string $expPicUrl1;

    /**
     * 其他审核图片2url
     */
    public string $expPicUrl2;

    /**
     * 其他审核图片3url
     */
    public string $expPicUrl3;

    /**
     * 备注
     */
    public string $corpRemark;

    /**
     * 受益人姓名
     */
    public string $beneficiaryName;

    /**
     * 受益人证件类型
     */
    public string $beneficiaryIdType;

    /**
     * 受益人身份证编号/证件号
     */
    public string $beneficiaryIdNo;

    /**
     * 受益人证件有效期(开始时间)
     */
    public string $beneficiaryIdStartDate;

    /**
     * 受益人证件有效期(结束时间)/长期
     */
    public string $beneficiaryIdEndDate;

    /**
     * 受益人身份证永久有效
     */
    public bool $beneficiaryPermanent;

    /**
     * 受益人地址
     */
    public string $beneficiaryAddress;

    /**
     * 1-企业；2-个人
     */
    public string $holdType;

    /**
     * 控股股东/实际控制人姓名
     */
    public string $holdName;

    /**
     * 控股股东/实际控制人证件类型
     */
    public string $holdIdType;

    /**
     * 控股股东/实际控制人身份证编号/证件号
     */
    public string $holdIdNo;

    /**
     * 控股股东/实际控制人证件有效期(开始时间)
     */
    public string $holdIdStartDate;

    /**
     * 控股股东/实际控制人证件有效期(结束时间)
     */
    public string $holdIdEndDate;

    /**
     * 控股股东/实际控制人证件永久有效
     */
    public bool $holdPermanent;

    /**
     * 经办人姓名
     */
    public string $operatorName;

    /**
     * 经办人身份证类型
     * 固定值：10
     */
    public string $operatorIdType;

    /**
     * 经办人身份证编号
     */
    public string $operatorIdNo;

    /**
     * 经办人证件有效期(开始时间)
     */
    public string $operatorIdStartDate;

    /**
     * 经办人证件有效期(结束时间)
     */
    public string $operatorIdEndDate;

    /**
     * 经办人身份证永久有效
     */
    public bool $operatorPermanent;

    /**
     * 经办人手机号
     */
    public string $operatorPhone;

    /**
     * 经办人邮箱
     */
    public string $operatorEmail;

    /**
     * 经办人身份证人像图片
     */
    public string $operatorIdFrontUrl;

    /**
     * 经办人身份证国徽图片
     */
    public string $operatorIdBackUrl;

    public function getResource(): string
    {
        return "api.hl.bank.enterprise.update";
    }
}