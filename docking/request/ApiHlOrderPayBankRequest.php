<?php declare(strict_types=1);

namespace lianok\pay\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlOrderPayBankRequest extends AbstractDockingRequest
{

    /**
     * 对接商系统订单号
     */
    public  $businessOrderNo;
    /**
     * 订单支付金额
     */
    public  $payAmount;
    /**
     * 订单备注
     */
    public  $remark;
    /**
     * 商户ID
     */
    public  $merchantNo;
    /**
     * 操作者账号
     */
    public  $operatorAccount;
    /**
     * 收银设备ID
     */
    public  $deviceNo;
    /**
     * 异步通知地址
     */
    public  $notifyUrl;
    /**
     * 商品名称
     */
    public  $subject;
    /**
     * 支付方式
     * 支持的类型，b2c_bank，b2b_bank，quick_pay
     */
    public  $payWay;
    /**
     * 银行卡绑定的手机号
     */
    public  $phone;
    /**
     * 订单失效时间
     */
    public int $payExpireTime;
    /**
     * 支付成功页面跳转地址
     */
    public  $pageNotifyUrl;
    /**
     * 银行卡信息
     */
    public  $bankCard;
    /**
     * 银行卡类型
     */
    public  $cardType;

    public function getResource(): string
    {
        return "api.hl.order.pay.bank";
    }
}