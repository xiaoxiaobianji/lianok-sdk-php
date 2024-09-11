<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopUpdateBaseInfoRequest extends AbstractDockingRequest
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
     * 异步通知地址
     * 审核状态有变化时会发出通知
     */
    public  $notifyUrl;
    /**
     * 商户类型
     */
    public  $merchantType;
    /**
     * 经营类目编码
     */
    public  $mccCode;
    /**
     * 经营区域-省
     */
    public  $provinceCode;
    /**
     * 经营区域-市
     */
    public  $cityCode;
    /**
     * 经营区域-区
     */
    public  $areaCode;
    /**
     * 详细地址
     */
    public  $address;
    /**
     * 门头照
     */
    public  $shopFaceImg;
    /**
     * 内景照
     */
    public  $shopInnerImg;
    /**
     * 收银台照
     */
    public  $shopCashdeskImg;

    public function getResource(): string
    {
        return "api.hl.shop.updateBaseInfo";
    }
}