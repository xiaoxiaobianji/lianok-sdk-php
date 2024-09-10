<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopQuerySwipeCardStatusRequest extends AbstractDockingRequest
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
     * 刷卡费率类型,目前只能传1
     */
    public int $swipeType;

    public function getResource(): string
    {
        return "api.hl.shop.querySwipeCardStatus";
    }
}