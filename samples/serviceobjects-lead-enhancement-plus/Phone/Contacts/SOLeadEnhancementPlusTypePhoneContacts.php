<?php
/**
 * Class file for SOLeadEnhancementPlusTypePhoneContacts
 * @date 06/07/2012
 */
/**
 * Class SOLeadEnhancementPlusTypePhoneContacts
 * @date 06/07/2012
 */
class SOLeadEnhancementPlusTypePhoneContacts extends SOLeadEnhancementPlusWsdlClass
{
	/**
	 * The PhoneContact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOLeadEnhancementPlusTypePhoneContact
	 */
	public $PhoneContact;
	/**
	 * The myContacts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadEnhancementPlusTypeArrayOfAnyType
	 */
	public $myContacts;
	/**
	 * Constructor
	 * @param SOLeadEnhancementPlusTypePhoneContact PhoneContact
	 * @param SOLeadEnhancementPlusTypeArrayOfAnyType myContacts
	 * @return SOLeadEnhancementPlusTypePhoneContacts
	 */
	public function __construct($_PhoneContact = null,$_myContacts = null)
	{
		parent::__construct(array('PhoneContact'=>$_PhoneContact,'myContacts'=>new SOLeadEnhancementPlusTypeArrayOfAnyType($_myContacts)));
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
	 * @return SOLeadEnhancementPlusTypePhoneContact
	 */
	public function getPhoneContact()
	{
		return $this->PhoneContact;
	}
	/**
	 * Set myContacts
	 * @param ArrayOfAnyType myContacts
	 * @return ArrayOfAnyType
	 */
	public function setMyContacts($_myContacts)
	{
		return ($this->myContacts = $_myContacts);
	}
	/**
	 * Get myContacts
	 * @return SOLeadEnhancementPlusTypeArrayOfAnyType
	 */
	public function getMyContacts()
	{
		return $this->myContacts;
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