<?php
/**
 * Class file for RFStockQuoteTypeGetStockQuoteResponse
 * @date 15/08/2012
 */
/**
 * Class RFStockQuoteTypeGetStockQuoteResponse
 * @date 15/08/2012
 */
class RFStockQuoteTypeGetStockQuoteResponse extends RFStockQuoteWsdlClass
{
	/**
	 * The GetStockQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFStockQuoteTypeStockQuote
	 */
	public $GetStockQuoteResult;
	/**
	 * Constructor
	 * @param RFStockQuoteTypeStockQuote GetStockQuoteResult
	 * @return RFStockQuoteTypeGetStockQuoteResponse
	 */
	public function __construct($_GetStockQuoteResult = null)
	{
		parent::__construct(array('GetStockQuoteResult'=>$_GetStockQuoteResult));
	}
	/**
	 * Set GetStockQuoteResult
	 * @param StockQuote GetStockQuoteResult
	 * @return StockQuote
	 */
	public function setGetStockQuoteResult($_GetStockQuoteResult)
	{
		return ($this->GetStockQuoteResult = $_GetStockQuoteResult);
	}
	/**
	 * Get GetStockQuoteResult
	 * @return RFStockQuoteTypeStockQuote
	 */
	public function getGetStockQuoteResult()
	{
		return $this->GetStockQuoteResult;
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