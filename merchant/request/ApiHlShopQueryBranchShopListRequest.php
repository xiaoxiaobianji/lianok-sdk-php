<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopQueryBranchShopListRequest extends AbstractDockingRequest
{

    public string $merchantNo;
    public string $shopNo;
    public string $shopName;
    public int $pageSize;
    public int $currentPage;

    public function getResource(): string
    {
        return "api.hl.shop.queryBranchShopList";
    }
}