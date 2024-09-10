<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopUpdateQualificationInfoRequest extends AbstractDockingRequest
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
     * 商户类型
     */
    public  $merchantType;
    /**
     * 异步通知地址
     * 审核状态有变化时会发出通知,不上传则根据默认回调地址进行通知
     */
    public  $notifyUrl;
    /**
     * 法人证件正面照
     */
    public  $idCardPortraitImg;
    /**
     * 法人证件反面照
     */
    public  $idCardEmblemImg;
    /**
     * 证件有效开始日期
     */
    public  $idCardBeginDate;
    /**
     * 证件有效结束日期
     */
    public  $idCardExpireDate;
    /**
     * 营业执照有效开始日期
     */
    public  $merchantLicenseBegDate;
    /**
     * 营业执照有效结束日期
     */
    public  $merchantLicenseEndDate;
    /**
     * 营业执照注册地址
     * 商户类型为企业、个体工商必填
     */
    public  $merchantLicenseAddress;
    /**
     * 营业执照图片
     * 商户类型为企业、个体工商必填
     */
    public  $merchantLicenseImg;
    /**
     * 营业执照全称
     */
    public  $merchantLicenseFullName;
    /**
     * 营业执照编码
     */
    public  $merchantLicenseNo;

    public function getResource(): string
    {
        return "api.hl.shop.updateQualificationInfo";
    }
}