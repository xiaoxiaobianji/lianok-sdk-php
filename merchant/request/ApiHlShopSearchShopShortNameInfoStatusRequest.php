<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopSearchShopShortNameInfoStatusRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public  $merchantNo;
    /**
     * 通道标识
     */
    public  $channelCode;

    public function getResource(): string
    {
        return "api.hl.shop.searchShopShortNameInfoStatus";
    }
}