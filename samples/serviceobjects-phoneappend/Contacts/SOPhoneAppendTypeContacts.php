<?php
/**
 * Class file for SOPhoneAppendTypeContacts
 * @date 08/07/2012
 */
/**
 * Class SOPhoneAppendTypeContacts
 * @date 08/07/2012
 */
class SOPhoneAppendTypeContacts extends SOPhoneAppendWsdlClass
{
	/**
	 * The Contact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOPhoneAppendTypeContact
	 */
	public $Contact;
	/**
	 * Constructor
	 * @param SOPhoneAppendTypeContact Contact
	 * @return SOPhoneAppendTypeContacts
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
	 * @return SOPhoneAppendTypeContact
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