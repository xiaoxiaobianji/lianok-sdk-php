<?php declare(strict_types=1);

namespace lianok\core\config;

use lianok\core\entity\AbstractDockingRequest;
use lianok\core\utils\StringUtil;

final class OpenConfig extends AbstractConfig
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
     * @return OpenConfig
     */
    public static function build(string $env, string $authCode, string $key): OpenConfig
    {
        if ($env === "test") {
            $url = "https://testapi.intranet.aduer.com/open/v1/api/biz/do";
        } else if ($env === "pre") {
            $url = "https://open.pre.lianok.com/open/v1/api/biz/do";
        } else {
            $url = "https://open.lianok.com/open/v1/api/biz/do";
        }
        return new OpenConfig($url, $authCode, $key);
    }

    public function encrypt(AbstractDockingRequest $request): string
    {
        $versionNo = $request->getVersionNo();
        $requestTime = $request->getRequestTime();
        $resource = $request->getResource();
        $keyArr = array("authCode", "resource", "requestTime", "versionNo");
        $valueArr = array($this->authCode, $resource, $requestTime, $versionNo);
        $strParams = StringUtil::getRequestSignContent($request, $keyArr, $valueArr);
        $strParams = strtolower($strParams);
        $strParams = $strParams . $this->key;
        return md5($strParams);
    }
}