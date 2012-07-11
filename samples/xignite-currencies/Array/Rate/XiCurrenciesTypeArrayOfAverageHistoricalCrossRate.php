<?php
/**
 * Class file for XiCurrenciesTypeArrayOfAverageHistoricalCrossRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfAverageHistoricalCrossRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfAverageHistoricalCrossRate extends XiCurrenciesWsdlClass
{
	/**
	 * The AverageHistoricalCrossRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public $AverageHistoricalCrossRate;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeAverageHistoricalCrossRate AverageHistoricalCrossRate
	 * @return XiCurrenciesTypeArrayOfAverageHistoricalCrossRate
	 */
	public function __construct($_AverageHistoricalCrossRate = null)
	{
		parent::__construct(array('AverageHistoricalCrossRate'=>$_AverageHistoricalCrossRate));
	}
	/**
	 * Set AverageHistoricalCrossRate
	 * @param AverageHistoricalCrossRate AverageHistoricalCrossRate
	 * @return AverageHistoricalCrossRate
	 */
	public function setAverageHistoricalCrossRate($_AverageHistoricalCrossRate)
	{
		return ($this->AverageHistoricalCrossRate = $_AverageHistoricalCrossRate);
	}
	/**
	 * Get AverageHistoricalCrossRate
	 * @return XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public function getAverageHistoricalCrossRate()
	{
		return $this->AverageHistoricalCrossRate;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'AverageHistoricalCrossRate'
	 */
	public function getAttributeName()
	{
		return 'AverageHistoricalCrossRate';
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