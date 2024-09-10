<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlMerchantWxpayConfigRequest extends AbstractDockingRequest
{

    /**
     * 商户ID
     * 火脸商户ID，在火脸服务商后台-商户列表或商家后台-门店列表，可查看该字段
     */
    public  $merchantNo;
    /**
     * 操作者账号
     * 收银员手机号或收银员登陆账号。手机号一般为商户注册火脸时的手机号。在火脸商户后台员工管理中，可配置收银员，收银员登陆支持手机号和账号登陆。可在商户后台-员工管理中查看所有收银员的手机号、登陆账号
     */
    public  $operatorAccount;
    /**
     * 微信小程序appId
     */
    public  $appid;
    /**
     * 渠道编号
     */
    public  $channelCode;

    public function getResource(): string
    {
        return "api.hl.merchant.wxpayconfig";
    }
}