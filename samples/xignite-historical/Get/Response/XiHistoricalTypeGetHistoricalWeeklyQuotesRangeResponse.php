<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalWeeklyQuotesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalWeeklyQuotesRangeResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalWeeklyQuotesRangeResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalWeeklyQuotesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalWeeklyQuotesRangeResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalWeeklyQuotesRangeResult
	 * @return XiHistoricalTypeGetHistoricalWeeklyQuotesRangeResponse
	 */
	public function __construct($_GetHistoricalWeeklyQuotesRangeResult = null)
	{
		parent::__construct(array('GetHistoricalWeeklyQuotesRangeResult'=>$_GetHistoricalWeeklyQuotesRangeResult));
	}
	/**
	 * Set GetHistoricalWeeklyQuotesRangeResult
	 * @param HistoricalQuotes GetHistoricalWeeklyQuotesRangeResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalWeeklyQuotesRangeResult($_GetHistoricalWeeklyQuotesRangeResult)
	{
		return ($this->GetHistoricalWeeklyQuotesRangeResult = $_GetHistoricalWeeklyQuotesRangeResult);
	}
	/**
	 * Get GetHistoricalWeeklyQuotesRangeResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalWeeklyQuotesRangeResult()
	{
		return $this->GetHistoricalWeeklyQuotesRangeResult;
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