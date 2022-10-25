<?php

class DockingConfig
{
    /**
     * @return string 对接请求地址
     */
    public function getUrl()
    {
        return "https://open.lianok.com/open/v1/api/biz/do";
    }

    /**
     * @return string 对接授权码
     */
    public function getAuthCode()
    {
        return "xxxxx";
    }

    /**
     * @return string 分配对接授权加密盐
     */
    public function getSalt()
    {
        return "xxxxx";
    }
}