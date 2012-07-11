<?php
/**
 * Class file for SOGeoPhoneWirelessTypeContacts
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneWirelessTypeContacts
 * @date 08/07/2012
 */
class SOGeoPhoneWirelessTypeContacts extends SOGeoPhoneWirelessWsdlClass
{
	/**
	 * The Contact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoPhoneWirelessTypeContact
	 */
	public $Contact;
	/**
	 * Constructor
	 * @param SOGeoPhoneWirelessTypeContact Contact
	 * @return SOGeoPhoneWirelessTypeContacts
	 */
	public function __construct($_Contact = null)
	{
		parent::__construct(array('Contact'=>$_Contact));
	}
	/**
	 * Set Contact
	 * @param Contact Contact
	 * @return Contact
	 */
	public function setContact($_Contact)
	{
		return ($this->Contact = $_Contact);
	}
	/**
	 * Get Contact
	 * @return SOGeoPhoneWirelessTypeContact
	 */
	public function getContact()
	{
		return $this->Contact;
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