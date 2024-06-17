<?php declare(strict_types=1);

namespace lianok\pay\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHLOrderPayDetailsRequest extends AbstractDockingRequest
{

    /**
     * 火脸订单号，
     * 火脸订单号可在火脸服务商后台-订单管理-交易流水或商家后台-订单管理-交易流水中查看
     */
    public string $orderNo;
    /**
     * 商户ID，
     * 火脸商户ID，在火脸服务商后台-商户列表或商家后台-门店列表，可查看该字段
     */
    public string $merchantNo;
    /**
     * 渠道订单号，
     * 如乐刷订单号、随行付订单号等
     */
    public string $channelOrderNo;
    /**
     * 对接商系统订单号，
     * 由对接商自行定义规范，最大长度不超过64
     * 与火脸订单号、渠道订单号请求3选1，都传优先以火脸订单号请求
     */
    public string $businessOrderNo;

    public function getResource(): string
    {
        return "api.hl.order.pay.details";
    }
}