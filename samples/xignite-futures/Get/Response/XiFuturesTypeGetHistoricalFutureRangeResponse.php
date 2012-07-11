<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFutureRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFutureRangeResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFutureRangeResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalFutureRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuotes
	 */
	public $GetHistoricalFutureRangeResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuotes GetHistoricalFutureRangeResult
	 * @return XiFuturesTypeGetHistoricalFutureRangeResponse
	 */
	public function __construct($_GetHistoricalFutureRangeResult = null)
	{
		parent::__construct(array('GetHistoricalFutureRangeResult'=>$_GetHistoricalFutureRangeResult));
	}
	/**
	 * Set GetHistoricalFutureRangeResult
	 * @param FutureQuotes GetHistoricalFutureRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalFutureRangeResult($_GetHistoricalFutureRangeResult)
	{
		return ($this->GetHistoricalFutureRangeResult = $_GetHistoricalFutureRangeResult);
	}
	/**
	 * Get GetHistoricalFutureRangeResult
	 * @return XiFuturesTypeFutureQuotes
	 */
	public function getGetHistoricalFutureRangeResult()
	{
		return $this->GetHistoricalFutureRangeResult;
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