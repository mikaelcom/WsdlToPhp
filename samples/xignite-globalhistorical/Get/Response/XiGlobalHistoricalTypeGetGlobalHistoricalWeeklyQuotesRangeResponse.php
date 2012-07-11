<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalWeeklyQuotesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public $GetGlobalHistoricalWeeklyQuotesRangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuotes GetGlobalHistoricalWeeklyQuotesRangeResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeResponse
	 */
	public function __construct($_GetGlobalHistoricalWeeklyQuotesRangeResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalWeeklyQuotesRangeResult'=>$_GetGlobalHistoricalWeeklyQuotesRangeResult));
	}
	/**
	 * Set GetGlobalHistoricalWeeklyQuotesRangeResult
	 * @param GlobalHistoricalQuotes GetGlobalHistoricalWeeklyQuotesRangeResult
	 * @return GlobalHistoricalQuotes
	 */
	public function setGetGlobalHistoricalWeeklyQuotesRangeResult($_GetGlobalHistoricalWeeklyQuotesRangeResult)
	{
		return ($this->GetGlobalHistoricalWeeklyQuotesRangeResult = $_GetGlobalHistoricalWeeklyQuotesRangeResult);
	}
	/**
	 * Get GetGlobalHistoricalWeeklyQuotesRangeResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public function getGetGlobalHistoricalWeeklyQuotesRangeResult()
	{
		return $this->GetGlobalHistoricalWeeklyQuotesRangeResult;
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