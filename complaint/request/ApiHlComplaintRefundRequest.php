<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintRefundRequest extends AbstractDockingRequest
{

    public  $merchantNo;

    public  $huolianComplaintNo;

    public  $replyContent;

    public  $replyImage;

    public  $actionType;

    public  $operatorUserAccount;

    public  $remark;

    public function getResource(): string
    {
        return "api.hl.complaint.refund";
    }
}