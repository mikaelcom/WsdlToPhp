<?php
/**
 * Class file for XiCurrenciesTypeArrayOfCrossRateTableWithBidAsk
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfCrossRateTableWithBidAsk
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfCrossRateTableWithBidAsk extends XiCurrenciesWsdlClass
{
	/**
	 * The CrossRateTableWithBidAsk
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public $CrossRateTableWithBidAsk;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTableWithBidAsk CrossRateTableWithBidAsk
	 * @return XiCurrenciesTypeArrayOfCrossRateTableWithBidAsk
	 */
	public function __construct($_CrossRateTableWithBidAsk = null)
	{
		parent::__construct(array('CrossRateTableWithBidAsk'=>$_CrossRateTableWithBidAsk));
	}
	/**
	 * Set CrossRateTableWithBidAsk
	 * @param CrossRateTableWithBidAsk CrossRateTableWithBidAsk
	 * @return CrossRateTableWithBidAsk
	 */
	public function setCrossRateTableWithBidAsk($_CrossRateTableWithBidAsk)
	{
		return ($this->CrossRateTableWithBidAsk = $_CrossRateTableWithBidAsk);
	}
	/**
	 * Get CrossRateTableWithBidAsk
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function getCrossRateTableWithBidAsk()
	{
		return $this->CrossRateTableWithBidAsk;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CrossRateTableWithBidAsk'
	 */
	public function getAttributeName()
	{
		return 'CrossRateTableWithBidAsk';
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