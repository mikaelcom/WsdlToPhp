<?php
/**
 * Class file for XiRatesTypeArrayOfRateStatistics
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfRateStatistics
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfRateStatistics extends XiRatesWsdlClass
{
	/**
	 * The RateStatistics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeRateStatistics
	 */
	public $RateStatistics;
	/**
	 * Constructor
	 * @param XiRatesTypeRateStatistics RateStatistics
	 * @return XiRatesTypeArrayOfRateStatistics
	 */
	public function __construct($_RateStatistics = null)
	{
		parent::__construct(array('RateStatistics'=>$_RateStatistics));
	}
	/**
	 * Set RateStatistics
	 * @param RateStatistics RateStatistics
	 * @return RateStatistics
	 */
	public function setRateStatistics($_RateStatistics)
	{
		return ($this->RateStatistics = $_RateStatistics);
	}
	/**
	 * Get RateStatistics
	 * @return XiRatesTypeRateStatistics
	 */
	public function getRateStatistics()
	{
		return $this->RateStatistics;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeRateStatistics
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeRateStatistics
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeRateStatistics
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeRateStatistics
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeRateStatistics
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RateStatistics'
	 */
	public function getAttributeName()
	{
		return 'RateStatistics';
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