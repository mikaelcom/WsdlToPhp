<?php
/**
 * Class file for XiNewsTypeArrayOfStockNews
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeArrayOfStockNews
 * @date 08/07/2012
 */
class XiNewsTypeArrayOfStockNews extends XiNewsWsdlClass
{
	/**
	 * The StockNews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiNewsTypeStockNews
	 */
	public $StockNews;
	/**
	 * Constructor
	 * @param XiNewsTypeStockNews StockNews
	 * @return XiNewsTypeArrayOfStockNews
	 */
	public function __construct($_StockNews = null)
	{
		parent::__construct(array('StockNews'=>$_StockNews));
	}
	/**
	 * Set StockNews
	 * @param StockNews StockNews
	 * @return StockNews
	 */
	public function setStockNews($_StockNews)
	{
		return ($this->StockNews = $_StockNews);
	}
	/**
	 * Get StockNews
	 * @return XiNewsTypeStockNews
	 */
	public function getStockNews()
	{
		return $this->StockNews;
	}
	/**
	 * Returns the current element
	 * @see XiNewsWsdlClass::current()
	 * @return XiNewsTypeStockNews
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiNewsWsdlClass::item()
	 * @param int
	 * @return XiNewsTypeStockNews
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::first()
	 * @return XiNewsTypeStockNews
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::last()
	 * @return XiNewsTypeStockNews
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::offsetGet()
	 * @param int
	 * @return XiNewsTypeStockNews
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'StockNews'
	 */
	public function getAttributeName()
	{
		return 'StockNews';
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