<?php
/**
 * Class file for XiCurrenciesTypeArrayOfCurrencyItem
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfCurrencyItem
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfCurrencyItem extends XiCurrenciesWsdlClass
{
	/**
	 * The CurrencyItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeCurrencyItem
	 */
	public $CurrencyItem;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrencyItem CurrencyItem
	 * @return XiCurrenciesTypeArrayOfCurrencyItem
	 */
	public function __construct($_CurrencyItem = null)
	{
		parent::__construct(array('CurrencyItem'=>$_CurrencyItem));
	}
	/**
	 * Set CurrencyItem
	 * @param CurrencyItem CurrencyItem
	 * @return CurrencyItem
	 */
	public function setCurrencyItem($_CurrencyItem)
	{
		return ($this->CurrencyItem = $_CurrencyItem);
	}
	/**
	 * Get CurrencyItem
	 * @return XiCurrenciesTypeCurrencyItem
	 */
	public function getCurrencyItem()
	{
		return $this->CurrencyItem;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeCurrencyItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeCurrencyItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeCurrencyItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeCurrencyItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeCurrencyItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CurrencyItem'
	 */
	public function getAttributeName()
	{
		return 'CurrencyItem';
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