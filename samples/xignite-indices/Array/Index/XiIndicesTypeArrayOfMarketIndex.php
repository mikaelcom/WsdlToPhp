<?php
/**
 * Class file for XiIndicesTypeArrayOfMarketIndex
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeArrayOfMarketIndex
 * @date 08/07/2012
 */
class XiIndicesTypeArrayOfMarketIndex extends XiIndicesWsdlClass
{
	/**
	 * The MarketIndex
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndicesTypeMarketIndex
	 */
	public $MarketIndex;
	/**
	 * Constructor
	 * @param XiIndicesTypeMarketIndex MarketIndex
	 * @return XiIndicesTypeArrayOfMarketIndex
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
	 * @return XiIndicesTypeMarketIndex
	 */
	public function getMarketIndex()
	{
		return $this->MarketIndex;
	}
	/**
	 * Returns the current element
	 * @see XiIndicesWsdlClass::current()
	 * @return XiIndicesTypeMarketIndex
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndicesWsdlClass::item()
	 * @param int
	 * @return XiIndicesTypeMarketIndex
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::first()
	 * @return XiIndicesTypeMarketIndex
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::last()
	 * @return XiIndicesTypeMarketIndex
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndicesTypeMarketIndex
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