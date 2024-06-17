<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopEntryRequest extends AbstractDockingRequest
{

    public string $channelCode;
    public string $notifyUrl;
    public string $loginAccount;
    public int $entryType;
    public string $merchantType;
    public string $lawPerson;
    public string $lawIdCard;
    public string $idCardPortraitImg;
    public string $idCardEmblemImg;
    public string $idCardExpireDate;
    public string $idCardBeginDate;
    public int $lawCertificatesType;
    public string $merchantLicenseFullName;
    public string $merchantLicenseImg;
    public string $merchantLicenseNo;
    public string $merchantLicenseAddress;
    public string $merchantLicenseBegDate;
    public string $merchantLicenseEndDate;
    public string $merchantName;
    public string $merchantShortName;
    public string $phone;
    public string $provinceCode;
    public string $cityCode;
    public string $areaCode;
    public string $address;
    public string $merchantImg;
    public string $merchantFaceImg;
    public string $merchantInnerImg;
    public string $merchantCashdeskImg;
    public string $mccCode;
    public string $consignmentImg;
    public string $settleType;
    public string $bankAccountName;
    public string $bankContactLine;
    public string $bankCardNo;
    public string $bankName;
    public string $bankBranchName;
    public string $bankMobile;
    public string $bankCardImg;
    public string $bankArea;
    public string $bankOpenAccountLicenseImg;
    public string $nonLawIdCardPortraitImg;
    public string $nonLawIdCardEmblemImg;
    public string $nonLawSettleAuthImg;
    public string $nonLawIdCardNo;
    public string $wechatPayRate;
    public string $alipayRate;
    public string $cloudPayStatus;
    public string $cloudPayLe1000Rate;
    public string $cloudPayGt1000Rate;

    public function getResource(): string
    {
        return "api.hl.shop.entry";
    }
}