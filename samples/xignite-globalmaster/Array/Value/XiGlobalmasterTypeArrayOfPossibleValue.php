<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfPossibleValue
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfPossibleValue
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfPossibleValue extends XiGlobalmasterWsdlClass
{
	/**
	 * The PossibleValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypePossibleValue
	 */
	public $PossibleValue;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypePossibleValue PossibleValue
	 * @return XiGlobalmasterTypeArrayOfPossibleValue
	 */
	public function __construct($_PossibleValue = null)
	{
		parent::__construct(array('PossibleValue'=>$_PossibleValue));
	}
	/**
	 * Set PossibleValue
	 * @param PossibleValue PossibleValue
	 * @return PossibleValue
	 */
	public function setPossibleValue($_PossibleValue)
	{
		return ($this->PossibleValue = $_PossibleValue);
	}
	/**
	 * Get PossibleValue
	 * @return XiGlobalmasterTypePossibleValue
	 */
	public function getPossibleValue()
	{
		return $this->PossibleValue;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypePossibleValue
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypePossibleValue
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypePossibleValue
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypePossibleValue
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypePossibleValue
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'PossibleValue'
	 */
	public function getAttributeName()
	{
		return 'PossibleValue';
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