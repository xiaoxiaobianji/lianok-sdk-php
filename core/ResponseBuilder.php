<?php declare(strict_types=1);

namespace lianok\core;

use lianok\core\client\ResponseClient;
use lianok\core\config\AbstractConfig;

/**
 * 请求对象
 */
class ResponseBuilder
{
    private $config;

    public static function config(AbstractConfig $config): ResponseBuilder
    {
        $builder = new ResponseBuilder();
        $builder->config = $config;
        return $builder;
    }

    public function build(): ResponseClient
    {
        return new ResponseClient($this->config);
    }
}