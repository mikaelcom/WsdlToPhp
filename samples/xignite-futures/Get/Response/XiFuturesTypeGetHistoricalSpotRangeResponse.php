<?php
/**
 * Class file for XiFuturesTypeGetHistoricalSpotRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalSpotRangeResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalSpotRangeResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalSpotRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuotes
	 */
	public $GetHistoricalSpotRangeResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuotes GetHistoricalSpotRangeResult
	 * @return XiFuturesTypeGetHistoricalSpotRangeResponse
	 */
	public function __construct($_GetHistoricalSpotRangeResult = null)
	{
		parent::__construct(array('GetHistoricalSpotRangeResult'=>$_GetHistoricalSpotRangeResult));
	}
	/**
	 * Set GetHistoricalSpotRangeResult
	 * @param FutureQuotes GetHistoricalSpotRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalSpotRangeResult($_GetHistoricalSpotRangeResult)
	{
		return ($this->GetHistoricalSpotRangeResult = $_GetHistoricalSpotRangeResult);
	}
	/**
	 * Get GetHistoricalSpotRangeResult
	 * @return XiFuturesTypeFutureQuotes
	 */
	public function getGetHistoricalSpotRangeResult()
	{
		return $this->GetHistoricalSpotRangeResult;
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