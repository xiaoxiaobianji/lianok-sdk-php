<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopUpdateSettleCardInfoRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public string $merchantNo;
    /**
     * 通道标识
     */
    public string $channelCode;
    /**
     * 回调地址
     */
    public string $notifyUrl;
    /**
     * 商户类型
     */
    public string $merchantType;
    /**
     * 结算类型
     */
    public string $settleType;
    /**
     * 开户名
     */
    public string $bankAccountName;
    /**
     * 联行号
     */
    public string $bankContactLine;
    /**
     * 银行卡号
     */
    public string $bankCardNo;
    /**
     * 卡户支行地区
     */
    public string $bankArea;
    /**
     * 开户总行
     */
    public string $bankName;
    /**
     * 开户支行
     */
    public string $bankBranchName;
    /**
     * 银行预留手机号
     */
    public string $bankMobile;
    /**
     * 银行卡照片
     */
    public string $bankCardImg;
    /**
     * 开户许可证
     * 对公法人需上传
     */
    public string $bankOpenAccountLicenseImg;
    /**
     * 非法人身份证人像照
     * 对私非法人需上传
     */
    public string $nonLawIdCardPortraitImg;
    /**
     * 非法人身份证国徽照
     * 对私非法人需上传
     */
    public string $nonLawIdCardEmblemImg;
    /**
     * 非法人结算授权照
     * 对私非法人需上传
     */
    public string $nonLawSettleAuthImg;
    /**
     * 非法人身份证号码
     * 对私非法人需上传
     */
    public string $nonLawIdCardNo;

    public function getResource(): string
    {
        return "api.hl.shop.updateSettleCardInfo";
    }
}