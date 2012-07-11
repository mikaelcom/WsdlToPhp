<?php
/**
 * Class file for SOFastTaxTypeArrayOfAnyType
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeArrayOfAnyType
 * @date 08/07/2012
 */
class SOFastTaxTypeArrayOfAnyType extends SOFastTaxWsdlClass
{
	/**
	 * The anyType
	 * @var anyType
	 */
	public $anyType;
	/**
	 * Constructor
	 * @param anyType anyType
	 * @return SOFastTaxTypeArrayOfAnyType
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
	 * @see SOFastTaxWsdlClass::current()
	 * @return anyType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOFastTaxWsdlClass::item()
	 * @param int
	 * @return anyType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOFastTaxWsdlClass::first()
	 * @return anyType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOFastTaxWsdlClass::last()
	 * @return anyType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOFastTaxWsdlClass::offsetGet()
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