<?php
/**
 * Class file for SOGeoPhoneTypeContacts
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeContacts
 * @date 08/07/2012
 */
class SOGeoPhoneTypeContacts extends SOGeoPhoneWsdlClass
{
	/**
	 * The Contact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoPhoneTypeContact
	 */
	public $Contact;
	/**
	 * Constructor
	 * @param SOGeoPhoneTypeContact Contact
	 * @return SOGeoPhoneTypeContacts
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
	 * @return SOGeoPhoneTypeContact
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