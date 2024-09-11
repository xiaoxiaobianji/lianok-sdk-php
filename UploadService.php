<?php declare(strict_types=1);

namespace lianok\core;

use lianok\core\client\UploadClient;
use lianok\core\config\UploadConfig;
use lianok\core\entity\AbstractUploadRequest;

class UploadService
{

    private $client;

    public static function build(UploadConfig $config): UploadService
    {
        $builder = UploadBuilder::config($config)->build();
        $service = new UploadService();
        $service->client = $builder;
        return $service;
    }

    public function execute(AbstractUploadRequest $request): string
    {
        if (empty($request->getFileName())) {
            $request->setFileName(basename($request->getFile()));
        }
        $content = $this->client->execute($request);
        return $content;
    }
}