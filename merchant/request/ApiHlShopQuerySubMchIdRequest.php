<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopQuerySubMchIdRequest extends AbstractDockingRequest
{

    public  $merchantNo;
    public  $channelCode;

    public function getResource(): string
    {
        return "api.hl.shop.querySubMchId";
    }
}