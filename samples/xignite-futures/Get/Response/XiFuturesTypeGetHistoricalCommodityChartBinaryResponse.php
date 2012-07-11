<?php
/**
 * Class file for XiFuturesTypeGetHistoricalCommodityChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalCommodityChartBinaryResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalCommodityChartBinaryResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalCommodityChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartBinary
	 */
	public $GetHistoricalCommodityChartBinaryResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartBinary GetHistoricalCommodityChartBinaryResult
	 * @return XiFuturesTypeGetHistoricalCommodityChartBinaryResponse
	 */
	public function __construct($_GetHistoricalCommodityChartBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalCommodityChartBinaryResult'=>$_GetHistoricalCommodityChartBinaryResult));
	}
	/**
	 * Set GetHistoricalCommodityChartBinaryResult
	 * @param ChartBinary GetHistoricalCommodityChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalCommodityChartBinaryResult($_GetHistoricalCommodityChartBinaryResult)
	{
		return ($this->GetHistoricalCommodityChartBinaryResult = $_GetHistoricalCommodityChartBinaryResult);
	}
	/**
	 * Get GetHistoricalCommodityChartBinaryResult
	 * @return XiFuturesTypeChartBinary
	 */
	public function getGetHistoricalCommodityChartBinaryResult()
	{
		return $this->GetHistoricalCommodityChartBinaryResult;
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