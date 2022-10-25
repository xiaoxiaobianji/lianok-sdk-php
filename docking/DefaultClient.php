<?php

require_once 'DockingConfig.php';
require_once 'LianOkRequest.php';
require_once 'util/HttpUtil.php';
require_once 'util/DateTimeUtil.php';
require_once 'request/RequestBase.php';

class DefaultClient
{
    private $url;
    private $authCode;
    private $salt;

    function __construct()
    {
        if (func_num_args() == 3) {
            $this->url = func_get_arg(0);
            $this->authCode = func_get_arg(1);
            $this->salt = func_get_arg(2);
        } else {
            $dockingConfig = new DockingConfig();
            $this->url = $dockingConfig->getUrl();
            $this->authCode = $dockingConfig->getAuthCode();
            $this->salt = $dockingConfig->getSalt();
        }
    }

    /**
     * @throws Exception
     */
    public function execute($request)
    {
        $dateUtil = new DateTimeUtil();
        $requestTime = $dateUtil->getTimestamp();
        $sign = $this->encrypt($request, $requestTime);
        $lianOkRequest = new LianOkRequest();
        $lianOkRequest->setAuthCode($this->authCode);
        $lianOkRequest->setResource($request->getApiName());
        $lianOkRequest->setRequestTime($requestTime);
        $lianOkRequest->setVersionNo($request->getVersionNo());
        $lianOkRequest->setSign($sign);
        $lianOkRequest->setParams(json_encode($this->remove_null_values($request)));
        $content = json_encode($this->remove_null_values($lianOkRequest));
        $http = new HttpUtil();
        $response = $http->doPost($this->url, $content);
        return $response;
    }

    /**
     * 方法请求签名
     *
     * @throws Exception 请求对象参数异常
     */
    private function encrypt($request, $requestTime)
    {
        if (!($request instanceof RequestBase)) {
            throw new \Exception("请求参数对象不符合规则", 0);
        }
        $keyArr = array("authCode", "resource", "requestTime", "versionNo");
        $valArr = array($this->authCode, $request->getApiName(), $requestTime, $request->getVersionNo());
        $strParams = $this->getRequestSignContent($request, $keyArr, $valArr);
        $strParams = strtolower($strParams);
        $strParams = $strParams . $this->salt;
        return md5($strParams);
    }

    /**
     * 排查null值
     * @param $a
     * @return stdClass
     */
    private function remove_null_values($a)
    {
        $ret = (is_array($a) ? array() : new stdClass());
        foreach ($a as $k => $v) {
            if (is_array($v) || is_object($v)) {
                if (is_object($ret))
                    $ret->$k = $this->remove_null_values($v);
                else
                    $ret[$k] = $this->remove_null_values($v);
            } elseif (!is_null($v)) {
                if (is_object($ret))
                    $ret->$k = $v;
                else
                    $ret[$k] = $v;
            }
        }
        return $ret;
    }

    /**
     * 获取待签名字符串
     * @param $req 请求对象
     * @param $keyArr 公共参数key
     * @param $valueArr 公共参数value
     * @return string 待签名字符串
     */
    function getRequestSignContent($req, $keyArr, $valueArr)
    {
        foreach (((array)$req) as $key => $value) {
            if (strlen($key) === strlen(trim($key))) {
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