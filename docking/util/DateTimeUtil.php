<?php

class DateTimeUtil
{
    public function getTimestamp()
    {
        date_default_timezone_set('Asia/Shanghai');
        return date('YmdHis', time());
    }

    private function getMillisecond()
    {
        list($usec, $sec) = explode(" ", microtime());
        $msec = round($usec * 1000);
        return $msec;
    }
}