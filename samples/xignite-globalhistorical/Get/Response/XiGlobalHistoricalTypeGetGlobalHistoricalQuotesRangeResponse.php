<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalQuotesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public $GetGlobalHistoricalQuotesRangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuotes GetGlobalHistoricalQuotesRangeResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeResponse
	 */
	public function __construct($_GetGlobalHistoricalQuotesRangeResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalQuotesRangeResult'=>$_GetGlobalHistoricalQuotesRangeResult));
	}
	/**
	 * Set GetGlobalHistoricalQuotesRangeResult
	 * @param GlobalHistoricalQuotes GetGlobalHistoricalQuotesRangeResult
	 * @return GlobalHistoricalQuotes
	 */
	public function setGetGlobalHistoricalQuotesRangeResult($_GetGlobalHistoricalQuotesRangeResult)
	{
		return ($this->GetGlobalHistoricalQuotesRangeResult = $_GetGlobalHistoricalQuotesRangeResult);
	}
	/**
	 * Get GetGlobalHistoricalQuotesRangeResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public function getGetGlobalHistoricalQuotesRangeResult()
	{
		return $this->GetGlobalHistoricalQuotesRangeResult;
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