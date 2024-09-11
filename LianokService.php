<?php declare(strict_types=1);

namespace lianok\core;

use lianok\core\client\ResponseClient;
use lianok\core\config\AbstractConfig;
use lianok\core\entity\AbstractDockingRequest;

class LianokService
{
    private $client;

    public static function build(AbstractConfig $config): LianokService
    {
        $builder = ResponseBuilder::config($config)->build();
        $service = new LianokService();
        $service->client = $builder;
        return $service;
    }

    public function execute(AbstractDockingRequest $request): string
    {
        $content = $this->client->execute($request);
        return $content;
    }
}