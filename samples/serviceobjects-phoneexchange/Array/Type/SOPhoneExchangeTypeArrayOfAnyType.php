<?php
/**
 * Class file for SOPhoneExchangeTypeArrayOfAnyType
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeArrayOfAnyType
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeArrayOfAnyType extends SOPhoneExchangeWsdlClass
{
	/**
	 * The anyType
	 * @var anyType
	 */
	public $anyType;
	/**
	 * Constructor
	 * @param anyType anyType
	 * @return SOPhoneExchangeTypeArrayOfAnyType
	 */
	public function __construct($_anyType = null)
	{
		parent::__construct(array('anyType'=>$_anyType));
	}
	/**
	 * Set anyType
	 * @param anyType anyType
	 * @return anyType
	 */
	public function setAnyType($_anyType)
	{
		return ($this->anyType = $_anyType);
	}
	/**
	 * Get anyType
	 * @return anyType
	 */
	public function getAnyType()
	{
		return $this->anyType;
	}
	/**
	 * Returns the current element
	 * @see SOPhoneExchangeWsdlClass::current()
	 * @return anyType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOPhoneExchangeWsdlClass::item()
	 * @param int
	 * @return anyType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOPhoneExchangeWsdlClass::first()
	 * @return anyType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOPhoneExchangeWsdlClass::last()
	 * @return anyType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOPhoneExchangeWsdlClass::offsetGet()
	 * @param int
	 * @return anyType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'anyType'
	 */
	public function getAttributeName()
	{
		return 'anyType';
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