<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopUpdateShopShortNameRequest extends AbstractDockingRequest
{

    /**
     * 商户编号
     */
    public string $merchantNo;
    /**
     * 通道标识
     */
    public string $channelCode;
    /**
     * 异步通知地址
     * 审核状态有变化时会发出通知
     */
    public string $notifyUrl;
    /**
     * 商户简称
     */
    public string $merchantShortName;
    /**
     * 资料变更申请书
     */
    public string $changeFormImg;

    public function getResource(): string
    {
        return "api.hl.shop.updateShopShortName";
    }
}