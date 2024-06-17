<?php declare(strict_types=1);

namespace lianok\core\utils;

class DateUtil
{
    public static function getTimestamp()
    {
        date_default_timezone_set('Asia/Shanghai');
        return date('YmdHis', time());
    }
}