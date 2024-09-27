<?php

use lianok\core\LianokService;
use lianok\core\UploadService;
use lianok\merchant\request\ApiHlShopDetailRequest;

echo "1";
require_once '../core/entity/AbstractDockingRequest.php';
require_once '../core/entity/LianOkRequest.php';
require_once '../core/entity/ResponseBase.php';
require_once '../core/entity/AbstractUploadRequest.php';
echo "2";

require_once '../core/config/AbstractConfig.php';
require_once '../core/config/EntryConfig.php';
require_once '../core/config/UploadConfig.php';
echo "3";

require_once '../core/client/ResponseClient.php';
require_once '../core/client/UploadClient.php';
echo "4";

require_once '../core/utils/StringUtil.php';
require_once '../core/utils/DateUtil.php';
require_once '../core/utils/HttpClient.php';
echo "5";

require_once '../core/ResponseBuilder.php';
require_once '../core/UploadBuilder.php';
echo "6";

require_once '../LianokService.php';
require_once '../UploadService.php';
echo "test merchant api";

require_once '../merchant/request/ApiHlShopDetailRequest.php';

$auth = "授权码authCode";
$key = "盐";

echo "<br/><br/>请阅读接口文档,不同业务接口有不同签名算法,请根据接口文档说明选用合适的配置类, <br/>"
."接口文档里签名算法要求为签名算法1.0的api,请使用OpenConfig类进行配置,<br/>"
."接口文档里签名算法要求为签名算法2.0的api,请使用EntryConfig类进行配置,<br/>"
."上传图片,请使用UploadConfig类进行配置<br/>"
."<br/><br/>";

#商户入件相关接口使用EntryConfig
$config = \lianok\core\config\EntryConfig::build("test", $auth, $key);
$client = LianokService::build($config);

echo "<br/><br/>";
echo "门店详情接口:";
ApiHLShopDetailTest($client);
echo "<br/><br/>";

function ApiHLShopDetailTest($client){
    $request = new ApiHlShopDetailRequest();
    $request->merchantNo = "1*****";
    $request->channelCode = "leShua";
    $response = $client->execute($request);
    print $response;
}

