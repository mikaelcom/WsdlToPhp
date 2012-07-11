<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuotesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuotesRangeResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuotesRangeResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuotesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalQuotesRangeResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalQuotesRangeResult
	 * @return XiHistoricalTypeGetHistoricalQuotesRangeResponse
	 */
	public function __construct($_GetHistoricalQuotesRangeResult = null)
	{
		parent::__construct(array('GetHistoricalQuotesRangeResult'=>$_GetHistoricalQuotesRangeResult));
	}
	/**
	 * Set GetHistoricalQuotesRangeResult
	 * @param HistoricalQuotes GetHistoricalQuotesRangeResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalQuotesRangeResult($_GetHistoricalQuotesRangeResult)
	{
		return ($this->GetHistoricalQuotesRangeResult = $_GetHistoricalQuotesRangeResult);
	}
	/**
	 * Get GetHistoricalQuotesRangeResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalQuotesRangeResult()
	{
		return $this->GetHistoricalQuotesRangeResult;
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