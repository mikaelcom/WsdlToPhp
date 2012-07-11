<?php
/**
 * Class file for XiScreenerTypeArrayOfValidValue
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeArrayOfValidValue
 * @date 08/07/2012
 */
class XiScreenerTypeArrayOfValidValue extends XiScreenerWsdlClass
{
	/**
	 * The ValidValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiScreenerTypeValidValue
	 */
	public $ValidValue;
	/**
	 * Constructor
	 * @param XiScreenerTypeValidValue ValidValue
	 * @return XiScreenerTypeArrayOfValidValue
	 */
	public function __construct($_ValidValue = null)
	{
		parent::__construct(array('ValidValue'=>$_ValidValue));
	}
	/**
	 * Set ValidValue
	 * @param ValidValue ValidValue
	 * @return ValidValue
	 */
	public function setValidValue($_ValidValue)
	{
		return ($this->ValidValue = $_ValidValue);
	}
	/**
	 * Get ValidValue
	 * @return XiScreenerTypeValidValue
	 */
	public function getValidValue()
	{
		return $this->ValidValue;
	}
	/**
	 * Returns the current element
	 * @see XiScreenerWsdlClass::current()
	 * @return XiScreenerTypeValidValue
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiScreenerWsdlClass::item()
	 * @param int
	 * @return XiScreenerTypeValidValue
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::first()
	 * @return XiScreenerTypeValidValue
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::last()
	 * @return XiScreenerTypeValidValue
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::offsetGet()
	 * @param int
	 * @return XiScreenerTypeValidValue
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ValidValue'
	 */
	public function getAttributeName()
	{
		return 'ValidValue';
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