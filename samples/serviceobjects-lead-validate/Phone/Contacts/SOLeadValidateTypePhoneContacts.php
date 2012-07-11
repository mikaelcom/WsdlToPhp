<?php
/**
 * Class file for SOLeadValidateTypePhoneContacts
 * @date 06/07/2012
 */
/**
 * Class SOLeadValidateTypePhoneContacts
 * @date 06/07/2012
 */
class SOLeadValidateTypePhoneContacts extends SOLeadValidateWsdlClass
{
	/**
	 * The PhoneContact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOLeadValidateTypePhoneContact
	 */
	public $PhoneContact;
	/**
	 * Constructor
	 * @param SOLeadValidateTypePhoneContact PhoneContact
	 * @return SOLeadValidateTypePhoneContacts
	 */
	public function __construct($_PhoneContact = null)
	{
		parent::__construct(array('PhoneContact'=>$_PhoneContact));
	}
	/**
	 * Set PhoneContact
	 * @param PhoneContact PhoneContact
	 * @return PhoneContact
	 */
	public function setPhoneContact($_PhoneContact)
	{
		return ($this->PhoneContact = $_PhoneContact);
	}
	/**
	 * Get PhoneContact
	 * @return SOLeadValidateTypePhoneContact
	 */
	public function getPhoneContact()
	{
		return $this->PhoneContact;
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