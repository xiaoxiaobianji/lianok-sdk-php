<?php declare(strict_types=1);

namespace lianok\bill\request;

use lianok\core\entity\AbstractDockingRequest;


class ApiHlOrderAccountStatementApplyRequest extends AbstractDockingRequest
{

    /**
     * 下载对账日期
     * 格式：yyyy-MM-dd
     */
    public  $billDate;
    /**
     * 载对账日期开始时间
     */
    public  $billBeginTime;
    /**
     * 下载对账日期结束时间
     */
    public  $billEndTime;
    /**
     * 下载类型
     * 1：日统计数据
     * 2：收款明细数据
     * 3：退款明细数据
     * 4：分账明细对账单
     * 5：延时结算订单冻资明细
     * 6：延时结算确认订单明细
     * 7：延时结算退款订单明细
     */
    public $downType;
    /**
     * 商户号
     */
    public  $merchantNo;

    public function getResource(): string
    {
        return "api.hl.order.accountStatementApply";
    }
}