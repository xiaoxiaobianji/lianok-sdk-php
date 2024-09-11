<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintReplyRequest extends AbstractDockingRequest
{

    public  $merchantNo;

    public  $huolianComplaintNo;

    public  $operationLogNo;

    public  $replyToLogNo;

    public  $replyContent;

    public  $replyImage;

    public  $operatorUserAccount;

    public  $operatorUserName;

    public  $operateOrigin;

    public  $actionType;

    public function getResource(): string
    {
        return "api.hl.complaint.reply";
    }
}