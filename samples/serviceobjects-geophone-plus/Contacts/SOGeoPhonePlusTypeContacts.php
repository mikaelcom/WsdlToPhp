<?php
/**
 * Class file for SOGeoPhonePlusTypeContacts
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhonePlusTypeContacts
 * @date 08/07/2012
 */
class SOGeoPhonePlusTypeContacts extends SOGeoPhonePlusWsdlClass
{
	/**
	 * The Contact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoPhonePlusTypeContact
	 */
	public $Contact;
	/**
	 * Constructor
	 * @param SOGeoPhonePlusTypeContact Contact
	 * @return SOGeoPhonePlusTypeContacts
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
	 * @return SOGeoPhonePlusTypeContact
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