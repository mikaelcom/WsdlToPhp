<?php
/**
 * Class file for SOContactValidationTypeArrayOfContact
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationTypeArrayOfContact
 * @date 08/07/2012
 */
class SOContactValidationTypeArrayOfContact extends SOContactValidationWsdlClass
{
	/**
	 * The Contact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOContactValidationTypeContact
	 */
	public $Contact;
	/**
	 * Constructor
	 * @param SOContactValidationTypeContact Contact
	 * @return SOContactValidationTypeArrayOfContact
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
	 * @return SOContactValidationTypeContact
	 */
	public function getContact()
	{
		return $this->Contact;
	}
	/**
	 * Returns the current element
	 * @see SOContactValidationWsdlClass::current()
	 * @return SOContactValidationTypeContact
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOContactValidationWsdlClass::item()
	 * @param int
	 * @return SOContactValidationTypeContact
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOContactValidationWsdlClass::first()
	 * @return SOContactValidationTypeContact
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOContactValidationWsdlClass::last()
	 * @return SOContactValidationTypeContact
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOContactValidationWsdlClass::offsetGet()
	 * @param int
	 * @return SOContactValidationTypeContact
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Contact'
	 */
	public function getAttributeName()
	{
		return 'Contact';
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