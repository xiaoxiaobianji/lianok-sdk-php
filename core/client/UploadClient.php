<?php declare(strict_types=1);

namespace lianok\core\client;

use lianok\core\config\UploadConfig;
use lianok\core\entity\AbstractUploadRequest;
use lianok\core\utils\DateUtil;
use lianok\core\utils\HttpClient;

class UploadClient
{
    private $config;

    public function __construct(UploadConfig $config)
    {
        $this->config = $config;
    }

    public function execute(AbstractUploadRequest $request): string
    {
        if (empty($request->getRequestTime())) {
            $requestTime = DateUtil::getTimestamp();
            $request->setRequestTime($requestTime);
        }
        $imgInfo = getimagesize($request->getFile());
        $sign = $this->config->encrypt($request);
        $lianOkRequest = array(
            "authCode" => $this->config->authCode,
            "resource" => $request->getResource(),
            "versionNo" => $request->getVersionNo(),
            "requestTime" => $request->getRequestTime(),
            "sign" => $sign,
            "fileTag" => $request->getFileTag(),
            "file" => new \CURLFile($request->getFile(), $imgInfo['mime'], $request->getFileName())
        );
        return HttpClient::doUpload($this->config->url, $lianOkRequest);
    }
}