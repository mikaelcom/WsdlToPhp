<?php
/**
 * Class file for XiFuturesTypeGetHistoricalCommodityChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalCommodityChartResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalCommodityChartResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalCommodityChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeHistoricalChart
	 */
	public $GetHistoricalCommodityChartResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeHistoricalChart GetHistoricalCommodityChartResult
	 * @return XiFuturesTypeGetHistoricalCommodityChartResponse
	 */
	public function __construct($_GetHistoricalCommodityChartResult = null)
	{
		parent::__construct(array('GetHistoricalCommodityChartResult'=>$_GetHistoricalCommodityChartResult));
	}
	/**
	 * Set GetHistoricalCommodityChartResult
	 * @param HistoricalChart GetHistoricalCommodityChartResult
	 * @return HistoricalChart
	 */
	public function setGetHistoricalCommodityChartResult($_GetHistoricalCommodityChartResult)
	{
		return ($this->GetHistoricalCommodityChartResult = $_GetHistoricalCommodityChartResult);
	}
	/**
	 * Get GetHistoricalCommodityChartResult
	 * @return XiFuturesTypeHistoricalChart
	 */
	public function getGetHistoricalCommodityChartResult()
	{
		return $this->GetHistoricalCommodityChartResult;
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