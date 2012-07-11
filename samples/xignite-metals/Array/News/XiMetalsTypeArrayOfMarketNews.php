<?php
/**
 * Class file for XiMetalsTypeArrayOfMarketNews
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeArrayOfMarketNews
 * @date 08/07/2012
 */
class XiMetalsTypeArrayOfMarketNews extends XiMetalsWsdlClass
{
	/**
	 * The MarketNews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMetalsTypeMarketNews
	 */
	public $MarketNews;
	/**
	 * Constructor
	 * @param XiMetalsTypeMarketNews MarketNews
	 * @return XiMetalsTypeArrayOfMarketNews
	 */
	public function __construct($_MarketNews = null)
	{
		parent::__construct(array('MarketNews'=>$_MarketNews));
	}
	/**
	 * Set MarketNews
	 * @param MarketNews MarketNews
	 * @return MarketNews
	 */
	public function setMarketNews($_MarketNews)
	{
		return ($this->MarketNews = $_MarketNews);
	}
	/**
	 * Get MarketNews
	 * @return XiMetalsTypeMarketNews
	 */
	public function getMarketNews()
	{
		return $this->MarketNews;
	}
	/**
	 * Returns the current element
	 * @see XiMetalsWsdlClass::current()
	 * @return XiMetalsTypeMarketNews
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMetalsWsdlClass::item()
	 * @param int
	 * @return XiMetalsTypeMarketNews
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::first()
	 * @return XiMetalsTypeMarketNews
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::last()
	 * @return XiMetalsTypeMarketNews
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMetalsTypeMarketNews
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MarketNews'
	 */
	public function getAttributeName()
	{
		return 'MarketNews';
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