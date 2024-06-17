<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintLogListQueryRequest extends AbstractDockingRequest
{

    public string $merchantNo;

    public string $huolianComplaintNo;

    public string $beginTime;

    public string $endTime;

    public int $pageNo;

    public int $pageSize;


    public function getResource(): string
    {
        return "api.hl.complaint.log.list.query";
    }
}