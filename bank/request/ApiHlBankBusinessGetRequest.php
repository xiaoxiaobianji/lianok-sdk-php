<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankBusinessGetRequest extends AbstractDockingRequest
{

    public  $businessNo;

    public function getResource(): string
    {
        return "api.hl.bank.business.get";
    }
}