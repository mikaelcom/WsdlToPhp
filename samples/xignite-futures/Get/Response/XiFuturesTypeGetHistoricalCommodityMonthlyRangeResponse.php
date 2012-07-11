<?php
/**
 * Class file for XiFuturesTypeGetHistoricalCommodityMonthlyRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalCommodityMonthlyRangeResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalCommodityMonthlyRangeResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalCommodityMonthlyRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuotes
	 */
	public $GetHistoricalCommodityMonthlyRangeResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuotes GetHistoricalCommodityMonthlyRangeResult
	 * @return XiFuturesTypeGetHistoricalCommodityMonthlyRangeResponse
	 */
	public function __construct($_GetHistoricalCommodityMonthlyRangeResult = null)
	{
		parent::__construct(array('GetHistoricalCommodityMonthlyRangeResult'=>$_GetHistoricalCommodityMonthlyRangeResult));
	}
	/**
	 * Set GetHistoricalCommodityMonthlyRangeResult
	 * @param FutureQuotes GetHistoricalCommodityMonthlyRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalCommodityMonthlyRangeResult($_GetHistoricalCommodityMonthlyRangeResult)
	{
		return ($this->GetHistoricalCommodityMonthlyRangeResult = $_GetHistoricalCommodityMonthlyRangeResult);
	}
	/**
	 * Get GetHistoricalCommodityMonthlyRangeResult
	 * @return XiFuturesTypeFutureQuotes
	 */
	public function getGetHistoricalCommodityMonthlyRangeResult()
	{
		return $this->GetHistoricalCommodityMonthlyRangeResult;
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