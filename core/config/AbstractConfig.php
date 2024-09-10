<?php declare(strict_types=1);

namespace lianok\core\config;

use lianok\core\entity\AbstractDockingRequest;

abstract class AbstractConfig
{
    /**
     * @var string $url
     */
    public  $url;
    /**
     * @var string $authCode
     */
    public  $authCode;
    /**
     * @var string $key
     */
    public  $key;

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