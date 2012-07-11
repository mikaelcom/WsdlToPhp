<?php
/**
 * Class file for XiNewsTypeArrayOfMarketNews
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeArrayOfMarketNews
 * @date 08/07/2012
 */
class XiNewsTypeArrayOfMarketNews extends XiNewsWsdlClass
{
	/**
	 * The MarketNews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiNewsTypeMarketNews
	 */
	public $MarketNews;
	/**
	 * Constructor
	 * @param XiNewsTypeMarketNews MarketNews
	 * @return XiNewsTypeArrayOfMarketNews
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
	 * @return XiNewsTypeMarketNews
	 */
	public function getMarketNews()
	{
		return $this->MarketNews;
	}
	/**
	 * Returns the current element
	 * @see XiNewsWsdlClass::current()
	 * @return XiNewsTypeMarketNews
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiNewsWsdlClass::item()
	 * @param int
	 * @return XiNewsTypeMarketNews
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::first()
	 * @return XiNewsTypeMarketNews
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::last()
	 * @return XiNewsTypeMarketNews
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::offsetGet()
	 * @param int
	 * @return XiNewsTypeMarketNews
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