<?php
/**
 * Class file for XiCurrenciesTypeArrayOfFullCrossRateItem
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfFullCrossRateItem
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfFullCrossRateItem extends XiCurrenciesWsdlClass
{
	/**
	 * The FullCrossRateItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeFullCrossRateItem
	 */
	public $FullCrossRateItem;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeFullCrossRateItem FullCrossRateItem
	 * @return XiCurrenciesTypeArrayOfFullCrossRateItem
	 */
	public function __construct($_FullCrossRateItem = null)
	{
		parent::__construct(array('FullCrossRateItem'=>$_FullCrossRateItem));
	}
	/**
	 * Set FullCrossRateItem
	 * @param FullCrossRateItem FullCrossRateItem
	 * @return FullCrossRateItem
	 */
	public function setFullCrossRateItem($_FullCrossRateItem)
	{
		return ($this->FullCrossRateItem = $_FullCrossRateItem);
	}
	/**
	 * Get FullCrossRateItem
	 * @return XiCurrenciesTypeFullCrossRateItem
	 */
	public function getFullCrossRateItem()
	{
		return $this->FullCrossRateItem;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeFullCrossRateItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeFullCrossRateItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeFullCrossRateItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeFullCrossRateItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeFullCrossRateItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FullCrossRateItem'
	 */
	public function getAttributeName()
	{
		return 'FullCrossRateItem';
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