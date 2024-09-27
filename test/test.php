<?php

use lianok\core\LianokService;
use lianok\core\utils\DateUtil;
use lianok\merchant\request\ApiHlMerchantWxpayConfigRequest;
use lianok\pay\request\ApiHLOrderCloseRequest;
use lianok\pay\request\ApiHLOrderPayAppletRequest;
use lianok\pay\request\ApiHLOrderPayBarcodeRequest;
use lianok\pay\request\ApiHLOrderPayDetailsRequest;
use lianok\pay\request\ApiHLOrderPayUnifiedRequest;
use lianok\pay\request\ApiHLOrderRefundDetailsRequest;
use lianok\pay\request\ApiHLOrderRefundOperationRequest;

echo "1";
require_once '../core/entity/AbstractDockingRequest.php';
require_once '../core/entity/LianOkRequest.php';
require_once '../core/entity/ResponseBase.php';
require_once '../core/entity/AbstractUploadRequest.php';
echo "2";

require_once '../core/config/AbstractConfig.php';
require_once '../core/config/OpenConfig.php';
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
require_once '../docking/request/ApiHLOrderPayAppletRequest.php';
require_once '../merchant/request/ApiHlMerchantWxpayConfigRequest.php';
require_once '../docking/request/ApiHLOrderCloseRequest.php';
require_once '../docking/request/ApiHLOrderPayBarcodeRequest.php';
require_once '../docking/request/ApiHLOrderPayDetailsRequest.php';
require_once '../docking/request/ApiHLOrderPayUnifiedRequest.php';
require_once '../docking/request/ApiHLOrderRefundDetailsRequest.php';
require_once '../docking/request/ApiHLOrderRefundOperationRequest.php';

echo "7";

$auth = "1423254150000001";
$key = "hOnHeN2daY";

$config = \lianok\core\config\OpenConfig::build("test", $auth, $key);
$client = LianokService::build($config);

$merchant = '102186';
$account = '18555551939';

echo "<br/><br/>请阅读接口文档,不同业务接口有不同签名算法,请根据接口文档说明选用合适的配置类, <br/>"
    ."接口文档里签名算法要求为签名算法1.0的api,请使用OpenConfig类进行配置,<br/>"
    ."接口文档里签名算法要求为签名算法2.0的api,请使用EntryConfig类进行配置,<br/>"
    ."上传图片,请使用UploadConfig类进行配置<br/>"
    ."<br/><br/>";
echo "<br/>";
echo "小程序支付接口:";
ApiHLOrderPayAppletTest($client, $merchant, $account);
echo "<br/>";

echo "<br/>";
echo "被扫支付接口:";
ApiHLOrderPayBarcodeTest($client, $merchant, $account);
echo "<br/>";

echo "<br/>";
echo "退款接口:";
ApiHLOrderRefundOperationTest($client, $merchant, $account, "91024255130000001");
echo "<br/>";

echo "<br/>";
echo "订单详情查询接口:";
ApiHLOrderPayDetailsTest($client, $merchant, "91024255130000001");
echo "<br/>";

echo "<br/>";
echo "聚合支付接口:";
ApiHLOrderPayUnifiedTest($client, $merchant, $account);
echo "<br/>";

echo "<br/>";
echo "订单关单接口:";
ApiHLOrderCloseTest($client, $merchant, "91024255130000001");
echo "<br/>";

echo "<br/>";
echo "退款详情查询接口:";
ApiHLOrderRefundDetailsTest($client, $merchant);
echo "<br/>";

echo "<br/>";
echo "退款详情查询接口:";
ApiHLOrderRefundDetailsTest($client, $merchant);
echo "<br/>";

echo "<br/>";
echo "微信配置查询接口:";
ApiHLMerchantWxpayConfigTest($client, $merchant, $account);
echo "<br/>";


function ApiHLOrderPayBarcodeTest($client, $merchant, $account)
{
    $request = new ApiHLOrderPayBarcodeRequest();
    $request->businessOrderNo = DateUtil::getTimestamp();
    $request->deviceNo = DateUtil::getTimestamp();
    $request->merchantNo = $merchant;
    $request->operatorAccount = $account;
    $request->payAmount = 0.01;
    // 付款码
    $request->payBarcode = "1319666266445252xx";
    $request->remark = "remark0";

    $response = $client->execute($request);
    print $response;
}

function ApiHLOrderRefundOperationTest($client, $merchant, $account, $orderNo)
{
    $request = new ApiHLOrderRefundOperationRequest();
    $request->businessRefundNo = DateUtil::getTimestamp();
    $request->orderNo = $orderNo;
    $request->refundAmount = 0.01;
    // 退款密码
    $request->refundPassword = "123456";
    $request->operatorAccount = $account;
    $request->merchantNo = $merchant;
    $request->remark = "remark1";

    $response = $client->execute($request);
    print $response;
}

function ApiHLOrderPayDetailsTest($client, $merchant, $orderNo)
{
    $request = new ApiHLOrderPayDetailsRequest();
    $request->orderNo = $orderNo;
    $request->merchantNo = $merchant;

    $response = $client->execute($request);
    print $response;
}

function ApiHLOrderPayUnifiedTest($client, $merchant, $account){
    $request = new ApiHLOrderPayUnifiedRequest();
    $request->businessOrderNo = DateUtil::getTimestamp();
    $request->deviceNo = DateUtil::getTimestamp();
    $request->merchantNo = $merchant;
    $request->operatorAccount = $account;
    $request->payWay = 'wechat';
    $request->payAmount = 0.01;
    $request->remark = "remark2";

    $response = $client->execute($request);
    print $response;
}

function ApiHLOrderCloseTest($client, $merchant, $orderNo)
{
    $request = new ApiHLOrderCloseRequest();
    $request->merchantNo = $merchant;
    $request->orderNo = $orderNo;

    $response = $client->execute($request);
    print $response;
}

function ApiHLOrderRefundDetailsTest($client, $merchant)
{
    $request = new ApiHLOrderRefundDetailsRequest();
    $request->merchantNo = $merchant;
    $request->refundNo = "92023297100000005";

    $response = $client->execute($request);
    print $response;
}

function ApiHLMerchantWxpayConfigTest($client, $merchant, $account){
    $request = new ApiHLMerchantWxpayConfigRequest();
    $request->merchantNo = $merchant;
    $request->operatorAccount = $account;
    $request->appid = "wx1234567890123459";
    $request->channelCode = 'suiXingFu';

    $response = $client->execute($request);
    print $response;
}

function ApiHLOrderPayAppletTest($client, $merchant, $account){
    $request = new ApiHLOrderPayAppletRequest();
    $request->merchantNo = $merchant;
    $request->operatorAccount = $account;
    $request->payWay = 'alipay';
    $request->businessOrderNo =DateUtil::getTimestamp();
    $request->deviceNo = DateUtil::getTimestamp();
    $request->payAmount=0.01;
    $request->userId="123123";
    $request->openId = "123456";
    $request->appId="wx123123";

    $response = $client->execute($request);
    print $response;
}