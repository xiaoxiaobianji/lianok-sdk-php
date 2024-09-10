<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopQueryMerchantEmployeeListRequest extends AbstractDockingRequest
{

    public  $merchantNo;
    public  $shopNo;
    public  $employeeName;
    public $pageSize;
    public $currentPage;

    public function getResource(): string
    {
        return "api.hl.shop.queryMerchantEmployeeList";
    }
}