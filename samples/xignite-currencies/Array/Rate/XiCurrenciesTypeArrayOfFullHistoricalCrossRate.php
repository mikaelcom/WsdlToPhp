<?php
/**
 * Class file for XiCurrenciesTypeArrayOfFullHistoricalCrossRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfFullHistoricalCrossRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfFullHistoricalCrossRate extends XiCurrenciesWsdlClass
{
	/**
	 * The FullHistoricalCrossRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public $FullHistoricalCrossRate;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeFullHistoricalCrossRate FullHistoricalCrossRate
	 * @return XiCurrenciesTypeArrayOfFullHistoricalCrossRate
	 */
	public function __construct($_FullHistoricalCrossRate = null)
	{
		parent::__construct(array('FullHistoricalCrossRate'=>$_FullHistoricalCrossRate));
	}
	/**
	 * Set FullHistoricalCrossRate
	 * @param FullHistoricalCrossRate FullHistoricalCrossRate
	 * @return FullHistoricalCrossRate
	 */
	public function setFullHistoricalCrossRate($_FullHistoricalCrossRate)
	{
		return ($this->FullHistoricalCrossRate = $_FullHistoricalCrossRate);
	}
	/**
	 * Get FullHistoricalCrossRate
	 * @return XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public function getFullHistoricalCrossRate()
	{
		return $this->FullHistoricalCrossRate;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FullHistoricalCrossRate'
	 */
	public function getAttributeName()
	{
		return 'FullHistoricalCrossRate';
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