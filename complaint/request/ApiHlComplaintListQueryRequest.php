<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintListQueryRequest extends AbstractDockingRequest
{

    public string $merchantNo;

    public string $beginTime;

    public string $endTime;

    public int $pageNo;

    public int $pageSize;

    public function getResource(): string
    {
        return "api.hl.complaint.list.query";
    }
}