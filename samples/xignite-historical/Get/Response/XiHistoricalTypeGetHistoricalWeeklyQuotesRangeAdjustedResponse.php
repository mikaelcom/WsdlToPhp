<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalWeeklyQuotesRangeAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalWeeklyQuotesRangeAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalWeeklyQuotesRangeAdjustedResult
	 * @return XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjustedResponse
	 */
	public function __construct($_GetHistoricalWeeklyQuotesRangeAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalWeeklyQuotesRangeAdjustedResult'=>$_GetHistoricalWeeklyQuotesRangeAdjustedResult));
	}
	/**
	 * Set GetHistoricalWeeklyQuotesRangeAdjustedResult
	 * @param HistoricalQuotes GetHistoricalWeeklyQuotesRangeAdjustedResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalWeeklyQuotesRangeAdjustedResult($_GetHistoricalWeeklyQuotesRangeAdjustedResult)
	{
		return ($this->GetHistoricalWeeklyQuotesRangeAdjustedResult = $_GetHistoricalWeeklyQuotesRangeAdjustedResult);
	}
	/**
	 * Get GetHistoricalWeeklyQuotesRangeAdjustedResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalWeeklyQuotesRangeAdjustedResult()
	{
		return $this->GetHistoricalWeeklyQuotesRangeAdjustedResult;
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