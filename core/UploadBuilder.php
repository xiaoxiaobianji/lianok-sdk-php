<?php declare(strict_types=1);

namespace lianok\core;

use lianok\core\client\UploadClient;
use lianok\core\config\UploadConfig;

class UploadBuilder
{

    private $config;

    public static function config(UploadConfig $config): UploadBuilder
    {
        $builder = new UploadBuilder();
        $builder->config = $config;
        return $builder;
    }

    public function build(): UploadClient
    {
        return new UploadClient($this->config);
    }
}