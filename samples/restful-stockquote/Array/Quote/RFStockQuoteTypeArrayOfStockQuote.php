<?php
/**
 * Class file for RFStockQuoteTypeArrayOfStockQuote
 * @date 15/08/2012
 */
/**
 * Class RFStockQuoteTypeArrayOfStockQuote
 * @date 15/08/2012
 */
class RFStockQuoteTypeArrayOfStockQuote extends RFStockQuoteWsdlClass
{
	/**
	 * The StockQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var RFStockQuoteTypeStockQuote
	 */
	public $StockQuote;
	/**
	 * Constructor
	 * @param RFStockQuoteTypeStockQuote StockQuote
	 * @return RFStockQuoteTypeArrayOfStockQuote
	 */
	public function __construct($_StockQuote = null)
	{
		parent::__construct(array('StockQuote'=>$_StockQuote));
	}
	/**
	 * Set StockQuote
	 * @param StockQuote StockQuote
	 * @return StockQuote
	 */
	public function setStockQuote($_StockQuote)
	{
		return ($this->StockQuote = $_StockQuote);
	}
	/**
	 * Get StockQuote
	 * @return RFStockQuoteTypeStockQuote
	 */
	public function getStockQuote()
	{
		return $this->StockQuote;
	}
	/**
	 * Returns the current element
	 * @see RFStockQuoteWsdlClass::current()
	 * @return RFStockQuoteTypeStockQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see RFStockQuoteWsdlClass::item()
	 * @param int
	 * @return RFStockQuoteTypeStockQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see RFStockQuoteWsdlClass::first()
	 * @return RFStockQuoteTypeStockQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see RFStockQuoteWsdlClass::last()
	 * @return RFStockQuoteTypeStockQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see RFStockQuoteWsdlClass::offsetGet()
	 * @param int
	 * @return RFStockQuoteTypeStockQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'StockQuote'
	 */
	public function getAttributeName()
	{
		return 'StockQuote';
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