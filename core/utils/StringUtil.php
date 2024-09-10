<?php declare(strict_types=1);

namespace lianok\core\utils;

use lianok\core\entity\AbstractDockingRequest;

class StringUtil
{

    public const EMPTY = "";
    public const SPACE = " ";
    public const COLON = ":";
    public const COMMA = ",";
    public const BACK_QUOTE = "`";
    public const SINGLE_QUOTE = "'";
    public const DOUBLE_QUOTE = '"';
    public const CRLF = "\r\n";
    public const LF = "\n";

    /**
     * 移除字符串前缀
     */
    public static function removePrefix(string $str, string $prefix): string
    {
        if (substr($str, 0, strlen($prefix)) == $prefix) {
            $str = substr($str, strlen($prefix));
        }
        return $str;
    }

    /**
     * 修剪左右无效字符
     */
    public static function trim(string $str, string $chars = "\r\n "): string
    {
        return trim($str, $chars);
    }

    /**
     * 替换字符串 $str 中第一个匹配的子串 $toReplaced 为 $replacement
     */
    public static function replaceFirst(string $str, string $toReplaced, string $replacement): string
    {
        $position = strpos($str, $toReplaced);
        if ($position !== false) {
            $str = substr_replace($str, $replacement, $position, strlen($toReplaced));
        }
        return $str;
    }


    /**
     * 获取待签名字符串
     * @param $req AbstractDockingRequest 请求对象
     * @param $keyArr array 公共参数key
     * @param $valueArr array 公共参数value
     * @return string 待签名字符串
     */
    public static function getRequestSignContent(AbstractDockingRequest $req, array $keyArr, array $valueArr): string
    {
        foreach ($req as $key => $value) {
            if (strlen($key) === strlen(trim($key))) {
                //$req对象中的versionNo和requestTime已存在于$keyArr,不重复push到$keyArr
                if (in_array($key, $keyArr)) {
                    continue;
                }
                if ($value !== null) {
                    array_push($keyArr, $key);
                    array_push($valueArr, $value);
                }
            }
        }
        array_multisort($keyArr, $valueArr);
        $content = '';
        for ($i = 0; $i < count($keyArr); $i++) {
            $content = $content . $keyArr[$i] . '=' . $valueArr[$i] . '&';
        }
        return $content;
    }
}