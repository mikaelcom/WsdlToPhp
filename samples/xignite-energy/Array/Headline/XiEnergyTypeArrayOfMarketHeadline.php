<?php
/**
 * Class file for XiEnergyTypeArrayOfMarketHeadline
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeArrayOfMarketHeadline
 * @date 08/07/2012
 */
class XiEnergyTypeArrayOfMarketHeadline extends XiEnergyWsdlClass
{
	/**
	 * The MarketHeadline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEnergyTypeMarketHeadline
	 */
	public $MarketHeadline;
	/**
	 * Constructor
	 * @param XiEnergyTypeMarketHeadline MarketHeadline
	 * @return XiEnergyTypeArrayOfMarketHeadline
	 */
	public function __construct($_MarketHeadline = null)
	{
		parent::__construct(array('MarketHeadline'=>$_MarketHeadline));
	}
	/**
	 * Set MarketHeadline
	 * @param MarketHeadline MarketHeadline
	 * @return MarketHeadline
	 */
	public function setMarketHeadline($_MarketHeadline)
	{
		return ($this->MarketHeadline = $_MarketHeadline);
	}
	/**
	 * Get MarketHeadline
	 * @return XiEnergyTypeMarketHeadline
	 */
	public function getMarketHeadline()
	{
		return $this->MarketHeadline;
	}
	/**
	 * Returns the current element
	 * @see XiEnergyWsdlClass::current()
	 * @return XiEnergyTypeMarketHeadline
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEnergyWsdlClass::item()
	 * @param int
	 * @return XiEnergyTypeMarketHeadline
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::first()
	 * @return XiEnergyTypeMarketHeadline
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::last()
	 * @return XiEnergyTypeMarketHeadline
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::offsetGet()
	 * @param int
	 * @return XiEnergyTypeMarketHeadline
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MarketHeadline'
	 */
	public function getAttributeName()
	{
		return 'MarketHeadline';
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