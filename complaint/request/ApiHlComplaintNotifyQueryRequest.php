<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintNotifyQueryRequest extends AbstractDockingRequest
{

    public  $merchantNo;

    public function getResource(): string
    {
        return "api.hl.complaint.notify.query";
    }
}