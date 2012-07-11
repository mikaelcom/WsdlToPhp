<?php
/**
 * Class file for CdynePhoneVerifyTypeArrayOfPhoneReturn
 * @date 03/07/2012
 */
/**
 * Class CdynePhoneVerifyTypeArrayOfPhoneReturn
 * @date 03/07/2012
 */
class CdynePhoneVerifyTypeArrayOfPhoneReturn extends CdynePhoneVerifyWsdlClass
{
	/**
	 * The PhoneReturn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var CdynePhoneVerifyTypePhoneReturn
	 */
	public $PhoneReturn;
	/**
	 * Constructor
	 * @param CdynePhoneVerifyTypePhoneReturn PhoneReturn
	 * @return CdynePhoneVerifyTypeArrayOfPhoneReturn
	 */
	public function __construct($_PhoneReturn = null)
	{
		parent::__construct(array('PhoneReturn'=>$_PhoneReturn));
	}
	/**
	 * Set PhoneReturn
	 * @param PhoneReturn PhoneReturn
	 * @return PhoneReturn
	 */
	public function setPhoneReturn($_PhoneReturn)
	{
		return ($this->PhoneReturn = $_PhoneReturn);
	}
	/**
	 * Get PhoneReturn
	 * @return CdynePhoneVerifyTypePhoneReturn
	 */
	public function getPhoneReturn()
	{
		return $this->PhoneReturn;
	}
	/**
	 * Returns the current element
	 * @see CdynePhoneVerifyWsdlClass::current()
	 * @return CdynePhoneVerifyTypePhoneReturn
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see CdynePhoneVerifyWsdlClass::item()
	 * @param int
	 * @return CdynePhoneVerifyTypePhoneReturn
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see CdynePhoneVerifyWsdlClass::first()
	 * @return CdynePhoneVerifyTypePhoneReturn
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see CdynePhoneVerifyWsdlClass::last()
	 * @return CdynePhoneVerifyTypePhoneReturn
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see CdynePhoneVerifyWsdlClass::offsetGet()
	 * @param int
	 * @return CdynePhoneVerifyTypePhoneReturn
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'PhoneReturn'
	 */
	public function getAttributeName()
	{
		return 'PhoneReturn';
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