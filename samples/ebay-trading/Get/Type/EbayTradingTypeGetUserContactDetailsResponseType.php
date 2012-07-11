<?php
/**
 * Class file for EbayTradingTypeGetUserContactDetailsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetUserContactDetailsResponseType
 * Documentation : Returns contact information to a seller for both bidders and users who have made offers (via Best Offer) during an active listing.
 * @date 04/07/2012
 */
class EbayTradingTypeGetUserContactDetailsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An eBay ID that uniquely identifies a given user. The eBay username of the requested contact.
	 * @var string
	 */
	public $UserID;
	/**
	 * The ContactAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contact information for the requested contact. Note that the email address is NOT returned.
	 * @var EbayTradingTypeAddressType
	 */
	public $ContactAddress;
	/**
	 * The RegistrationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time that the requested contact registered with eBay.
	 * @var dateTime
	 */
	public $RegistrationDate;
	/**
	 * Constructor
	 * @param string UserID
	 * @param EbayTradingTypeAddressType ContactAddress
	 * @param dateTime RegistrationDate
	 * @return EbayTradingTypeGetUserContactDetailsResponseType
	 */
	public function __construct($_UserID = null,$_ContactAddress = null,$_RegistrationDate = null)
	{
		EbayTradingWsdlClass::__construct(array('UserID'=>$_UserID,'ContactAddress'=>$_ContactAddress,'RegistrationDate'=>$_RegistrationDate));
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set ContactAddress
	 * @param AddressType ContactAddress
	 * @return AddressType
	 */
	public function setContactAddress($_ContactAddress)
	{
		return ($this->ContactAddress = $_ContactAddress);
	}
	/**
	 * Get ContactAddress
	 * @return EbayTradingTypeAddressType
	 */
	public function getContactAddress()
	{
		return $this->ContactAddress;
	}
	/**
	 * Set RegistrationDate
	 * @param dateTime RegistrationDate
	 * @return dateTime
	 */
	public function setRegistrationDate($_RegistrationDate)
	{
		return ($this->RegistrationDate = $_RegistrationDate);
	}
	/**
	 * Get RegistrationDate
	 * @return dateTime
	 */
	public function getRegistrationDate()
	{
		return $this->RegistrationDate;
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