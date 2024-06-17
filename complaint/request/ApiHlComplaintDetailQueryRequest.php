<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintDetailQueryRequest extends AbstractDockingRequest
{

    public string $merchantNo;

    public string $huolianComplaintNo;

    public function getResource(): string
    {
        return "api.hl.complaint.detail.query";
    }
}