<?php
/**
 * Class file for XiFuturesTypeGetHistoricalCommodityChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalCommodityChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalCommodityChartCustomBinaryResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalCommodityChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartBinary
	 */
	public $GetHistoricalCommodityChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartBinary GetHistoricalCommodityChartCustomBinaryResult
	 * @return XiFuturesTypeGetHistoricalCommodityChartCustomBinaryResponse
	 */
	public function __construct($_GetHistoricalCommodityChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalCommodityChartCustomBinaryResult'=>$_GetHistoricalCommodityChartCustomBinaryResult));
	}
	/**
	 * Set GetHistoricalCommodityChartCustomBinaryResult
	 * @param ChartBinary GetHistoricalCommodityChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalCommodityChartCustomBinaryResult($_GetHistoricalCommodityChartCustomBinaryResult)
	{
		return ($this->GetHistoricalCommodityChartCustomBinaryResult = $_GetHistoricalCommodityChartCustomBinaryResult);
	}
	/**
	 * Get GetHistoricalCommodityChartCustomBinaryResult
	 * @return XiFuturesTypeChartBinary
	 */
	public function getGetHistoricalCommodityChartCustomBinaryResult()
	{
		return $this->GetHistoricalCommodityChartCustomBinaryResult;
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