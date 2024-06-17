<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopUpdateBaseInfoRequest extends AbstractDockingRequest
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
     * 异步通知地址
     * 审核状态有变化时会发出通知
     */
    public string $notifyUrl;
    /**
     * 商户类型
     */
    public string $merchantType;
    /**
     * 经营类目编码
     */
    public string $mccCode;
    /**
     * 经营区域-省
     */
    public string $provinceCode;
    /**
     * 经营区域-市
     */
    public string $cityCode;
    /**
     * 经营区域-区
     */
    public string $areaCode;
    /**
     * 详细地址
     */
    public string $address;
    /**
     * 门头照
     */
    public string $shopFaceImg;
    /**
     * 内景照
     */
    public string $shopInnerImg;
    /**
     * 收银台照
     */
    public string $shopCashdeskImg;

    public function getResource(): string
    {
        return "api.hl.shop.updateBaseInfo";
    }
}