<?php
/**
 * Class file for EbayTradingTypeExtendedContactDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExtendedContactDetailsType
 * Documentation : Contains extended contact information for an eBay user.
 * @date 04/07/2012
 */
class EbayTradingTypeExtendedContactDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ContactHoursDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : All fields related to contact hours including time ranges and user-designated time zone.
	 * @var EbayTradingTypeContactHoursDetailsType
	 */
	public $ContactHoursDetails;
	/**
	 * The ClassifiedAdContactByEmailEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returned for classified ads to indicate whether contact by email is enabled. In the pay-per-lead feature, which will be available in upcoming months on the US site, this field will specify whether potential buyers can email the seller after viewing a pay-per-lead listing.
	 * @var boolean
	 */
	public $ClassifiedAdContactByEmailEnabled;
	/**
	 * The PayPerLeadPhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A phone number assigned by eBay and provided to potential buyers when they are viewing a pay-per-lead listing. If a potential buyer (a lead) makes a call to this number, eBay routes the call to the seller based on inputs made by the seller when the seller lists the item.
	 * @var string
	 */
	public $PayPerLeadPhoneNumber;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeContactHoursDetailsType ContactHoursDetails
	 * @param boolean ClassifiedAdContactByEmailEnabled
	 * @param string PayPerLeadPhoneNumber
	 * @param DOMDocument any
	 * @return EbayTradingTypeExtendedContactDetailsType
	 */
	public function __construct($_ContactHoursDetails = null,$_ClassifiedAdContactByEmailEnabled = null,$_PayPerLeadPhoneNumber = null,$_any = null)
	{
		parent::__construct(array('ContactHoursDetails'=>$_ContactHoursDetails,'ClassifiedAdContactByEmailEnabled'=>$_ClassifiedAdContactByEmailEnabled,'PayPerLeadPhoneNumber'=>$_PayPerLeadPhoneNumber,'any'=>$_any));
	}
	/**
	 * Set ContactHoursDetails
	 * @param ContactHoursDetailsType ContactHoursDetails
	 * @return ContactHoursDetailsType
	 */
	public function setContactHoursDetails($_ContactHoursDetails)
	{
		return ($this->ContactHoursDetails = $_ContactHoursDetails);
	}
	/**
	 * Get ContactHoursDetails
	 * @return EbayTradingTypeContactHoursDetailsType
	 */
	public function getContactHoursDetails()
	{
		return $this->ContactHoursDetails;
	}
	/**
	 * Set ClassifiedAdContactByEmailEnabled
	 * @param boolean ClassifiedAdContactByEmailEnabled
	 * @return boolean
	 */
	public function setClassifiedAdContactByEmailEnabled($_ClassifiedAdContactByEmailEnabled)
	{
		return ($this->ClassifiedAdContactByEmailEnabled = $_ClassifiedAdContactByEmailEnabled);
	}
	/**
	 * Get ClassifiedAdContactByEmailEnabled
	 * @return boolean
	 */
	public function getClassifiedAdContactByEmailEnabled()
	{
		return $this->ClassifiedAdContactByEmailEnabled;
	}
	/**
	 * Set PayPerLeadPhoneNumber
	 * @param string PayPerLeadPhoneNumber
	 * @return string
	 */
	public function setPayPerLeadPhoneNumber($_PayPerLeadPhoneNumber)
	{
		return ($this->PayPerLeadPhoneNumber = $_PayPerLeadPhoneNumber);
	}
	/**
	 * Get PayPerLeadPhoneNumber
	 * @return string
	 */
	public function getPayPerLeadPhoneNumber()
	{
		return $this->PayPerLeadPhoneNumber;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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