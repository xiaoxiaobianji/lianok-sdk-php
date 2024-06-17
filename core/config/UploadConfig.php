<?php declare(strict_types=1);

namespace lianok\core\config;

use lianok\core\entity\AbstractDockingRequest;

final class UploadConfig extends AbstractConfig
{

    /**
     * @param string $url 请求地址
     * @param string $authCode 授权码
     * @param string $key 秘钥
     */
    private function __construct(string $url, string $authCode, string $key)
    {
        parent::__construct($url, $authCode, $key);
    }

    /**
     * @param string $env 环境变量[test|pre|publish]
     * @param string $authCode 授权码
     * @param string $key 秘钥
     * @return UploadConfig
     */
    public static function build(string $env, string $authCode, string $key): UploadConfig
    {
        if ($env === "test") {
            $url = "https://testapi.intranet.aduer.com/openapi/v2/api/biz/file";
        } else if ($env === "pre") {
            $url = "https://entry.pre.lianok.com/openapi/v2/api/biz/file";
        } else {
            $url = "https://entry.lianok.com/openapi/v2/api/biz/file";
        }
        return new UploadConfig($url, $authCode, $key);
    }

    public function encrypt(AbstractDockingRequest $request): string
    {
        $versionNo = $request->getVersionNo();
        $requestTime = $request->getRequestTime();
        $resource = $request->getResource();
        $content = 'authCode=' . $this->authCode . '&requestTime=' . $requestTime . '&resource=' . $resource . '&versionNo=' . $versionNo;
        $content = strtolower($content) . '&' . $this->key;
        return md5($content);
    }
}