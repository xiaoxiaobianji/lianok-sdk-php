<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopUpdateSwipeCardRateRequest extends AbstractDockingRequest
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
     * 刷卡费率类型 目前只能传1
     */
    public int $swipeType;
    /**
     * 借记卡费率
     */
    public string $unionDebitRate;
    /**
     * 贷记卡费率
     */
    public string $unionCreditRate;

    public function getResource(): string
    {
        return "api.hl.shop.updateSwipeCardRate";
    }
}