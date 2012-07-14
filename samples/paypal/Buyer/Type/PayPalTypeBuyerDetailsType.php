<?php
/**
 * Class file for PayPalTypeBuyerDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBuyerDetailsType
 * Documentation : Details about the buyer's account passed in by the merchant or partner. Optional.
 * @date 14/07/2012
 */
class PayPalTypeBuyerDetailsType extends PayPalWsdlClass
{
	/**
	 * The BuyerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The client's unique ID for this user.
	 * @var string
	 */
	public $BuyerId;
	/**
	 * The BuyerUserName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user name of the user at the marketplaces site.
	 * @var string
	 */
	public $BuyerUserName;
	/**
	 * The BuyerRegistrationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date when the user registered with the marketplace.
	 * @var dateTime
	 */
	public $BuyerRegistrationDate;
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
	 * The IdentificationInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains information that identifies the buyer. e.g. email address or the external remember me id.
	 * @var PayPalTypeIdentificationInfoType
	 */
	public $IdentificationInfo;
	/**
	 * Constructor
	 * @param string BuyerId
	 * @param string BuyerUserName
	 * @param dateTime BuyerRegistrationDate
	 * @param PayPalTypeTaxIdDetailsType TaxIdDetails
	 * @param PayPalTypeIdentificationInfoType IdentificationInfo
	 * @return PayPalTypeBuyerDetailsType
	 */
	public function __construct($_BuyerId = null,$_BuyerUserName = null,$_BuyerRegistrationDate = null,$_TaxIdDetails = null,$_IdentificationInfo = null)
	{
		parent::__construct(array('BuyerId'=>$_BuyerId,'BuyerUserName'=>$_BuyerUserName,'BuyerRegistrationDate'=>$_BuyerRegistrationDate,'TaxIdDetails'=>$_TaxIdDetails,'IdentificationInfo'=>$_IdentificationInfo));
	}
	/**
	 * Set BuyerId
	 * @param string BuyerId
	 * @return string
	 */
	public function setBuyerId($_BuyerId)
	{
		return ($this->BuyerId = $_BuyerId);
	}
	/**
	 * Get BuyerId
	 * @return string
	 */
	public function getBuyerId()
	{
		return $this->BuyerId;
	}
	/**
	 * Set BuyerUserName
	 * @param string BuyerUserName
	 * @return string
	 */
	public function setBuyerUserName($_BuyerUserName)
	{
		return ($this->BuyerUserName = $_BuyerUserName);
	}
	/**
	 * Get BuyerUserName
	 * @return string
	 */
	public function getBuyerUserName()
	{
		return $this->BuyerUserName;
	}
	/**
	 * Set BuyerRegistrationDate
	 * @param dateTime BuyerRegistrationDate
	 * @return dateTime
	 */
	public function setBuyerRegistrationDate($_BuyerRegistrationDate)
	{
		return ($this->BuyerRegistrationDate = $_BuyerRegistrationDate);
	}
	/**
	 * Get BuyerRegistrationDate
	 * @return dateTime
	 */
	public function getBuyerRegistrationDate()
	{
		return $this->BuyerRegistrationDate;
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
	 * Set IdentificationInfo
	 * @param IdentificationInfoType IdentificationInfo
	 * @return IdentificationInfoType
	 */
	public function setIdentificationInfo($_IdentificationInfo)
	{
		return ($this->IdentificationInfo = $_IdentificationInfo);
	}
	/**
	 * Get IdentificationInfo
	 * @return PayPalTypeIdentificationInfoType
	 */
	public function getIdentificationInfo()
	{
		return $this->IdentificationInfo;
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