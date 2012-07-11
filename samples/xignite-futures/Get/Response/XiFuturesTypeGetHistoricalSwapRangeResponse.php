<?php
/**
 * Class file for XiFuturesTypeGetHistoricalSwapRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalSwapRangeResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalSwapRangeResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalSwapRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuotes
	 */
	public $GetHistoricalSwapRangeResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuotes GetHistoricalSwapRangeResult
	 * @return XiFuturesTypeGetHistoricalSwapRangeResponse
	 */
	public function __construct($_GetHistoricalSwapRangeResult = null)
	{
		parent::__construct(array('GetHistoricalSwapRangeResult'=>$_GetHistoricalSwapRangeResult));
	}
	/**
	 * Set GetHistoricalSwapRangeResult
	 * @param FutureQuotes GetHistoricalSwapRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalSwapRangeResult($_GetHistoricalSwapRangeResult)
	{
		return ($this->GetHistoricalSwapRangeResult = $_GetHistoricalSwapRangeResult);
	}
	/**
	 * Get GetHistoricalSwapRangeResult
	 * @return XiFuturesTypeFutureQuotes
	 */
	public function getGetHistoricalSwapRangeResult()
	{
		return $this->GetHistoricalSwapRangeResult;
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