<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopSettlePeriodSetRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public  $merchantNo;

    /**
     * 渠道编号
     */
    public  $channelCode;

    /**
     * 申请变更的结算周期时刻点
     */
    public  $applySettlePeriod;

    public function getResource(): string
    {
        return "api.hl.shop.settle.period.set";
    }
}