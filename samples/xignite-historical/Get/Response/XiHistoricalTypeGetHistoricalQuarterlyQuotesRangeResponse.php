<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuarterlyQuotesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalQuarterlyQuotesRangeResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalQuarterlyQuotesRangeResult
	 * @return XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeResponse
	 */
	public function __construct($_GetHistoricalQuarterlyQuotesRangeResult = null)
	{
		parent::__construct(array('GetHistoricalQuarterlyQuotesRangeResult'=>$_GetHistoricalQuarterlyQuotesRangeResult));
	}
	/**
	 * Set GetHistoricalQuarterlyQuotesRangeResult
	 * @param HistoricalQuotes GetHistoricalQuarterlyQuotesRangeResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalQuarterlyQuotesRangeResult($_GetHistoricalQuarterlyQuotesRangeResult)
	{
		return ($this->GetHistoricalQuarterlyQuotesRangeResult = $_GetHistoricalQuarterlyQuotesRangeResult);
	}
	/**
	 * Get GetHistoricalQuarterlyQuotesRangeResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalQuarterlyQuotesRangeResult()
	{
		return $this->GetHistoricalQuarterlyQuotesRangeResult;
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