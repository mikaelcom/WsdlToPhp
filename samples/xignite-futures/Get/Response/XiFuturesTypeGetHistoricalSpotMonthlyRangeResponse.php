<?php
/**
 * Class file for XiFuturesTypeGetHistoricalSpotMonthlyRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalSpotMonthlyRangeResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalSpotMonthlyRangeResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalSpotMonthlyRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuotes
	 */
	public $GetHistoricalSpotMonthlyRangeResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuotes GetHistoricalSpotMonthlyRangeResult
	 * @return XiFuturesTypeGetHistoricalSpotMonthlyRangeResponse
	 */
	public function __construct($_GetHistoricalSpotMonthlyRangeResult = null)
	{
		parent::__construct(array('GetHistoricalSpotMonthlyRangeResult'=>$_GetHistoricalSpotMonthlyRangeResult));
	}
	/**
	 * Set GetHistoricalSpotMonthlyRangeResult
	 * @param FutureQuotes GetHistoricalSpotMonthlyRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalSpotMonthlyRangeResult($_GetHistoricalSpotMonthlyRangeResult)
	{
		return ($this->GetHistoricalSpotMonthlyRangeResult = $_GetHistoricalSpotMonthlyRangeResult);
	}
	/**
	 * Get GetHistoricalSpotMonthlyRangeResult
	 * @return XiFuturesTypeFutureQuotes
	 */
	public function getGetHistoricalSpotMonthlyRangeResult()
	{
		return $this->GetHistoricalSpotMonthlyRangeResult;
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