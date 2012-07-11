<?php
/**
 * Class file for XiCurrenciesTypeArrayOfExchangeRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfExchangeRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfExchangeRate extends XiCurrenciesWsdlClass
{
	/**
	 * The ExchangeRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeExchangeRate
	 */
	public $ExchangeRate;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeExchangeRate ExchangeRate
	 * @return XiCurrenciesTypeArrayOfExchangeRate
	 */
	public function __construct($_ExchangeRate = null)
	{
		parent::__construct(array('ExchangeRate'=>$_ExchangeRate));
	}
	/**
	 * Set ExchangeRate
	 * @param ExchangeRate ExchangeRate
	 * @return ExchangeRate
	 */
	public function setExchangeRate($_ExchangeRate)
	{
		return ($this->ExchangeRate = $_ExchangeRate);
	}
	/**
	 * Get ExchangeRate
	 * @return XiCurrenciesTypeExchangeRate
	 */
	public function getExchangeRate()
	{
		return $this->ExchangeRate;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeExchangeRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeExchangeRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeExchangeRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeExchangeRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeExchangeRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExchangeRate'
	 */
	public function getAttributeName()
	{
		return 'ExchangeRate';
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