<?php declare(strict_types=1);

namespace lianok\pay\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHLOrderRefundOperationRequest extends AbstractDockingRequest
{

    /**
     * 火脸订单号，
     * 火脸订单号可在火脸服务商后台-订单管理-交易流水或商家后台-订单管理-交易流水中查看
     */
    public  $orderNo;
    /**
     * 对接商系统订单号，
     * 由对接商自行定义规范，最大长度不超过64
     */
    public  $businessOrderNo;
    /**
     * 对接商系统退单号，
     * 由对接商自行定义规范，最大长度不超过64
     */
    public  $businessRefundNo;
    /**
     * 渠道订单号，
     * 如乐刷订单号、随行付订单号等
     */
    public  $channelOrderNo;
    /**
     * 退款金额，
     * 单位为元，精确到0.01
     */
    public  $refundAmount;
    /**
     * 退单备注
     */
    public  $remark;
    /**
     * 退款密码（管理密码），
     * 退款密码限制6位，管理密码在商户初次注册时会以短信形式发送到注册手机号，也可在火脸商户后台点击右上角头像-修改密码的管理密码进行修改。在商户后台，员工管理中也支持配置、修改收银员的管理密码
     */
    public  $refundPassword;
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
     * 收银设备ID,
     * 火脸后台的收银设备ID为火脸后台录入的收银设备的设备ID。可在火脸服务商后台-设备管理或商家后台-设备管理中查看
     */
    public  $deviceNo;
    /**
     * 异步通知地址
     */
    public  $notifyUrl;

    public  $shareRefundMode;
    public  $refundDetails;

    public function getResource(): string
    {
        return "api.hl.order.refund.operation";
    }
}