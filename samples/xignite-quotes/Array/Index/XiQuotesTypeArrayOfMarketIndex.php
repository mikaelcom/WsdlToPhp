<?php
/**
 * Class file for XiQuotesTypeArrayOfMarketIndex
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfMarketIndex
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfMarketIndex extends XiQuotesWsdlClass
{
	/**
	 * The MarketIndex
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeMarketIndex
	 */
	public $MarketIndex;
	/**
	 * Constructor
	 * @param XiQuotesTypeMarketIndex MarketIndex
	 * @return XiQuotesTypeArrayOfMarketIndex
	 */
	public function __construct($_MarketIndex = null)
	{
		parent::__construct(array('MarketIndex'=>$_MarketIndex));
	}
	/**
	 * Set MarketIndex
	 * @param MarketIndex MarketIndex
	 * @return MarketIndex
	 */
	public function setMarketIndex($_MarketIndex)
	{
		return ($this->MarketIndex = $_MarketIndex);
	}
	/**
	 * Get MarketIndex
	 * @return XiQuotesTypeMarketIndex
	 */
	public function getMarketIndex()
	{
		return $this->MarketIndex;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeMarketIndex
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeMarketIndex
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeMarketIndex
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeMarketIndex
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeMarketIndex
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MarketIndex'
	 */
	public function getAttributeName()
	{
		return 'MarketIndex';
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