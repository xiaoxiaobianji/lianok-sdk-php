<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopAddBranchShopRequest extends AbstractDockingRequest
{

    public string $merchantNo;
    public string $shopName;
    public string $mccCode;
    public string $phone;
    public string $provinceCode;
    public string $cityCode;
    public string $areaCode;
    public string $address;
    public string $contacter;

    public function getResource(): string
    {
        return "api.hl.shop.addBranchShop";
    }
}