<?php
/**
 * Class file for XiReleasesTypeArrayOfMarketHeadline
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeArrayOfMarketHeadline
 * @date 08/07/2012
 */
class XiReleasesTypeArrayOfMarketHeadline extends XiReleasesWsdlClass
{
	/**
	 * The MarketHeadline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiReleasesTypeMarketHeadline
	 */
	public $MarketHeadline;
	/**
	 * Constructor
	 * @param XiReleasesTypeMarketHeadline MarketHeadline
	 * @return XiReleasesTypeArrayOfMarketHeadline
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
	 * @return XiReleasesTypeMarketHeadline
	 */
	public function getMarketHeadline()
	{
		return $this->MarketHeadline;
	}
	/**
	 * Returns the current element
	 * @see XiReleasesWsdlClass::current()
	 * @return XiReleasesTypeMarketHeadline
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiReleasesWsdlClass::item()
	 * @param int
	 * @return XiReleasesTypeMarketHeadline
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiReleasesWsdlClass::first()
	 * @return XiReleasesTypeMarketHeadline
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiReleasesWsdlClass::last()
	 * @return XiReleasesTypeMarketHeadline
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiReleasesWsdlClass::offsetGet()
	 * @param int
	 * @return XiReleasesTypeMarketHeadline
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