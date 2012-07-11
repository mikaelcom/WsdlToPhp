<?php
/**
 * Class file for XiFuturesTypeGetHistoricalCommodityChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalCommodityChartCustomResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalCommodityChartCustomResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalCommodityChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeHistoricalChart
	 */
	public $GetHistoricalCommodityChartCustomResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeHistoricalChart GetHistoricalCommodityChartCustomResult
	 * @return XiFuturesTypeGetHistoricalCommodityChartCustomResponse
	 */
	public function __construct($_GetHistoricalCommodityChartCustomResult = null)
	{
		parent::__construct(array('GetHistoricalCommodityChartCustomResult'=>$_GetHistoricalCommodityChartCustomResult));
	}
	/**
	 * Set GetHistoricalCommodityChartCustomResult
	 * @param HistoricalChart GetHistoricalCommodityChartCustomResult
	 * @return HistoricalChart
	 */
	public function setGetHistoricalCommodityChartCustomResult($_GetHistoricalCommodityChartCustomResult)
	{
		return ($this->GetHistoricalCommodityChartCustomResult = $_GetHistoricalCommodityChartCustomResult);
	}
	/**
	 * Get GetHistoricalCommodityChartCustomResult
	 * @return XiFuturesTypeHistoricalChart
	 */
	public function getGetHistoricalCommodityChartCustomResult()
	{
		return $this->GetHistoricalCommodityChartCustomResult;
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