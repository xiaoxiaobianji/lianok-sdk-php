<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopAddMerchantEmployeeRequest extends AbstractDockingRequest
{

    public string $merchantNo;
    public string $name;
    public string $loginAccount;
    public string $password;
    public string $managerPwd;
    public string $roleType;
    public string $shopNo;
    public string $remark;

    public function getResource(): string
    {
        return "api.hl.shop.addMerchantEmployee";
    }
}