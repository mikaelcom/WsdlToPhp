<?php
/**
 * Class file for XiFuturesTypeArrayOfMarketHeadline
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeArrayOfMarketHeadline
 * @date 08/07/2012
 */
class XiFuturesTypeArrayOfMarketHeadline extends XiFuturesWsdlClass
{
	/**
	 * The MarketHeadline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFuturesTypeMarketHeadline
	 */
	public $MarketHeadline;
	/**
	 * Constructor
	 * @param XiFuturesTypeMarketHeadline MarketHeadline
	 * @return XiFuturesTypeArrayOfMarketHeadline
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
	 * @return XiFuturesTypeMarketHeadline
	 */
	public function getMarketHeadline()
	{
		return $this->MarketHeadline;
	}
	/**
	 * Returns the current element
	 * @see XiFuturesWsdlClass::current()
	 * @return XiFuturesTypeMarketHeadline
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFuturesWsdlClass::item()
	 * @param int
	 * @return XiFuturesTypeMarketHeadline
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::first()
	 * @return XiFuturesTypeMarketHeadline
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::last()
	 * @return XiFuturesTypeMarketHeadline
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::offsetGet()
	 * @param int
	 * @return XiFuturesTypeMarketHeadline
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