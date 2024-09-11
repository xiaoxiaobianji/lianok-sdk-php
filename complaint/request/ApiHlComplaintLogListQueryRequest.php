<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintLogListQueryRequest extends AbstractDockingRequest
{

    public  $merchantNo;

    public  $huolianComplaintNo;

    public  $beginTime;

    public  $endTime;

    public $pageNo;

    public $pageSize;


    public function getResource(): string
    {
        return "api.hl.complaint.log.list.query";
    }
}