<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintReplyRequest extends AbstractDockingRequest
{

    public string $merchantNo;

    public string $huolianComplaintNo;

    public string $operationLogNo;

    public string $replyToLogNo;

    public string $replyContent;

    public string $replyImage;

    public string $operatorUserAccount;

    public string $operatorUserName;

    public string $operateOrigin;

    public string $actionType;

    public function getResource(): string
    {
        return "api.hl.complaint.reply";
    }
}