<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractUploadRequest;

class ApiHlShopUploadImageRequest extends AbstractUploadRequest
{
    public function getResource(): string
    {
        return "api.hl.shop.uploadImage";
    }
}