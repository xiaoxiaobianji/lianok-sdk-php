<?php declare(strict_types=1);

namespace lianok\core\entity;

use lianok\core\utils\StringUtil;

class ResponseBase
{

    public $code;

    public  $message;

    public $status;

    public $body;

    public function __construct($response)
    {
        if ($response === false) {
            $this->code = -1;
            $this->status = 500;
        } else {
            $temp = $response ? json_decode($response, true) : [];

            list($rawHeaders, $rawBody) = explode(StringUtil::CRLF . StringUtil::CRLF, $response);

            $lines = explode(StringUtil::CRLF, $rawHeaders);
            for ($i = 0; $i < count($lines); $i++) {
                $line = $lines[$i];
                $items = explode(StringUtil::SPACE, $line);
                $name = StringUtil::trim($items[1]);
                if ($name === "code") {
                    $this->code = (int)StringUtil::trim($items[1]);
                } else if ($name === "status") {
                    $this->status = (int)StringUtil::trim($items[1]);
                } else if ($name === "message") {
                    $this->message = StringUtil::trim($items[1]);
                } else if ($name === "data") {
                    $this->body = $items[1];
                }
            }
        }
    }

}