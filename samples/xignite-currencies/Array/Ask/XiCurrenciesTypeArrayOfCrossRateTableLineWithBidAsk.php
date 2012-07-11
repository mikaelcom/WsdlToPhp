<?php
/**
 * Class file for XiCurrenciesTypeArrayOfCrossRateTableLineWithBidAsk
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfCrossRateTableLineWithBidAsk
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfCrossRateTableLineWithBidAsk extends XiCurrenciesWsdlClass
{
	/**
	 * The CrossRateTableLineWithBidAsk
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public $CrossRateTableLineWithBidAsk;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTableLineWithBidAsk CrossRateTableLineWithBidAsk
	 * @return XiCurrenciesTypeArrayOfCrossRateTableLineWithBidAsk
	 */
	public function __construct($_CrossRateTableLineWithBidAsk = null)
	{
		parent::__construct(array('CrossRateTableLineWithBidAsk'=>$_CrossRateTableLineWithBidAsk));
	}
	/**
	 * Set CrossRateTableLineWithBidAsk
	 * @param CrossRateTableLineWithBidAsk CrossRateTableLineWithBidAsk
	 * @return CrossRateTableLineWithBidAsk
	 */
	public function setCrossRateTableLineWithBidAsk($_CrossRateTableLineWithBidAsk)
	{
		return ($this->CrossRateTableLineWithBidAsk = $_CrossRateTableLineWithBidAsk);
	}
	/**
	 * Get CrossRateTableLineWithBidAsk
	 * @return XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public function getCrossRateTableLineWithBidAsk()
	{
		return $this->CrossRateTableLineWithBidAsk;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CrossRateTableLineWithBidAsk'
	 */
	public function getAttributeName()
	{
		return 'CrossRateTableLineWithBidAsk';
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