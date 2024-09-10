<?php declare(strict_types=1);

namespace lianok\core\entity;

use lianok\core\utils\DateUtil;

abstract class AbstractDockingRequest
{

    /**
     * 具体业务的接口名称
     * @return string 开放平台资源名称
     */
    public abstract function getResource(): string;

    /**
     * 对接接口版本，默认 1
     */
    public  $versionNo = "1";

    /**
     * 当前时间
     * 格式：yyyyMMddHHmmss
     */
    public  $requestTime;

    /**
     * @param string $versionNo
     */
    public function setVersionNo(string $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return string 对接接口版本
     */
    public function getVersionNo(): string
    {
        return $this->versionNo;
    }

    /**
     * @param string $requestTime
     */
    public function setRequestTime(string $requestTime): void
    {
        $this->requestTime = $requestTime;
    }

    /**
     * @return ?string 时间戳
     */
    public function getRequestTime(): ?string
    {
        if (isset($this->requestTime)) {
            return $this->requestTime;
        }
        return null;
    }

    public function __construct()
    {
        $requestTime = DateUtil::getTimestamp();
        $this->requestTime = $requestTime;
    }
}