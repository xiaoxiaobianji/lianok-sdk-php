<?php declare(strict_types=1);

namespace lianok\pay\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHLOrderPayAppletRequest extends AbstractDockingRequest
{
    /**
     * 商户ID
     * 火脸商户ID，在火脸服务商后台-商户列表或商家后台-门店列表，可查看该字段
     */
    public  $merchantNo;
    /**
     * 操作者账号
     * 收银员手机号或收银员登陆账号。手机号一般为商户注册火脸时的手机号。在火脸商户后台员工管理中，可配置收银员，收银员登陆支持手机号和账号登陆。可在商户后台-员工管理中查看所有收银员的手机号、登陆账号。
     */
    public  $operatorAccount;
    /**
     * 对接商系统订单号
     * 由对接商自行定义规范，最大长度不超过64
     */
    public  $businessOrderNo;
    /**
     * 订单支付金额
     * 单位为元，精确到0.01
     */
    public  $payAmount;
    /**
     * 支付类型
     */
    public  $payWay;
    /**
     * 微信小程序AppId
     * payWay等于wechat时必填
     */
    public  $appId;
    /**
     * 微信用户标识
     * payWay等于wechat时必填
     */
    public  $openId;
    /**
     * 支付宝用户标识
     * payWay等于alipay时必填
     */
    public  $userId;
    /**
     * 收银设备ID
     * 火脸后台的收银设备ID为火脸后台录入的收银设备的设备ID。可在火脸服务商后台-设备管理或商家后台-设备管理中查看
     */
    public  $deviceNo;
    /**
     * 订单备注
     */
    public  $remark;
    /**
     * 异步通知地址
     * 上传参数交易成功会把接口推送到此参数，未上传按火脸平台配置推送
     */
    public  $notifyUrl;
    /**
     * 商品描述
     * 对应微信支付订单详情中“商品”字段，对应支付宝订单详情中“商品说明字段”
     */
    public  $subject;
    /**
     * 订单失效时间
     * 单位为秒，精确到个位
     * 火脸默认订单失效时间为30分钟,失效时间需大于60秒
     */
    public  $payExpireTime;
    /**
     * 花呗分期数
     * 支持3、6、12期
     * 银盛、支付宝直连通道传入花呗分期数需与官方申请开通才可以传入，银盛通道仅支持6期、12期
     */
    public  $stageNum;
    /**
     * 订单优惠标记
     * 订单优惠标记，透传给微信
     * 创建券时如果添加goodsTag标记，在传入goodsTag参数才可以核销对应券
     */
    public  $goodsTag;
    /**
     * 商品详情
     * 按微信单品优惠券格式传递透传给微信;请做UrlEncode
     * 无单品券优惠信息请不要传此字段
     */
    public  $goods_info;
    /**
     * 订单分账标识
     * 0不分账
     * 1分账
     * 2延时结算
     * 不传默认为普通交易
     */
    public  $shareMarkFlag;
    /**
     * 客户端用户IP
     */
    public  $clientIp;

    public function getResource(): string
    {
        return "api.hl.order.pay.applet";
    }
}