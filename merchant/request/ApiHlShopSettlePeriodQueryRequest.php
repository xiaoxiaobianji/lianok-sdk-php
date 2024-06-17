<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopSettlePeriodQueryRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public string $merchantNo;

    /**
     * 渠道编号
     */
    public string $channelCode;

    public function getResource(): string
    {
        return "api.hl.shop.settle.period.query";
    }
}