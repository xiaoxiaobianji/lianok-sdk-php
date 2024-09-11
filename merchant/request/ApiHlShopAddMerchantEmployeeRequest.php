<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopAddMerchantEmployeeRequest extends AbstractDockingRequest
{

    public  $merchantNo;
    public  $name;
    public  $loginAccount;
    public  $password;
    public  $managerPwd;
    public  $roleType;
    public  $shopNo;
    public  $remark;

    public function getResource(): string
    {
        return "api.hl.shop.addMerchantEmployee";
    }
}