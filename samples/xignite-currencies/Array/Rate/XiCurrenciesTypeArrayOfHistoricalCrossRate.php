<?php
/**
 * Class file for XiCurrenciesTypeArrayOfHistoricalCrossRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfHistoricalCrossRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfHistoricalCrossRate extends XiCurrenciesWsdlClass
{
	/**
	 * The HistoricalCrossRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeHistoricalCrossRate
	 */
	public $HistoricalCrossRate;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHistoricalCrossRate HistoricalCrossRate
	 * @return XiCurrenciesTypeArrayOfHistoricalCrossRate
	 */
	public function __construct($_HistoricalCrossRate = null)
	{
		parent::__construct(array('HistoricalCrossRate'=>$_HistoricalCrossRate));
	}
	/**
	 * Set HistoricalCrossRate
	 * @param HistoricalCrossRate HistoricalCrossRate
	 * @return HistoricalCrossRate
	 */
	public function setHistoricalCrossRate($_HistoricalCrossRate)
	{
		return ($this->HistoricalCrossRate = $_HistoricalCrossRate);
	}
	/**
	 * Get HistoricalCrossRate
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function getHistoricalCrossRate()
	{
		return $this->HistoricalCrossRate;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HistoricalCrossRate'
	 */
	public function getAttributeName()
	{
		return 'HistoricalCrossRate';
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