<?php

require_once '../docking/DefaultClient.php';
require_once '../docking/request/ApiHLOrderAccountStatementApplyReuqest.php';
require_once '../docking/request/ApiHLOrderCloseRequest.php';
require_once '../docking/request/ApiHLOrderPayAppletRequest.php';
require_once '../docking/request/ApiHLOrderPayBarcodeRequest.php';
require_once '../docking/request/ApiHLOrderPayDetailsRequest.php';
require_once '../docking/request/ApiHLOrderPayUnifiedRequest.php';
require_once '../docking/request/ApiHLOrderQueryApplyRequest.php';
require_once '../docking/request/ApiHLOrderRefundDetailsRequest.php';
require_once '../docking/request/ApiHLOrderRefundOperationRequest.php';
require_once '../docking/request/ApiHLMerchantWxpayConfigRequest.php';
require_once '../docking/request/ApiHLMerchantSwitchChannelRequest.php';
require_once '../docking/enum/PayStyleEnum.php';
require_once '../docking/enum/PayWayEnum.php';
require_once '../docking/enum/ChannelEnum.php';

$client = new DefaultClient();
$merchant = '751403';
$account = '13777777777';

//ApiHLOrderRefundDetailsTest($client, $merchant);
//ApiHLOrderPayBarcodeTest($client, $merchant, $account);
//ApiHLOrderPayDetailsTest($client, $merchant, "91022298190000003");
//ApiHLOrderRefundOperationTest($client, $merchant, $account, "91022298190000003");

//ApiHLMerchantWxpayConfigTest($client, $merchant, $account);
//ApiHLMerchantSwitchChannelTest($client, $merchant, $account);
ApiHLOrderPayAppletTest($client, $merchant, $account);

function ApiHLOrderPayBarcodeTest($client, $merchant, $account)
{
    $request = new ApiHLOrderPayBarcodeRequest();
    $request->businessOrderNo = (new DateTimeUtil())->getTimestamp();
    $request->deviceNo = (new DateTimeUtil())->getTimestamp();
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
    $request->businessRefundNo = (new DateTimeUtil())->getTimestamp();
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
    $request->businessOrderNo = (new DateTimeUtil())->getTimestamp();
    $request->deviceNo = (new DateTimeUtil())->getTimestamp();
    $request->merchantNo = $merchant;
    $request->operatorAccount = $account;
    $request->payWay = PayWayEnum::wechat->value;
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
    $request->refundNo = "2022231090000002";

    $response = $client->execute($request);
    print $response;
}

function ApiHLMerchantWxpayConfigTest($client, $merchant, $account){
    $request = new ApiHLMerchantWxpayConfigRequest();
    $request->merchantNo = $merchant;
    $request->operatorAccount = $account;
    $request->appid = "wx1234567890123459";
    $request->channelCode = ChannelEnum::suiXingFu->value;

    $response = $client->execute($request);
    print $response;
}

function ApiHLMerchantSwitchChannelTest($client, $merchant, $account){
    $request = new ApiHLMerchantSwitchChannelRequest();
    $request->merchantNo = $merchant;
    $request->operatorAccount = $account;
    $request->channelCode = ChannelEnum::leShua->value;
    $request->payWay = PayWayEnum::wechat->value;
    $request->payStyle = PayStyleEnum::applet->value;

    $response = $client->execute($request);
    print $response;
}

function ApiHLOrderPayAppletTest($client, $merchant, $account){
    $request = new ApiHLOrderPayAppletRequest();
    $request->merchantNo = $merchant;
    $request->operatorAccount = $account;
    $request->payWay = PayWayEnum::alipay->value;
    $request->businessOrderNo = (new DateTimeUtil())->getTimestamp();
    $request->deviceNo = (new DateTimeUtil())->getTimestamp();
    $request->payAmount=0.01;
    $request->openId="123123";

    $response = $client->execute($request);
    print $response;
}