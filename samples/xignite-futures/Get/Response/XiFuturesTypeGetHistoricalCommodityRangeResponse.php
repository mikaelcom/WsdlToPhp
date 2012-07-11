<?php
/**
 * Class file for XiFuturesTypeGetHistoricalCommodityRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalCommodityRangeResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalCommodityRangeResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalCommodityRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuotes
	 */
	public $GetHistoricalCommodityRangeResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuotes GetHistoricalCommodityRangeResult
	 * @return XiFuturesTypeGetHistoricalCommodityRangeResponse
	 */
	public function __construct($_GetHistoricalCommodityRangeResult = null)
	{
		parent::__construct(array('GetHistoricalCommodityRangeResult'=>$_GetHistoricalCommodityRangeResult));
	}
	/**
	 * Set GetHistoricalCommodityRangeResult
	 * @param FutureQuotes GetHistoricalCommodityRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalCommodityRangeResult($_GetHistoricalCommodityRangeResult)
	{
		return ($this->GetHistoricalCommodityRangeResult = $_GetHistoricalCommodityRangeResult);
	}
	/**
	 * Get GetHistoricalCommodityRangeResult
	 * @return XiFuturesTypeFutureQuotes
	 */
	public function getGetHistoricalCommodityRangeResult()
	{
		return $this->GetHistoricalCommodityRangeResult;
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