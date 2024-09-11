<?php declare(strict_types=1);

namespace lianok\bill\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlOrderQueryApplyRequest extends AbstractDockingRequest
{

    /**
     * 下载对账单唯一标识，请求申请对单接口成功时返回
     */
    public  $downIdentification;

    public function getResource(): string
    {
        return "api.hl.order.queryApply";
    }
}