<?php
/**
 * Class file for XiInterBanksTypeArrayOfRateTableLine
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeArrayOfRateTableLine
 * @date 08/07/2012
 */
class XiInterBanksTypeArrayOfRateTableLine extends XiInterBanksWsdlClass
{
	/**
	 * The RateTableLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInterBanksTypeRateTableLine
	 */
	public $RateTableLine;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTableLine RateTableLine
	 * @return XiInterBanksTypeArrayOfRateTableLine
	 */
	public function __construct($_RateTableLine = null)
	{
		parent::__construct(array('RateTableLine'=>$_RateTableLine));
	}
	/**
	 * Set RateTableLine
	 * @param RateTableLine RateTableLine
	 * @return RateTableLine
	 */
	public function setRateTableLine($_RateTableLine)
	{
		return ($this->RateTableLine = $_RateTableLine);
	}
	/**
	 * Get RateTableLine
	 * @return XiInterBanksTypeRateTableLine
	 */
	public function getRateTableLine()
	{
		return $this->RateTableLine;
	}
	/**
	 * Returns the current element
	 * @see XiInterBanksWsdlClass::current()
	 * @return XiInterBanksTypeRateTableLine
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInterBanksWsdlClass::item()
	 * @param int
	 * @return XiInterBanksTypeRateTableLine
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::first()
	 * @return XiInterBanksTypeRateTableLine
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::last()
	 * @return XiInterBanksTypeRateTableLine
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::offsetGet()
	 * @param int
	 * @return XiInterBanksTypeRateTableLine
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RateTableLine'
	 */
	public function getAttributeName()
	{
		return 'RateTableLine';
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