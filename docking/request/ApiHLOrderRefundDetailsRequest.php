<?php declare(strict_types=1);

namespace lianok\pay\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHLOrderRefundDetailsRequest extends AbstractDockingRequest
{
    /**
     * 火脸退单号，
     * 火脸退单号可在火脸服务商后台-订单管理-交易流水或商家后台-订单管理-交易流水中查看。
     */
    public  $refundNo;
    /**
     * 渠道退单号
     * 如乐刷退单号、随行付退单号等
     */
    public  $channelRefundNo;
    /**
     * 对接商系统退单号，
     * 由对接商自行定义规范，最大长度不超过64
     * 与火脸退单号、渠道退单号请求3选1，都传优先判断火脸订单号正确性
     */
    public  $businessRefundNo;
    /**
     * 商户ID，
     * 火脸商户ID，在火脸服务商后台-商户列表或商家后台-门店列表，可查看该字段
     */
    public  $merchantNo;

    public function getResource(): string
    {
        return "api.hl.order.refund.details";
    }
}