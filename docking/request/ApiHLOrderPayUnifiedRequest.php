<?php declare(strict_types=1);

namespace lianok\pay\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHLOrderPayUnifiedRequest extends AbstractDockingRequest
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
     * 收银设备ID,
     * 火脸后台的收银设备ID为火脸后台录入的收银设备的设备ID。可在火脸服务商后台-设备管理或商家后台-设备管理中查看
     */
    public  $deviceNo;
    /**
     * 异步通知地址，若火脸平台已配置，则非必填
     */
    public  $notifyUrl;
    /**
     * 花呗分期数,
     * 支持3、6、12期
     * 银盛、支付宝直连通道传入花呗分期数需与官方申请开通才可以传入，银盛通道仅支持6期、12期
     */
    public  $stageNum;
    /**
     * 商品描述,
     * 对应微信支付订单详情中“商品”字段，对应支付宝订单详情中“商品说明字段”
     */
    public  $subject;
    /**
     * 支付方式
     * 不传默认支持所有支付方式，传则只生成对应支付方式的支付二维码跳转链接
     */
    public  $payWay;
    /**
     * 限制卡类型，枚举值
     * 取值范围：
     * 1 限定不能使用信用卡支付
     * 2 限制花呗支付
     * 3 限制花呗分期
     * 4 限制所有的信用支付
     */
    public  $limitPay;
    /**
     * 订单失效时间，
     * 单位为秒，精确到个位
     * 失效时间范围60秒~600秒，建议传60的整倍数
     * 火脸默认订单失效时间为30分钟
     */
    public  $payExpireTime;
    /**
     * 支付二维码链接失效时间，
     * 单位为秒，精确到个位
     * 最长不能超过600秒
     * 不填默认300秒
     */
    public  $payUrlExpireTime;
    /**
     * 订单优惠标记，
     * 订单优惠标记，透传给微信
     * 创建券时如果添加goodsTag标记，在传入goodsTag参数才可以核销对应券
     */
    public  $goodsTag;
    /**
     * 商品详情
     * 按微信单品优惠券格式传递透传给微信;请做UrlEncode
     * 无单品券优惠信息请不要传此字段
     */
    public  $goodsInfo;
    /**
     * 订单分账标识
     * 0不分账
     * 1分账
     * 2延时结算
     * 不传默认为普通交易
     */
    public  $shareMarkFlag;
    /**
     * 支付成功后跳转地址
     * 当消费者订单支付成功后可跳转至该地址
     */
    public  $callBackUrl;
    /**
     * 客户端用户IP
     */
    public  $clientIp;

    public function getResource(): string
    {
        return "api.hl.order.pay.unified";
    }
}