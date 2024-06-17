<?php

echo "1";
require_once '../core/entity/AbstractDockingRequest.php';
require_once '../core/entity/LianOkRequest.php';
require_once '../core/entity/ResponseBase.php';
require_once '../core/entity/AbstractUploadRequest.php';
echo "2";

require_once '../core/config/AbstractConfig.php';
require_once '../core/config/OpenConfig.php';
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
require_once '../bank/request/ApiHlBankFirmBranchRequest.php';
require_once '../bank/request/ApiHlBankCheckoutGetRequest.php';
require_once '../bank/request/ApiHlBankUploadImageRequest.php';
require_once '../bank/request/ApiHlBankPersonOpenRequest.php';
echo "7";

use lianok\bank\request\ApiHlBankFirmBranchRequest;
use lianok\core\config\OpenConfig;
use lianok\core\LianokService;
use lianok\core\config\UploadConfig;
use lianok\bank\request\ApiHlBankCheckoutGetRequest;
use lianok\bank\request\ApiHlBankUploadImageRequest;
use lianok\core\UploadService;

$split = '========================';

echo $split . 'start' . $split . "\r\n";

$auth = "1424149220000001";
$key = "aTVPgKDAGs";

$config = \lianok\core\config\OpenConfig::build("test", $auth, $key);
$service = LianokService::build($config);

$request = new ApiHlBankFirmBranchRequest();
$request->keyword = "杭州银行";
//$request->currentPage = 1;
//$request->pageSize = 2;

$response = $service->execute($request);
echo $response. "\r\n";

$request = new ApiHlBankCheckoutGetRequest();
$request->orderNo = "123123";
$response = $service->execute($request);
echo $response. "\r\n";

$request = new \lianok\bank\request\ApiHlBankPersonOpenRequest();
$request->bankName="张三";
$response = $service->execute($request);
echo $response. "\r\n";



//$request = new ApiHlBankUploadImageRequest();
//$request->setFile("C:\\Users\\Administrator\\Desktop\\000.jpg");
//
//$uploadConfig = UploadConfig::build("test", $auth, $key);
//$uploadService = UploadService::build($uploadConfig);
//
//$response = $uploadService->execute($request);
//echo $response. "\r\n";


echo $split . 'end' . $split . "\r\n";

