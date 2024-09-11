<?php declare(strict_types=1);

namespace lianok\pay\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlOrderPayWeiqifuRequest extends AbstractDockingRequest
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
     * 商品描述,
     * 对应微信支付订单详情中“商品”字段，对应支付宝订单详情中“商品说明字段”
     */
    public  $subject;
    /**
     * 异步通知地址，若火脸平台已配置，则非必填
     */
    public  $notifyUrl;
    /**
     * 页面回跳地址，支付完成后跳转的页面地址
     */
    public  $pageNotifyUrl;
    /**
     * 付款方集合：上送不多于2个付款方信息，不传则不指定付款人。传了就指定对应的付款人付款
     */
    public  $payerOptions;
    /**
     * 商品集合串
     */
    public  $goods;
    /**
     * 支付类型
     * activeScan：主扫二维码支付
     * applet：小程序支付
     * app：App支付
     * h5：H5支付
     */
    public  $payType;
    /**
     * 支付完成前端回跳小程序路径
     */
    public  $mpPath;
    /**
     * 支付完成前端回跳小程序appid
     */
    public  $mpAppid;
    /**
     * 支付完成前端回跳小程序原始id
     */
    public  $mpUsername;
    /**
     * 支付完成前端回跳小程序
     */
    public  $mpUrlscheme;
    /**
     * 客户端用户IP
     */
    public  $clientIp;

    public function getResource(): string
    {
        return "api.hl.order.pay.weiqifu";
    }
}