<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankFirmBranchRequest extends AbstractDockingRequest
{
    /**
     * 真实ip
     */
    public string $ip;

    /**
     * 城市代码
     */
    public string $cityCode;

    /**
     * 联行号
     */
    public string $bankNo;

    /**
     * 关键字
     */
    public string $keyword;

    /**
     * 行别代码
     */
    public string $bankCategory;

    /**
     * 当前页码
     */
    public int $currentPage;

    /**
     * 每页条数
     */
    public int $pageSize;

    public function getResource(): string
    {
        return "api.hl.bank.firm.branch";
    }
}