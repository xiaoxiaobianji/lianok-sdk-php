<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintListQueryRequest extends AbstractDockingRequest
{

    public  $merchantNo;

    public  $beginTime;

    public  $endTime;

    public $pageNo;

    public $pageSize;

    public function getResource(): string
    {
        return "api.hl.complaint.list.query";
    }
}