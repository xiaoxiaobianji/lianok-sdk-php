<?php declare(strict_types=1);

namespace lianok\core\entity;

class LianOkRequest
{
    public string $authCode;

    public string $resource;

    public string $versionNo;

    public string $sign;

    public string $requestTime;

    public string $params;
}