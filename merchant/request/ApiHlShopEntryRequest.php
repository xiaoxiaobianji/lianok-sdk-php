<?php declare(strict_types=1);

namespace lianok\merchant\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlShopEntryRequest extends AbstractDockingRequest
{

    public  $channelCode;
    public  $notifyUrl;
    public  $loginAccount;
    public int $entryType;
    public  $merchantType;
    public  $lawPerson;
    public  $lawIdCard;
    public  $idCardPortraitImg;
    public  $idCardEmblemImg;
    public  $idCardExpireDate;
    public  $idCardBeginDate;
    public int $lawCertificatesType;
    public  $merchantLicenseFullName;
    public  $merchantLicenseImg;
    public  $merchantLicenseNo;
    public  $merchantLicenseAddress;
    public  $merchantLicenseBegDate;
    public  $merchantLicenseEndDate;
    public  $merchantName;
    public  $merchantShortName;
    public  $phone;
    public  $provinceCode;
    public  $cityCode;
    public  $areaCode;
    public  $address;
    public  $merchantImg;
    public  $merchantFaceImg;
    public  $merchantInnerImg;
    public  $merchantCashdeskImg;
    public  $mccCode;
    public  $consignmentImg;
    public  $settleType;
    public  $bankAccountName;
    public  $bankContactLine;
    public  $bankCardNo;
    public  $bankName;
    public  $bankBranchName;
    public  $bankMobile;
    public  $bankCardImg;
    public  $bankArea;
    public  $bankOpenAccountLicenseImg;
    public  $nonLawIdCardPortraitImg;
    public  $nonLawIdCardEmblemImg;
    public  $nonLawSettleAuthImg;
    public  $nonLawIdCardNo;
    public  $wechatPayRate;
    public  $alipayRate;
    public  $cloudPayStatus;
    public  $cloudPayLe1000Rate;
    public  $cloudPayGt1000Rate;
	public  $merchantNo;
    public  $platformUserName;
    public  $platformUserPhone;
    public  $manageUserName;
    public  $manageUserLoginAccount;
    public  $manageUserPhone;


    public function getResource(): string
    {
        return "api.hl.shop.entry";
    }
}