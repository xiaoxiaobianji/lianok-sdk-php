<?php declare(strict_types=1);

namespace lianok\complaint\request;

use lianok\core\entity\AbstractUploadRequest;

class ApiHlComplaintUploadImageRequest extends AbstractUploadRequest
{

    public function __construct()
    {
        parent::setFileTag("complaint");
    }

    public function getResource(): string
    {
        return "api.hl.complaint.upload.image";
    }
}