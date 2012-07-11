<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuoteResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuoteResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuote
	 */
	public $GetHistoricalQuoteResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuote GetHistoricalQuoteResult
	 * @return XiHistoricalTypeGetHistoricalQuoteResponse
	 */
	public function __construct($_GetHistoricalQuoteResult = null)
	{
		parent::__construct(array('GetHistoricalQuoteResult'=>$_GetHistoricalQuoteResult));
	}
	/**
	 * Set GetHistoricalQuoteResult
	 * @param HistoricalQuote GetHistoricalQuoteResult
	 * @return HistoricalQuote
	 */
	public function setGetHistoricalQuoteResult($_GetHistoricalQuoteResult)
	{
		return ($this->GetHistoricalQuoteResult = $_GetHistoricalQuoteResult);
	}
	/**
	 * Get GetHistoricalQuoteResult
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function getGetHistoricalQuoteResult()
	{
		return $this->GetHistoricalQuoteResult;
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