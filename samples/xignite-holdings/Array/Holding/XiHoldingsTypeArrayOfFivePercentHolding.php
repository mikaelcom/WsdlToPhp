<?php
/**
 * Class file for XiHoldingsTypeArrayOfFivePercentHolding
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeArrayOfFivePercentHolding
 * @date 08/07/2012
 */
class XiHoldingsTypeArrayOfFivePercentHolding extends XiHoldingsWsdlClass
{
	/**
	 * The FivePercentHolding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHoldingsTypeFivePercentHolding
	 */
	public $FivePercentHolding;
	/**
	 * Constructor
	 * @param XiHoldingsTypeFivePercentHolding FivePercentHolding
	 * @return XiHoldingsTypeArrayOfFivePercentHolding
	 */
	public function __construct($_FivePercentHolding = null)
	{
		parent::__construct(array('FivePercentHolding'=>$_FivePercentHolding));
	}
	/**
	 * Set FivePercentHolding
	 * @param FivePercentHolding FivePercentHolding
	 * @return FivePercentHolding
	 */
	public function setFivePercentHolding($_FivePercentHolding)
	{
		return ($this->FivePercentHolding = $_FivePercentHolding);
	}
	/**
	 * Get FivePercentHolding
	 * @return XiHoldingsTypeFivePercentHolding
	 */
	public function getFivePercentHolding()
	{
		return $this->FivePercentHolding;
	}
	/**
	 * Returns the current element
	 * @see XiHoldingsWsdlClass::current()
	 * @return XiHoldingsTypeFivePercentHolding
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHoldingsWsdlClass::item()
	 * @param int
	 * @return XiHoldingsTypeFivePercentHolding
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::first()
	 * @return XiHoldingsTypeFivePercentHolding
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::last()
	 * @return XiHoldingsTypeFivePercentHolding
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiHoldingsTypeFivePercentHolding
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FivePercentHolding'
	 */
	public function getAttributeName()
	{
		return 'FivePercentHolding';
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