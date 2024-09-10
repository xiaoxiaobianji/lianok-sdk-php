<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintCompleteRequest extends AbstractDockingRequest
{

    public  $merchantNo;

    public  $huolianComplaintNo;

    public  $operatorUserAccount;

    public function getResource(): string
    {
        return "api.hl.complaint.complete";
    }
}