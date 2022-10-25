<?php

class LianOkRequest
{
    public $authCode;
    public $resource;
    public $versionNo;
    public $sign;
    public $requestTime;
    public $params;

    /**
     * @return mixed 授权码
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @return mixed 资源名称
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @return mixed 版本号
     */
    public function getVersionNo()
    {
        return $this->versionNo;
    }

    /**
     * @return mixed 签名
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @return mixed 请求时间戳
     */
    public function getRequestTime()
    {
        return $this->requestTime;
    }

    /**
     * @return mixed 业务参数
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $authCode
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
    }

    /**
     * @param mixed $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * @param mixed $versionNo
     */
    public function setVersionNo($versionNo)
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @param mixed $requestTime
     */
    public function setRequestTime($requestTime)
    {
        $this->requestTime = $requestTime;
    }

    /**
     * @param mixed $sign
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

}