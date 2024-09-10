<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopUpdateRateInfoRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public  $merchantNo;
    /**
     * 通道名称
     */
    public  $channelCode;
    /**
     * 异步通知地址
     * 审核状态有变化时会发出通知
     */
    public  $notifyUrl;
    /**
     * 支付宝费率
     */
    public  $alipayRate;
    /**
     * 微信费率
     */
    public  $wechatPayRate;
    /**
     * 云闪付费率1000以下
     */
    public  $cloudPayLe1000Rate;
    /**
     * 云闪付费率1000以上
     */
    public  $cloudPayGt1000Rate;

    public function getResource(): string
    {
        return "api.hl.shop.update.rateInfo";
    }
}