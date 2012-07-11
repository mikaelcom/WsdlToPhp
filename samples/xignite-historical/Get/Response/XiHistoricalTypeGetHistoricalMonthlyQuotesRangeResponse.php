<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalMonthlyQuotesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalMonthlyQuotesRangeResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalMonthlyQuotesRangeResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalMonthlyQuotesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalMonthlyQuotesRangeResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalMonthlyQuotesRangeResult
	 * @return XiHistoricalTypeGetHistoricalMonthlyQuotesRangeResponse
	 */
	public function __construct($_GetHistoricalMonthlyQuotesRangeResult = null)
	{
		parent::__construct(array('GetHistoricalMonthlyQuotesRangeResult'=>$_GetHistoricalMonthlyQuotesRangeResult));
	}
	/**
	 * Set GetHistoricalMonthlyQuotesRangeResult
	 * @param HistoricalQuotes GetHistoricalMonthlyQuotesRangeResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalMonthlyQuotesRangeResult($_GetHistoricalMonthlyQuotesRangeResult)
	{
		return ($this->GetHistoricalMonthlyQuotesRangeResult = $_GetHistoricalMonthlyQuotesRangeResult);
	}
	/**
	 * Get GetHistoricalMonthlyQuotesRangeResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalMonthlyQuotesRangeResult()
	{
		return $this->GetHistoricalMonthlyQuotesRangeResult;
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