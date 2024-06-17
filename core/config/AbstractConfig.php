<?php declare(strict_types=1);

namespace lianok\core\config;

use lianok\core\entity\AbstractDockingRequest;

abstract class AbstractConfig
{
    /**
     * @var string $url
     */
    public string $url;
    /**
     * @var string $authCode
     */
    public string $authCode;
    /**
     * @var string $key
     */
    public string $key;

    /**
     * @param string $url 请求地址
     * @param string $authCode 授权码
     * @param string $key 秘钥
     */
    public function __construct(string $url, string $authCode, string $key)
    {
        $this->url = $url;
        $this->authCode = $authCode;
        $this->key = $key;
    }

    abstract public function encrypt(AbstractDockingRequest $request): string;
}