<?php
/**
 * Class file for XiCurrenciesTypeArrayOfCrossRateItem
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfCrossRateItem
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfCrossRateItem extends XiCurrenciesWsdlClass
{
	/**
	 * The CrossRateItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeCrossRateItem
	 */
	public $CrossRateItem;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateItem CrossRateItem
	 * @return XiCurrenciesTypeArrayOfCrossRateItem
	 */
	public function __construct($_CrossRateItem = null)
	{
		parent::__construct(array('CrossRateItem'=>$_CrossRateItem));
	}
	/**
	 * Set CrossRateItem
	 * @param CrossRateItem CrossRateItem
	 * @return CrossRateItem
	 */
	public function setCrossRateItem($_CrossRateItem)
	{
		return ($this->CrossRateItem = $_CrossRateItem);
	}
	/**
	 * Get CrossRateItem
	 * @return XiCurrenciesTypeCrossRateItem
	 */
	public function getCrossRateItem()
	{
		return $this->CrossRateItem;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeCrossRateItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeCrossRateItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeCrossRateItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CrossRateItem'
	 */
	public function getAttributeName()
	{
		return 'CrossRateItem';
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