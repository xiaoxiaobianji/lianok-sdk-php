<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopAddBranchShopRequest extends AbstractDockingRequest
{

    public  $merchantNo;
    public  $shopName;
    public  $mccCode;
    public  $phone;
    public  $provinceCode;
    public  $cityCode;
    public  $areaCode;
    public  $address;
    public  $contacter;

    public function getResource(): string
    {
        return "api.hl.shop.addBranchShop";
    }
}