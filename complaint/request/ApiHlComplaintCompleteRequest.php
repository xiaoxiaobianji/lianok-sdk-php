<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintCompleteRequest extends AbstractDockingRequest
{

    public string $merchantNo;

    public string $huolianComplaintNo;

    public string $operatorUserAccount;

    public function getResource(): string
    {
        return "api.hl.complaint.complete";
    }
}