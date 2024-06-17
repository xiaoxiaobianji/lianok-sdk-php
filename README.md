# lianok-sdk-php

## 文档
[SDK文档首页](https://www.yuque.com/youyun-8yqqt/vpbgq7)

## 环境要求
1. lianok-sdk-php 需要 PHP 7.1 以上的开发环境。
2. 需要提前获取对接参数
3. 环境包含\[test|pre|publish\],不同环境对应的对接参数也是不同的

## 快速使用
以下这段代码示例向您展示了使用SDK调用一个API的主要步骤：
1. 创建对接配置，用于构建调用接口Service
2. 构建调用接口Service用于后续接口请求
3. 发起请求并处理响应或异常


### 接口
```php
<?php

use lianok\core\LianokService;
use lianok\core\config\EntryConfig;
use lianok\merchant\request\ApiHlShopDetailRequest;

require_once '../core/entity/AbstractDockingRequest.php';
require_once '../core/entity/LianOkRequest.php';
require_once '../core/entity/ResponseBase.php';
require_once '../core/entity/AbstractUploadRequest.php';
require_once '../core/config/AbstractConfig.php';
require_once '../core/config/OpenConfig.php';
require_once '../core/config/EntryConfig.php';
require_once '../core/config/UploadConfig.php';
require_once '../core/client/ResponseClient.php';
require_once '../core/client/UploadClient.php';
require_once '../core/utils/StringUtil.php';
require_once '../core/utils/DateUtil.php';
require_once '../core/utils/HttpClient.php';
require_once '../core/ResponseBuilder.php';
require_once '../core/UploadBuilder.php';
require_once '../LianokService.php';
require_once '../UploadService.php';

require_once '../merchant/request/ApiHlShopDetailRequest.php';



$auth = "1423254150000001";
$key = "hOnHeN2daY";

// entry.lianok.com
$config = EntryConfig::build("test", $auth, $key);
// 只需构建一次，可重复使用。和交易区分开
$client = LianokService::build($config);

$request = new ApiHlShopDetailRequest();
$request->merchantNo = '102186';
$request->operatorAccount = '18555551939';
$request->payWay = 'alipay';
$request->businessOrderNo ='12345678';
$request->deviceNo = 'deviceSn_123456';
$request->payAmount= '0.01';
$request->userId="123123";
$request->openId = "123456";
$request->appId="wx123123";

$response = $client->execute($request);
print $response;
```

### 交易接口
```php
<?php

use lianok\core\LianokService;
use lianok\core\config\OpenConfig;
use lianok\pay\request\ApiHLOrderPayUnifiedRequest;

require_once '../core/entity/AbstractDockingRequest.php';
require_once '../core/entity/LianOkRequest.php';
require_once '../core/entity/ResponseBase.php';
require_once '../core/entity/AbstractUploadRequest.php';
require_once '../core/config/AbstractConfig.php';
require_once '../core/config/OpenConfig.php';
require_once '../core/config/EntryConfig.php';
require_once '../core/config/UploadConfig.php';
require_once '../core/client/ResponseClient.php';
require_once '../core/client/UploadClient.php';
require_once '../core/utils/StringUtil.php';
require_once '../core/utils/DateUtil.php';
require_once '../core/utils/HttpClient.php';
require_once '../core/ResponseBuilder.php';
require_once '../core/UploadBuilder.php';
require_once '../LianokService.php';
require_once '../UploadService.php';

require_once '../docking/request/ApiHlOrderPayUnifiedRequest.php';

$auth = "1423254150000001";
$key = "hOnHeN2daY";

// open.lianok.com
$config = OpenConfig::build("test", $auth, $key);
// 只需构建一次，可重复使用。和非交易区分开
$client = LianokService::build($config);

$request = new ApiHlOrderPayUnifiedRequest();
$request->merchantNo = '102186';
$request->businessOrderNo ='202001010000001';
$request->operatorAccount = '18555551939';
$request->payAmount= '0.01';
$request->payWay="wechat";

$response = $client->execute($request);
print $response;
```

### 图片上传

```php
<?php

use lianok\core\UploadService;
use lianok\core\config\UploadConfig;
use lianok\core\utils\DateUtil;
use lianok\merchant\request\ApiHlShopUploadImageRequest;

require_once '../core/entity/AbstractDockingRequest.php';
require_once '../core/entity/LianOkRequest.php';
require_once '../core/entity/ResponseBase.php';
require_once '../core/entity/AbstractUploadRequest.php';
require_once '../core/config/AbstractConfig.php';
require_once '../core/config/OpenConfig.php';
require_once '../core/config/EntryConfig.php';
require_once '../core/config/UploadConfig.php';
require_once '../core/client/ResponseClient.php';
require_once '../core/client/UploadClient.php';
require_once '../core/utils/StringUtil.php';
require_once '../core/utils/DateUtil.php';
require_once '../core/utils/HttpClient.php';
require_once '../core/ResponseBuilder.php';
require_once '../core/UploadBuilder.php';
require_once '../LianokService.php';
require_once '../UploadService.php';

require_once '../merchant/request/ApiHlShopUploadImageRequest.php';


$auth = "1423254150000001";
$key = "hOnHeN2daY";

$config = UploadConfig::build("test", $auth, $key);
// 只需构建一次，可重复使用
$client = UploadService::build($config);

$request = new ApiHlShopUploadImageRequest();
$request->file = '本地路径';
$response = $client->execute($request);
print $response;
```
