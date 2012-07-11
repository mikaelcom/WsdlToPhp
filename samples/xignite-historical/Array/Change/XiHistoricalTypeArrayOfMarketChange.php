<?php
/**
 * Class file for XiHistoricalTypeArrayOfMarketChange
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfMarketChange
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfMarketChange extends XiHistoricalWsdlClass
{
	/**
	 * The MarketChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeMarketChange
	 */
	public $MarketChange;
	/**
	 * Constructor
	 * @param XiHistoricalTypeMarketChange MarketChange
	 * @return XiHistoricalTypeArrayOfMarketChange
	 */
	public function __construct($_MarketChange = null)
	{
		parent::__construct(array('MarketChange'=>$_MarketChange));
	}
	/**
	 * Set MarketChange
	 * @param MarketChange MarketChange
	 * @return MarketChange
	 */
	public function setMarketChange($_MarketChange)
	{
		return ($this->MarketChange = $_MarketChange);
	}
	/**
	 * Get MarketChange
	 * @return XiHistoricalTypeMarketChange
	 */
	public function getMarketChange()
	{
		return $this->MarketChange;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeMarketChange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeMarketChange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeMarketChange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeMarketChange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeMarketChange
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MarketChange'
	 */
	public function getAttributeName()
	{
		return 'MarketChange';
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