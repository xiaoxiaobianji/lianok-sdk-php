<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintRefundRequest extends AbstractDockingRequest
{

    public string $merchantNo;

    public string $huolianComplaintNo;

    public string $replyContent;

    public string $replyImage;

    public string $actionType;

    public string $operatorUserAccount;

    public string $remark;

    public function getResource(): string
    {
        return "api.hl.complaint.refund";
    }
}