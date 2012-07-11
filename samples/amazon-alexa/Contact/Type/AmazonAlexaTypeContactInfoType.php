<?php
/**
 * Class file for AmazonAlexaTypeContactInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeContactInfoType
 * @date 10/07/2012
 */
class AmazonAlexaTypeContactInfoType extends AmazonAlexaWsdlClass
{
	/**
	 * The PhoneNumbers
	 * @var AmazonAlexaTypePhoneNumbers
	 */
	public $PhoneNumbers;
	/**
	 * The OwnerName
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $OwnerName;
	/**
	 * The Email
	 * @var EmailType
	 */
	public $Email;
	/**
	 * The PhysicalAddress
	 * @var AmazonAlexaTypePhysicalAddress
	 */
	public $PhysicalAddress;
	/**
	 * The CompanyStockTicker
	 * @var AmazonAlexaTypeCompanyStockTicker
	 */
	public $CompanyStockTicker;
	/**
	 * Constructor
	 * @param AmazonAlexaTypePhoneNumbers PhoneNumbers
	 * @param AmazonAlexaTypeGenericDataType OwnerName
	 * @param EmailType Email
	 * @param AmazonAlexaTypePhysicalAddress PhysicalAddress
	 * @param AmazonAlexaTypeCompanyStockTicker CompanyStockTicker
	 * @return AmazonAlexaTypeContactInfoType
	 */
	public function __construct($_PhoneNumbers = null,$_OwnerName = null,$_Email = null,$_PhysicalAddress = null,$_CompanyStockTicker = null)
	{
		parent::__construct(array('PhoneNumbers'=>$_PhoneNumbers,'OwnerName'=>$_OwnerName,'Email'=>$_Email,'PhysicalAddress'=>$_PhysicalAddress,'CompanyStockTicker'=>$_CompanyStockTicker));
	}
	/**
	 * Set PhoneNumbers
	 * @param PhoneNumbers PhoneNumbers
	 * @return PhoneNumbers
	 */
	public function setPhoneNumbers($_PhoneNumbers)
	{
		return ($this->PhoneNumbers = $_PhoneNumbers);
	}
	/**
	 * Get PhoneNumbers
	 * @return AmazonAlexaTypePhoneNumbers
	 */
	public function getPhoneNumbers()
	{
		return $this->PhoneNumbers;
	}
	/**
	 * Set OwnerName
	 * @param GenericDataType OwnerName
	 * @return GenericDataType
	 */
	public function setOwnerName($_OwnerName)
	{
		return ($this->OwnerName = $_OwnerName);
	}
	/**
	 * Get OwnerName
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getOwnerName()
	{
		return $this->OwnerName;
	}
	/**
	 * Set Email
	 * @param EmailType Email
	 * @return EmailType
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return EmailType
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set PhysicalAddress
	 * @param PhysicalAddress PhysicalAddress
	 * @return PhysicalAddress
	 */
	public function setPhysicalAddress($_PhysicalAddress)
	{
		return ($this->PhysicalAddress = $_PhysicalAddress);
	}
	/**
	 * Get PhysicalAddress
	 * @return AmazonAlexaTypePhysicalAddress
	 */
	public function getPhysicalAddress()
	{
		return $this->PhysicalAddress;
	}
	/**
	 * Set CompanyStockTicker
	 * @param CompanyStockTicker CompanyStockTicker
	 * @return CompanyStockTicker
	 */
	public function setCompanyStockTicker($_CompanyStockTicker)
	{
		return ($this->CompanyStockTicker = $_CompanyStockTicker);
	}
	/**
	 * Get CompanyStockTicker
	 * @return AmazonAlexaTypeCompanyStockTicker
	 */
	public function getCompanyStockTicker()
	{
		return $this->CompanyStockTicker;
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