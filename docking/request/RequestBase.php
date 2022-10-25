<?php

class RequestBase
{
    private $versionNo = "1";

    /**
     * @param string $versionNo
     */
    public function setVersionNo($versionNo)
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return string 接口版本
     */
    public function getVersionNo()
    {
        return $this->versionNo;
    }
}