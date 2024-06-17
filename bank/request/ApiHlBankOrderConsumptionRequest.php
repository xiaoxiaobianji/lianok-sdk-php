<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankOrderConsumptionRequest extends AbstractDockingRequest
{

    public string $ip;

    /**
     * 对接方请求流水号，不可重复
     */
    public string $thirdOrderNo;

    /**
     * 收款人（卖方）
     */
    public string $payeeBusinessNo;

    /**
     * 付款人（买方）
     */
    public string $payerBusinessNo;

    /**
     * 付款金额
     */
    public string $amount;

    /**
     * 商品订单编号
     */
    public string $productOrderId;

    /**
     * 商品名称
     */
    public string $productName;

    /**
     * 商品订单金额
     */
    public string $productOrderAmount;

    /**
     * 商品数量
     */
    public int $productCount;

    public string $remark;

    public function getResource(): string
    {
        return "api.hl.bank.order.consumption";
    }
}