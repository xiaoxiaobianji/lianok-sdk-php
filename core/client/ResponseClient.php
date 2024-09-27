<?php declare(strict_types=1);

namespace lianok\core\client;

use lianok\core\config\AbstractConfig;
use lianok\core\entity\AbstractDockingRequest;
use lianok\core\entity\LianOkRequest;
use lianok\core\utils\DateUtil;
use lianok\core\utils\HttpClient;

class ResponseClient
{
    private $config;

    public function __construct(AbstractConfig $config)
    {
        $this->config = $config;
    }

    public function execute(AbstractDockingRequest $request): string
    {
        return $this->doRequest($request);
    }

    /**
     * @throws \Exception curl_error
     */
    private function doRequest(AbstractDockingRequest $request): string
    {
        if (empty($request->getRequestTime())) {
            $requestTime = DateUtil::getTimestamp();
            $request->setRequestTime($requestTime);
        }
        $reqTime = $request->getRequestTime();
        $versionNo = $request->getVersionNo();
        $sign = $this->config->encrypt($request);
        $lianOkRequest = new LianOkRequest();
        $lianOkRequest->authCode = $this->config->authCode;
        $lianOkRequest->resource = $request->getResource();
        $lianOkRequest->requestTime = $reqTime;
        $lianOkRequest->versionNo = $versionNo;
        $lianOkRequest->sign = $sign;
        $noneNullParamData = [];
        foreach ($request as $key => $value) {
            if ($value !== null) {
                $noneNullParamData[$key] = $value;
            }
        }
        unset($noneNullParamData["versionNo"]);
        unset($noneNullParamData["requestTime"]);
        $lianOkRequest->params = json_encode($noneNullParamData);
        return HttpClient::doPost($this->config->url, json_encode($lianOkRequest));
    }
}