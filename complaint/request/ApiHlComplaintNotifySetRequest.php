<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlComplaintNotifySetRequest extends AbstractDockingRequest
{
    /**
     * 火脸商户ID
     */
    public string $merchantNo;

    /**
     * 投诉回调通知地址
     */
    public string $notifyUrl;

    public function getResource(): string
    {
        return "api.hl.complaint.notify.set";
    }
}