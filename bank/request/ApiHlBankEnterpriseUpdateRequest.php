<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankEnterpriseUpdateRequest extends AbstractDockingRequest
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
     * 证件有效期(结束时间)/长期
     */
    public  $legalIdEndDate;

    /**
     * 0-结束时间点 1-永久有效
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
     * 企业名称
     */
    public  $corpName;

    /**
     * 企业证件类别 1-三证三号；2-三证合一；0-个体工商户；
     */
    public  $corpType;

    /**
     * 证件类型 20-统一社会信用代码
     */
    public  $corpIdType;

    /**
     * 统一社会信用代码
     */
    public  $businessLicenceNo;

    /**
     * 注册地址省
     */
    public  $registerProvince;

    /**
     * 注册地址市
     */
    public  $registerCity;

    /**
     * 注册地址区
     */
    public  $registerDistrict;

    /**
     * 注册详细地址
     */
    public  $registerAddress;

    /**
     * 注册资本,单位元
     */
    public  $registeredCapital;

    /**
     * 经营地址省
     */
    public  $operatingProvince;

    /**
     * 经营地址市
     */
    public  $operatingCity;

    /**
     * 经营地址区
     */
    public  $operatingDistrict;

    /**
     * 经营详细地址
     */
    public  $operatingAddress;

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
     * 营业执照是否永久有效
     */
    public $corpPermanent;

    /**
     * 企业联系电话
     */
    public  $corpContractPhone;

    /**
     * 税务登记号
     */
    public  $taxRegNo;

    /**
     * 组织机构代码
     */
    public  $orgNo;

    /**
     * 营业执照副本url
     */
    public  $businessLicenceUrl;

    /**
     * 税务登记证url
     */
    public  $taxCertUrl;

    /**
     * 组织机构代码证url
     */
    public  $orgCertUrl;

    /**
     * 开户许可证url
     */
    public  $openAcctUrl;

    /**
     * 委托授权书url
     */
    public  $authUrl;

    /**
     * 企业委托授权书url
     */
    public  $corpAuthUrl;

    /**
     * 其他审核图片1url
     */
    public  $expPicUrl1;

    /**
     * 其他审核图片2url
     */
    public  $expPicUrl2;

    /**
     * 其他审核图片3url
     */
    public  $expPicUrl3;

    /**
     * 备注
     */
    public  $corpRemark;

    /**
     * 受益人姓名
     */
    public  $beneficiaryName;

    /**
     * 受益人证件类型
     */
    public  $beneficiaryIdType;

    /**
     * 受益人身份证编号/证件号
     */
    public  $beneficiaryIdNo;

    /**
     * 受益人证件有效期(开始时间)
     */
    public  $beneficiaryIdStartDate;

    /**
     * 受益人证件有效期(结束时间)/长期
     */
    public  $beneficiaryIdEndDate;

    /**
     * 受益人身份证永久有效
     */
    public $beneficiaryPermanent;

    /**
     * 受益人地址
     */
    public  $beneficiaryAddress;

    /**
     * 1-企业；2-个人
     */
    public  $holdType;

    /**
     * 控股股东/实际控制人姓名
     */
    public  $holdName;

    /**
     * 控股股东/实际控制人证件类型
     */
    public  $holdIdType;

    /**
     * 控股股东/实际控制人身份证编号/证件号
     */
    public  $holdIdNo;

    /**
     * 控股股东/实际控制人证件有效期(开始时间)
     */
    public  $holdIdStartDate;

    /**
     * 控股股东/实际控制人证件有效期(结束时间)
     */
    public  $holdIdEndDate;

    /**
     * 控股股东/实际控制人证件永久有效
     */
    public $holdPermanent;

    /**
     * 经办人姓名
     */
    public  $operatorName;

    /**
     * 经办人身份证类型
     * 固定值：10
     */
    public  $operatorIdType;

    /**
     * 经办人身份证编号
     */
    public  $operatorIdNo;

    /**
     * 经办人证件有效期(开始时间)
     */
    public $operatorIdStartDate;

    /**
     * 经办人证件有效期(结束时间)
     */
    public  $operatorIdEndDate;

    /**
     * 经办人身份证永久有效
     */
    public $operatorPermanent;

    /**
     * 经办人手机号
     */
    public  $operatorPhone;

    /**
     * 经办人邮箱
     */
    public  $operatorEmail;

    /**
     * 经办人身份证人像图片
     */
    public  $operatorIdFrontUrl;

    /**
     * 经办人身份证国徽图片
     */
    public  $operatorIdBackUrl;

    public function getResource(): string
    {
        return "api.hl.bank.enterprise.update";
    }
}