<?php
/**
 * Class file for XiFundDataTypeArrayOfFifteenPercentHolding
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfFifteenPercentHolding
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfFifteenPercentHolding extends XiFundDataWsdlClass
{
	/**
	 * The FifteenPercentHolding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeFifteenPercentHolding
	 */
	public $FifteenPercentHolding;
	/**
	 * Constructor
	 * @param XiFundDataTypeFifteenPercentHolding FifteenPercentHolding
	 * @return XiFundDataTypeArrayOfFifteenPercentHolding
	 */
	public function __construct($_FifteenPercentHolding = null)
	{
		parent::__construct(array('FifteenPercentHolding'=>$_FifteenPercentHolding));
	}
	/**
	 * Set FifteenPercentHolding
	 * @param FifteenPercentHolding FifteenPercentHolding
	 * @return FifteenPercentHolding
	 */
	public function setFifteenPercentHolding($_FifteenPercentHolding)
	{
		return ($this->FifteenPercentHolding = $_FifteenPercentHolding);
	}
	/**
	 * Get FifteenPercentHolding
	 * @return XiFundDataTypeFifteenPercentHolding
	 */
	public function getFifteenPercentHolding()
	{
		return $this->FifteenPercentHolding;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeFifteenPercentHolding
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeFifteenPercentHolding
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeFifteenPercentHolding
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeFifteenPercentHolding
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeFifteenPercentHolding
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FifteenPercentHolding'
	 */
	public function getAttributeName()
	{
		return 'FifteenPercentHolding';
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