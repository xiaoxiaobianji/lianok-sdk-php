<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankFirmBranchRequest extends AbstractDockingRequest
{
    /**
     * 真实ip
     */
    public  $ip;

    /**
     * 城市代码
     */
    public  $cityCode;

    /**
     * 联行号
     */
    public  $bankNo;

    /**
     * 关键字
     */
    public  $keyword;

    /**
     * 行别代码
     */
    public  $bankCategory;

    /**
     * 当前页码
     */
    public $currentPage;

    /**
     * 每页条数
     */
    public $pageSize;

    public function getResource(): string
    {
        return "api.hl.bank.firm.branch";
    }
}