<?php
/**
 * Class file for PayPalTypePayerInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePayerInfoType
 * Documentation : PayerInfoType Payer information
 * @date 14/07/2012
 */
class PayPalTypePayerInfoType extends PayPalWsdlClass
{
	/**
	 * The Payer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Email address of payer Character length and limitations: 127 single-byte characters
	 * @var PayPalTypeEmailAddressType
	 */
	public $Payer;
	/**
	 * The PayerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique customer ID Character length and limitations: 17 single-byte characters
	 * @var PayPalTypeUserIDType
	 */
	public $PayerID;
	/**
	 * The PayerStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Status of payer's email address
	 * @var PayPalTypePayPalUserStatusCodeType
	 */
	public $PayerStatus;
	/**
	 * The PayerName
	 * Meta informations :
	 * 	- documentation : Name of payer
	 * @var PayPalTypePersonNameType
	 */
	public $PayerName;
	/**
	 * The PayerCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Payment sender's country of residence using standard two-character ISO 3166 country codes. Character length and limitations: Two single-byte characters
	 * @var PayPalTypeCountryCodeType
	 */
	public $PayerCountry;
	/**
	 * The PayerBusiness
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Payer's business name. Character length and limitations: 127 single-byte characters
	 * @var string
	 */
	public $PayerBusiness;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Payer's business address
	 * @var PayPalTypeAddressType
	 */
	public $Address;
	/**
	 * The ContactPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Business contact telephone number
	 * @var string
	 */
	public $ContactPhone;
	/**
	 * The TaxIdDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Details about payer's tax info. Refer to the TaxIdDetailsType for more details.
	 * @var PayPalTypeTaxIdDetailsType
	 */
	public $TaxIdDetails;
	/**
	 * The EnhancedPayerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Holds any enhanced information about the payer
	 * @var PayPalTypeEnhancedPayerInfoType
	 */
	public $EnhancedPayerInfo;
	/**
	 * Constructor
	 * @param PayPalTypeEmailAddressType Payer
	 * @param PayPalTypeUserIDType PayerID
	 * @param PayPalTypePayPalUserStatusCodeType PayerStatus
	 * @param PayPalTypePersonNameType PayerName
	 * @param PayPalTypeCountryCodeType PayerCountry
	 * @param string PayerBusiness
	 * @param PayPalTypeAddressType Address
	 * @param string ContactPhone
	 * @param PayPalTypeTaxIdDetailsType TaxIdDetails
	 * @param PayPalTypeEnhancedPayerInfoType EnhancedPayerInfo
	 * @return PayPalTypePayerInfoType
	 */
	public function __construct($_Payer = null,$_PayerID = null,$_PayerStatus = null,$_PayerName = null,$_PayerCountry = null,$_PayerBusiness = null,$_Address = null,$_ContactPhone = null,$_TaxIdDetails = null,$_EnhancedPayerInfo = null)
	{
		parent::__construct(array('Payer'=>$_Payer,'PayerID'=>$_PayerID,'PayerStatus'=>$_PayerStatus,'PayerName'=>$_PayerName,'PayerCountry'=>$_PayerCountry,'PayerBusiness'=>$_PayerBusiness,'Address'=>$_Address,'ContactPhone'=>$_ContactPhone,'TaxIdDetails'=>$_TaxIdDetails,'EnhancedPayerInfo'=>$_EnhancedPayerInfo));
	}
	/**
	 * Set Payer
	 * @param EmailAddressType Payer
	 * @return EmailAddressType
	 */
	public function setPayer($_Payer)
	{
		return ($this->Payer = PayPalTypeEmailAddressType::valueIsValid($_Payer)?$_Payer:null);
	}
	/**
	 * Get Payer
	 * @return PayPalTypeEmailAddressType
	 */
	public function getPayer()
	{
		return $this->Payer;
	}
	/**
	 * Set PayerID
	 * @param UserIDType PayerID
	 * @return UserIDType
	 */
	public function setPayerID($_PayerID)
	{
		return ($this->PayerID = PayPalTypeUserIDType::valueIsValid($_PayerID)?$_PayerID:null);
	}
	/**
	 * Get PayerID
	 * @return PayPalTypeUserIDType
	 */
	public function getPayerID()
	{
		return $this->PayerID;
	}
	/**
	 * Set PayerStatus
	 * @param PayPalUserStatusCodeType PayerStatus
	 * @return PayPalUserStatusCodeType
	 */
	public function setPayerStatus($_PayerStatus)
	{
		return ($this->PayerStatus = PayPalTypePayPalUserStatusCodeType::valueIsValid($_PayerStatus)?$_PayerStatus:null);
	}
	/**
	 * Get PayerStatus
	 * @return PayPalTypePayPalUserStatusCodeType
	 */
	public function getPayerStatus()
	{
		return $this->PayerStatus;
	}
	/**
	 * Set PayerName
	 * @param PersonNameType PayerName
	 * @return PersonNameType
	 */
	public function setPayerName($_PayerName)
	{
		return ($this->PayerName = $_PayerName);
	}
	/**
	 * Get PayerName
	 * @return PayPalTypePersonNameType
	 */
	public function getPayerName()
	{
		return $this->PayerName;
	}
	/**
	 * Set PayerCountry
	 * @param CountryCodeType PayerCountry
	 * @return CountryCodeType
	 */
	public function setPayerCountry($_PayerCountry)
	{
		return ($this->PayerCountry = PayPalTypeCountryCodeType::valueIsValid($_PayerCountry)?$_PayerCountry:null);
	}
	/**
	 * Get PayerCountry
	 * @return PayPalTypeCountryCodeType
	 */
	public function getPayerCountry()
	{
		return $this->PayerCountry;
	}
	/**
	 * Set PayerBusiness
	 * @param string PayerBusiness
	 * @return string
	 */
	public function setPayerBusiness($_PayerBusiness)
	{
		return ($this->PayerBusiness = $_PayerBusiness);
	}
	/**
	 * Get PayerBusiness
	 * @return string
	 */
	public function getPayerBusiness()
	{
		return $this->PayerBusiness;
	}
	/**
	 * Set Address
	 * @param AddressType Address
	 * @return AddressType
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return PayPalTypeAddressType
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set ContactPhone
	 * @param string ContactPhone
	 * @return string
	 */
	public function setContactPhone($_ContactPhone)
	{
		return ($this->ContactPhone = $_ContactPhone);
	}
	/**
	 * Get ContactPhone
	 * @return string
	 */
	public function getContactPhone()
	{
		return $this->ContactPhone;
	}
	/**
	 * Set TaxIdDetails
	 * @param TaxIdDetailsType TaxIdDetails
	 * @return TaxIdDetailsType
	 */
	public function setTaxIdDetails($_TaxIdDetails)
	{
		return ($this->TaxIdDetails = $_TaxIdDetails);
	}
	/**
	 * Get TaxIdDetails
	 * @return PayPalTypeTaxIdDetailsType
	 */
	public function getTaxIdDetails()
	{
		return $this->TaxIdDetails;
	}
	/**
	 * Set EnhancedPayerInfo
	 * @param EnhancedPayerInfoType EnhancedPayerInfo
	 * @return EnhancedPayerInfoType
	 */
	public function setEnhancedPayerInfo($_EnhancedPayerInfo)
	{
		return ($this->EnhancedPayerInfo = $_EnhancedPayerInfo);
	}
	/**
	 * Get EnhancedPayerInfo
	 * @return PayPalTypeEnhancedPayerInfoType
	 */
	public function getEnhancedPayerInfo()
	{
		return $this->EnhancedPayerInfo;
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