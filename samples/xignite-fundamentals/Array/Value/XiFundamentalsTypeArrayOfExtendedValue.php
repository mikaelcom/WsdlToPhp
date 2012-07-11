<?php
/**
 * Class file for XiFundamentalsTypeArrayOfExtendedValue
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeArrayOfExtendedValue
 * @date 08/07/2012
 */
class XiFundamentalsTypeArrayOfExtendedValue extends XiFundamentalsWsdlClass
{
	/**
	 * The ExtendedValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundamentalsTypeExtendedValue
	 */
	public $ExtendedValue;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeExtendedValue ExtendedValue
	 * @return XiFundamentalsTypeArrayOfExtendedValue
	 */
	public function __construct($_ExtendedValue = null)
	{
		parent::__construct(array('ExtendedValue'=>$_ExtendedValue));
	}
	/**
	 * Set ExtendedValue
	 * @param ExtendedValue ExtendedValue
	 * @return ExtendedValue
	 */
	public function setExtendedValue($_ExtendedValue)
	{
		return ($this->ExtendedValue = $_ExtendedValue);
	}
	/**
	 * Get ExtendedValue
	 * @return XiFundamentalsTypeExtendedValue
	 */
	public function getExtendedValue()
	{
		return $this->ExtendedValue;
	}
	/**
	 * Returns the current element
	 * @see XiFundamentalsWsdlClass::current()
	 * @return XiFundamentalsTypeExtendedValue
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiFundamentalsTypeExtendedValue
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::first()
	 * @return XiFundamentalsTypeExtendedValue
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::last()
	 * @return XiFundamentalsTypeExtendedValue
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundamentalsTypeExtendedValue
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExtendedValue'
	 */
	public function getAttributeName()
	{
		return 'ExtendedValue';
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