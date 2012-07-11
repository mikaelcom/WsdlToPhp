<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalQuarterlyQuotesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public $GetGlobalHistoricalQuarterlyQuotesRangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuotes GetGlobalHistoricalQuarterlyQuotesRangeResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRangeResponse
	 */
	public function __construct($_GetGlobalHistoricalQuarterlyQuotesRangeResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalQuarterlyQuotesRangeResult'=>$_GetGlobalHistoricalQuarterlyQuotesRangeResult));
	}
	/**
	 * Set GetGlobalHistoricalQuarterlyQuotesRangeResult
	 * @param GlobalHistoricalQuotes GetGlobalHistoricalQuarterlyQuotesRangeResult
	 * @return GlobalHistoricalQuotes
	 */
	public function setGetGlobalHistoricalQuarterlyQuotesRangeResult($_GetGlobalHistoricalQuarterlyQuotesRangeResult)
	{
		return ($this->GetGlobalHistoricalQuarterlyQuotesRangeResult = $_GetGlobalHistoricalQuarterlyQuotesRangeResult);
	}
	/**
	 * Get GetGlobalHistoricalQuarterlyQuotesRangeResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public function getGetGlobalHistoricalQuarterlyQuotesRangeResult()
	{
		return $this->GetGlobalHistoricalQuarterlyQuotesRangeResult;
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