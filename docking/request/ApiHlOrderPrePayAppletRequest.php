<?php declare(strict_types=1);

namespace lianok\pay\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlOrderPrePayAppletRequest extends AbstractDockingRequest
{

    /**
     * 对接商系统订单号，
     * 由对接商自行定义规范，最大长度不超过64
     */
    public  $businessOrderNo;
    /**
     * 订单支付金额，
     * 单位为元，精确到0.01
     */
    public  $payAmount;
    /**
     * 订单备注
     */
    public  $remark;
    /**
     * 商户ID，
     * 火脸商户ID，在火脸服务商后台-商户列表或商家后台-门店列表，可查看该字段
     */
    public  $merchantNo;
    /**
     * 操作者账号，
     * 收银员手机号。手机号一般为商户注册火脸时的手机号。在火脸商户后台员工管理中，可配置收银员，收银员登陆支持手机号登陆。可在商户后台-员工管理中查看所有收银员的手机号。
     */
    public  $operatorAccount;
    /**
     * 异步通知地址
     */
    public  $notifyUrl;
    /**
     * 支付方式
     */
    public  $payWay;
    /**
     * 商品描述
     */
    public  $subject;
    /**
     * 订单失效时间
     */
    public  $payExpireTime;
    /**
     * 订单优惠标记
     */
    public  $goodsTag;
    /**
     * 单品券核销时商品信息
     */
    public  $goodsInfo;
    /**
     * 订单分账标识
     * 1-分账,2-延时结算
     */
    public  $shareMarkFlag;
    /**
     * 客户端用户IP
     */
    public  $clientIp;

    public function getResource(): string
    {
        return "api.hl.order.pre.pay.applet";
    }
}