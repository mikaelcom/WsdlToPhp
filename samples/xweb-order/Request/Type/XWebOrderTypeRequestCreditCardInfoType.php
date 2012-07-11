<?php
/**
 * Class file for XWebOrderTypeRequestCreditCardInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestCreditCardInfoType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestCreditCardInfoType extends XWebOrderWsdlClass
{
	/**
	 * The CCNbr
	 * @var CCNbr
	 */
	public $CCNbr;
	/**
	 * The CCExpiryDate
	 * @var CCExpiryDate
	 */
	public $CCExpiryDate;
	/**
	 * The CCHolderName
	 * @var CCHolderName
	 */
	public $CCHolderName;
	/**
	 * The CCTypeCode
	 * @var CCTypeCode
	 */
	public $CCTypeCode;
	/**
	 * The CCVerifyNumber
	 * @var CCVerifyNumber
	 */
	public $CCVerifyNumber;
	/**
	 * The CCHolderCompany
	 * @var CCHolderCompany
	 */
	public $CCHolderCompany;
	/**
	 * The CCBillToAddr1
	 * @var CCBillToAddr1
	 */
	public $CCBillToAddr1;
	/**
	 * The CCBillToAddr2
	 * @var CCBillToAddr2
	 */
	public $CCBillToAddr2;
	/**
	 * The CCBillToAddr3
	 * @var CCBillToAddr3
	 */
	public $CCBillToAddr3;
	/**
	 * The CCBillToCity
	 * @var CCBillToCity
	 */
	public $CCBillToCity;
	/**
	 * The CCBillToStateProvinceCode
	 * @var CCBillToStateProvinceCode
	 */
	public $CCBillToStateProvinceCode;
	/**
	 * The CCBillToPostalCode
	 * @var CCBillToPostalCode
	 */
	public $CCBillToPostalCode;
	/**
	 * The CCContactPhoneNbr
	 * @var CCContactPhoneNbr
	 */
	public $CCContactPhoneNbr;
	/**
	 * The CCContactPhoneExt
	 * @var CCContactPhoneExt
	 */
	public $CCContactPhoneExt;
	/**
	 * The CCPCardPOSCode
	 * @var CCPCardPOSCode
	 */
	public $CCPCardPOSCode;
	/**
	 * The CCUseSoldToAddrInd
	 * @var CCUseSoldToAddrInd
	 */
	public $CCUseSoldToAddrInd;
	/**
	 * The CCSaveCCInfo
	 * @var CCSaveCCInfo
	 */
	public $CCSaveCCInfo;
	/**
	 * Constructor
	 * @param CCNbr CCNbr
	 * @param CCExpiryDate CCExpiryDate
	 * @param CCHolderName CCHolderName
	 * @param CCTypeCode CCTypeCode
	 * @param CCVerifyNumber CCVerifyNumber
	 * @param CCHolderCompany CCHolderCompany
	 * @param CCBillToAddr1 CCBillToAddr1
	 * @param CCBillToAddr2 CCBillToAddr2
	 * @param CCBillToAddr3 CCBillToAddr3
	 * @param CCBillToCity CCBillToCity
	 * @param CCBillToStateProvinceCode CCBillToStateProvinceCode
	 * @param CCBillToPostalCode CCBillToPostalCode
	 * @param CCContactPhoneNbr CCContactPhoneNbr
	 * @param CCContactPhoneExt CCContactPhoneExt
	 * @param CCPCardPOSCode CCPCardPOSCode
	 * @param CCUseSoldToAddrInd CCUseSoldToAddrInd
	 * @param CCSaveCCInfo CCSaveCCInfo
	 * @return XWebOrderTypeRequestCreditCardInfoType
	 */
	public function __construct($_CCNbr = null,$_CCExpiryDate = null,$_CCHolderName = null,$_CCTypeCode = null,$_CCVerifyNumber = null,$_CCHolderCompany = null,$_CCBillToAddr1 = null,$_CCBillToAddr2 = null,$_CCBillToAddr3 = null,$_CCBillToCity = null,$_CCBillToStateProvinceCode = null,$_CCBillToPostalCode = null,$_CCContactPhoneNbr = null,$_CCContactPhoneExt = null,$_CCPCardPOSCode = null,$_CCUseSoldToAddrInd = null,$_CCSaveCCInfo = null)
	{
		parent::__construct(array('CCNbr'=>$_CCNbr,'CCExpiryDate'=>$_CCExpiryDate,'CCHolderName'=>$_CCHolderName,'CCTypeCode'=>$_CCTypeCode,'CCVerifyNumber'=>$_CCVerifyNumber,'CCHolderCompany'=>$_CCHolderCompany,'CCBillToAddr1'=>$_CCBillToAddr1,'CCBillToAddr2'=>$_CCBillToAddr2,'CCBillToAddr3'=>$_CCBillToAddr3,'CCBillToCity'=>$_CCBillToCity,'CCBillToStateProvinceCode'=>$_CCBillToStateProvinceCode,'CCBillToPostalCode'=>$_CCBillToPostalCode,'CCContactPhoneNbr'=>$_CCContactPhoneNbr,'CCContactPhoneExt'=>$_CCContactPhoneExt,'CCPCardPOSCode'=>$_CCPCardPOSCode,'CCUseSoldToAddrInd'=>$_CCUseSoldToAddrInd,'CCSaveCCInfo'=>$_CCSaveCCInfo));
	}
	/**
	 * Set CCNbr
	 * @param CCNbr CCNbr
	 * @return CCNbr
	 */
	public function setCCNbr($_CCNbr)
	{
		return ($this->CCNbr = $_CCNbr);
	}
	/**
	 * Get CCNbr
	 * @return CCNbr
	 */
	public function getCCNbr()
	{
		return $this->CCNbr;
	}
	/**
	 * Set CCExpiryDate
	 * @param CCExpiryDate CCExpiryDate
	 * @return CCExpiryDate
	 */
	public function setCCExpiryDate($_CCExpiryDate)
	{
		return ($this->CCExpiryDate = $_CCExpiryDate);
	}
	/**
	 * Get CCExpiryDate
	 * @return CCExpiryDate
	 */
	public function getCCExpiryDate()
	{
		return $this->CCExpiryDate;
	}
	/**
	 * Set CCHolderName
	 * @param CCHolderName CCHolderName
	 * @return CCHolderName
	 */
	public function setCCHolderName($_CCHolderName)
	{
		return ($this->CCHolderName = $_CCHolderName);
	}
	/**
	 * Get CCHolderName
	 * @return CCHolderName
	 */
	public function getCCHolderName()
	{
		return $this->CCHolderName;
	}
	/**
	 * Set CCTypeCode
	 * @param CCTypeCode CCTypeCode
	 * @return CCTypeCode
	 */
	public function setCCTypeCode($_CCTypeCode)
	{
		return ($this->CCTypeCode = $_CCTypeCode);
	}
	/**
	 * Get CCTypeCode
	 * @return CCTypeCode
	 */
	public function getCCTypeCode()
	{
		return $this->CCTypeCode;
	}
	/**
	 * Set CCVerifyNumber
	 * @param CCVerifyNumber CCVerifyNumber
	 * @return CCVerifyNumber
	 */
	public function setCCVerifyNumber($_CCVerifyNumber)
	{
		return ($this->CCVerifyNumber = $_CCVerifyNumber);
	}
	/**
	 * Get CCVerifyNumber
	 * @return CCVerifyNumber
	 */
	public function getCCVerifyNumber()
	{
		return $this->CCVerifyNumber;
	}
	/**
	 * Set CCHolderCompany
	 * @param CCHolderCompany CCHolderCompany
	 * @return CCHolderCompany
	 */
	public function setCCHolderCompany($_CCHolderCompany)
	{
		return ($this->CCHolderCompany = $_CCHolderCompany);
	}
	/**
	 * Get CCHolderCompany
	 * @return CCHolderCompany
	 */
	public function getCCHolderCompany()
	{
		return $this->CCHolderCompany;
	}
	/**
	 * Set CCBillToAddr1
	 * @param CCBillToAddr1 CCBillToAddr1
	 * @return CCBillToAddr1
	 */
	public function setCCBillToAddr1($_CCBillToAddr1)
	{
		return ($this->CCBillToAddr1 = $_CCBillToAddr1);
	}
	/**
	 * Get CCBillToAddr1
	 * @return CCBillToAddr1
	 */
	public function getCCBillToAddr1()
	{
		return $this->CCBillToAddr1;
	}
	/**
	 * Set CCBillToAddr2
	 * @param CCBillToAddr2 CCBillToAddr2
	 * @return CCBillToAddr2
	 */
	public function setCCBillToAddr2($_CCBillToAddr2)
	{
		return ($this->CCBillToAddr2 = $_CCBillToAddr2);
	}
	/**
	 * Get CCBillToAddr2
	 * @return CCBillToAddr2
	 */
	public function getCCBillToAddr2()
	{
		return $this->CCBillToAddr2;
	}
	/**
	 * Set CCBillToAddr3
	 * @param CCBillToAddr3 CCBillToAddr3
	 * @return CCBillToAddr3
	 */
	public function setCCBillToAddr3($_CCBillToAddr3)
	{
		return ($this->CCBillToAddr3 = $_CCBillToAddr3);
	}
	/**
	 * Get CCBillToAddr3
	 * @return CCBillToAddr3
	 */
	public function getCCBillToAddr3()
	{
		return $this->CCBillToAddr3;
	}
	/**
	 * Set CCBillToCity
	 * @param CCBillToCity CCBillToCity
	 * @return CCBillToCity
	 */
	public function setCCBillToCity($_CCBillToCity)
	{
		return ($this->CCBillToCity = $_CCBillToCity);
	}
	/**
	 * Get CCBillToCity
	 * @return CCBillToCity
	 */
	public function getCCBillToCity()
	{
		return $this->CCBillToCity;
	}
	/**
	 * Set CCBillToStateProvinceCode
	 * @param CCBillToStateProvinceCode CCBillToStateProvinceCode
	 * @return CCBillToStateProvinceCode
	 */
	public function setCCBillToStateProvinceCode($_CCBillToStateProvinceCode)
	{
		return ($this->CCBillToStateProvinceCode = $_CCBillToStateProvinceCode);
	}
	/**
	 * Get CCBillToStateProvinceCode
	 * @return CCBillToStateProvinceCode
	 */
	public function getCCBillToStateProvinceCode()
	{
		return $this->CCBillToStateProvinceCode;
	}
	/**
	 * Set CCBillToPostalCode
	 * @param CCBillToPostalCode CCBillToPostalCode
	 * @return CCBillToPostalCode
	 */
	public function setCCBillToPostalCode($_CCBillToPostalCode)
	{
		return ($this->CCBillToPostalCode = $_CCBillToPostalCode);
	}
	/**
	 * Get CCBillToPostalCode
	 * @return CCBillToPostalCode
	 */
	public function getCCBillToPostalCode()
	{
		return $this->CCBillToPostalCode;
	}
	/**
	 * Set CCContactPhoneNbr
	 * @param CCContactPhoneNbr CCContactPhoneNbr
	 * @return CCContactPhoneNbr
	 */
	public function setCCContactPhoneNbr($_CCContactPhoneNbr)
	{
		return ($this->CCContactPhoneNbr = $_CCContactPhoneNbr);
	}
	/**
	 * Get CCContactPhoneNbr
	 * @return CCContactPhoneNbr
	 */
	public function getCCContactPhoneNbr()
	{
		return $this->CCContactPhoneNbr;
	}
	/**
	 * Set CCContactPhoneExt
	 * @param CCContactPhoneExt CCContactPhoneExt
	 * @return CCContactPhoneExt
	 */
	public function setCCContactPhoneExt($_CCContactPhoneExt)
	{
		return ($this->CCContactPhoneExt = $_CCContactPhoneExt);
	}
	/**
	 * Get CCContactPhoneExt
	 * @return CCContactPhoneExt
	 */
	public function getCCContactPhoneExt()
	{
		return $this->CCContactPhoneExt;
	}
	/**
	 * Set CCPCardPOSCode
	 * @param CCPCardPOSCode CCPCardPOSCode
	 * @return CCPCardPOSCode
	 */
	public function setCCPCardPOSCode($_CCPCardPOSCode)
	{
		return ($this->CCPCardPOSCode = $_CCPCardPOSCode);
	}
	/**
	 * Get CCPCardPOSCode
	 * @return CCPCardPOSCode
	 */
	public function getCCPCardPOSCode()
	{
		return $this->CCPCardPOSCode;
	}
	/**
	 * Set CCUseSoldToAddrInd
	 * @param CCUseSoldToAddrInd CCUseSoldToAddrInd
	 * @return CCUseSoldToAddrInd
	 */
	public function setCCUseSoldToAddrInd($_CCUseSoldToAddrInd)
	{
		return ($this->CCUseSoldToAddrInd = $_CCUseSoldToAddrInd);
	}
	/**
	 * Get CCUseSoldToAddrInd
	 * @return CCUseSoldToAddrInd
	 */
	public function getCCUseSoldToAddrInd()
	{
		return $this->CCUseSoldToAddrInd;
	}
	/**
	 * Set CCSaveCCInfo
	 * @param CCSaveCCInfo CCSaveCCInfo
	 * @return CCSaveCCInfo
	 */
	public function setCCSaveCCInfo($_CCSaveCCInfo)
	{
		return ($this->CCSaveCCInfo = $_CCSaveCCInfo);
	}
	/**
	 * Get CCSaveCCInfo
	 * @return CCSaveCCInfo
	 */
	public function getCCSaveCCInfo()
	{
		return $this->CCSaveCCInfo;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>