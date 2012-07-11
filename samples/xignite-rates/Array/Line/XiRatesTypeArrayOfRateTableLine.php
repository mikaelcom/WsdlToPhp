<?php
/**
 * Class file for XiRatesTypeArrayOfRateTableLine
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfRateTableLine
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfRateTableLine extends XiRatesWsdlClass
{
	/**
	 * The RateTableLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeRateTableLine
	 */
	public $RateTableLine;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTableLine RateTableLine
	 * @return XiRatesTypeArrayOfRateTableLine
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
	 * @return XiRatesTypeRateTableLine
	 */
	public function getRateTableLine()
	{
		return $this->RateTableLine;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeRateTableLine
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeRateTableLine
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeRateTableLine
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeRateTableLine
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeRateTableLine
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