<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalMonthlyQuotesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public $GetGlobalHistoricalMonthlyQuotesRangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuotes GetGlobalHistoricalMonthlyQuotesRangeResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeResponse
	 */
	public function __construct($_GetGlobalHistoricalMonthlyQuotesRangeResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalMonthlyQuotesRangeResult'=>$_GetGlobalHistoricalMonthlyQuotesRangeResult));
	}
	/**
	 * Set GetGlobalHistoricalMonthlyQuotesRangeResult
	 * @param GlobalHistoricalQuotes GetGlobalHistoricalMonthlyQuotesRangeResult
	 * @return GlobalHistoricalQuotes
	 */
	public function setGetGlobalHistoricalMonthlyQuotesRangeResult($_GetGlobalHistoricalMonthlyQuotesRangeResult)
	{
		return ($this->GetGlobalHistoricalMonthlyQuotesRangeResult = $_GetGlobalHistoricalMonthlyQuotesRangeResult);
	}
	/**
	 * Get GetGlobalHistoricalMonthlyQuotesRangeResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public function getGetGlobalHistoricalMonthlyQuotesRangeResult()
	{
		return $this->GetGlobalHistoricalMonthlyQuotesRangeResult;
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