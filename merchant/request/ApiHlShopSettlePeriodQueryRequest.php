<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopSettlePeriodQueryRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public  $merchantNo;

    /**
     * 渠道编号
     */
    public  $channelCode;

    public function getResource(): string
    {
        return "api.hl.shop.settle.period.query";
    }
}