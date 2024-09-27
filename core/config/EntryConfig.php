<?php declare(strict_types=1);

namespace lianok\core\config;

use lianok\core\entity\AbstractDockingRequest;

final class EntryConfig extends AbstractConfig
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
     * @return EntryConfig
     */
    public static function build(string $env, string $authCode, string $key): EntryConfig
    {
        if ($env === "test") {
            $url = "https://testapi.intranet.aduer.com/openapi/v2/api/biz/do";
        } else if ($env === "pre") {
            $url = "https://entry.pre.lianok.com/openapi/v2/api/biz/do";
        } else {
            $url = "https://entry.lianok.com/openapi/v2/api/biz/do";
        }
        return new EntryConfig($url, $authCode, $key);
    }

    public function encrypt(AbstractDockingRequest $request): string
    {
        $versionNo = $request->getVersionNo();
        $requestTime = $request->getRequestTime();
        $resource = $request->getResource();
        $keyArr = array("authCode", "params", "resource", "requestTime", "versionNo");
        //签名处理:request(即params对象)排除requestTime和versionNo字段后再转换成json
        unset($request->requestTime);
        unset($request->versionNo);

        $valueArr = array($this->authCode, json_encode($request), $resource, $requestTime, $versionNo);
        array_multisort($keyArr, $valueArr);
        $content = '';
        for ($i = 0; $i < count($keyArr); $i++) {
            $content = $content . $keyArr[$i] . '=' . $valueArr[$i] . '&';
        }
        $content = strtolower($content) . $this->key;
        return md5($content);
    }
}