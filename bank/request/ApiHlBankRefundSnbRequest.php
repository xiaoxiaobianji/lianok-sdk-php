<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankRefundSnbRequest extends AbstractDockingRequest
{

    /**
     * 客户真实ip
     */
    public  $ip;
    /**
     * 订单号
     */
    public  $orderNo;
    /**
     * 第三方退款订单号
     */
    public  $thirdRefundNo;
    /**
     * 退款金额
     */
    public  $amount;
    /**
     * 摘要
     */
    public  $remark;

    public function getResource(): string
    {
        return "api.hl.bank.refund.snb";
    }
}