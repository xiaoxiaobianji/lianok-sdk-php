<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankOrderConsumptionRequest extends AbstractDockingRequest
{

    public  $ip;

    /**
     * 对接方请求流水号，不可重复
     */
    public  $thirdOrderNo;

    /**
     * 收款人（卖方）
     */
    public  $payeeBusinessNo;

    /**
     * 付款人（买方）
     */
    public  $payerBusinessNo;

    /**
     * 付款金额
     */
    public  $amount;

    /**
     * 商品订单编号
     */
    public  $productOrderId;

    /**
     * 商品名称
     */
    public  $productName;

    /**
     * 商品订单金额
     */
    public  $productOrderAmount;

    /**
     * 商品数量
     */
    public $productCount;

    public  $remark;

    public function getResource(): string
    {
        return "api.hl.bank.order.consumption";
    }
}