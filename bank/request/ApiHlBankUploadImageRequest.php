<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractUploadRequest;

class ApiHlBankUploadImageRequest extends AbstractUploadRequest
{
    public function __construct()
    {
        parent::setFileTag("bank");
    }

    public function getResource(): string
    {
        return "api.hl.bank.upload.image";
    }
}