<?php
/**
 * Class file for XiQuotesTypeArrayOfStockNews
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfStockNews
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfStockNews extends XiQuotesWsdlClass
{
	/**
	 * The StockNews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeStockNews
	 */
	public $StockNews;
	/**
	 * Constructor
	 * @param XiQuotesTypeStockNews StockNews
	 * @return XiQuotesTypeArrayOfStockNews
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
	 * @return XiQuotesTypeStockNews
	 */
	public function getStockNews()
	{
		return $this->StockNews;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeStockNews
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeStockNews
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeStockNews
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeStockNews
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeStockNews
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