<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopOpenSwipeRequest extends AbstractDockingRequest
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
     * 刷卡费率类型 目前只能传1
     */
    public $swipeType;
    /**
     * 借记卡费率
     */
    public  $unionDebitRate;
    /**
     * 贷记卡费率
     */
    public  $unionCreditRate;

    public function getResource(): string
    {
        return "api.hl.shop.openSwipe";
    }
}