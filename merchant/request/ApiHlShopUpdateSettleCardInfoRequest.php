<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopUpdateSettleCardInfoRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public  $merchantNo;
    /**
     * 通道标识
     */
    public  $channelCode;
    /**
     * 回调地址
     */
    public  $notifyUrl;
    /**
     * 商户类型
     */
    public  $merchantType;
    /**
     * 结算类型
     */
    public  $settleType;
    /**
     * 开户名
     */
    public  $bankAccountName;
    /**
     * 联行号
     */
    public  $bankContactLine;
    /**
     * 银行卡号
     */
    public  $bankCardNo;
    /**
     * 卡户支行地区
     */
    public  $bankArea;
    /**
     * 开户总行
     */
    public  $bankName;
    /**
     * 开户支行
     */
    public  $bankBranchName;
    /**
     * 银行预留手机号
     */
    public  $bankMobile;
    /**
     * 银行卡照片
     */
    public  $bankCardImg;
    /**
     * 开户许可证
     * 对公法人需上传
     */
    public  $bankOpenAccountLicenseImg;
    /**
     * 非法人身份证人像照
     * 对私非法人需上传
     */
    public  $nonLawIdCardPortraitImg;
    /**
     * 非法人身份证国徽照
     * 对私非法人需上传
     */
    public  $nonLawIdCardEmblemImg;
    /**
     * 非法人结算授权照
     * 对私非法人需上传
     */
    public  $nonLawSettleAuthImg;
    /**
     * 非法人身份证号码
     * 对私非法人需上传
     */
    public  $nonLawIdCardNo;

    public function getResource(): string
    {
        return "api.hl.shop.updateSettleCardInfo";
    }
}