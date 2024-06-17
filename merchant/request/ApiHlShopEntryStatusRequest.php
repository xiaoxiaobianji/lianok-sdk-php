<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopEntryStatusRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public string $merchantNo;
    /**
     * 通道标识
     */
    public string $channelCode;

    public function getResource(): string
    {
        return "api.hl.shop.entryStatus";
    }
}