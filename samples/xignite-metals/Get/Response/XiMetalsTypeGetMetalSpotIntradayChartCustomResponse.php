<?php
/**
 * Class file for XiMetalsTypeGetMetalSpotIntradayChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetMetalSpotIntradayChartCustomResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetMetalSpotIntradayChartCustomResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetMetalSpotIntradayChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeCurrencyChartIntraday
	 */
	public $GetMetalSpotIntradayChartCustomResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeCurrencyChartIntraday GetMetalSpotIntradayChartCustomResult
	 * @return XiMetalsTypeGetMetalSpotIntradayChartCustomResponse
	 */
	public function __construct($_GetMetalSpotIntradayChartCustomResult = null)
	{
		parent::__construct(array('GetMetalSpotIntradayChartCustomResult'=>$_GetMetalSpotIntradayChartCustomResult));
	}
	/**
	 * Set GetMetalSpotIntradayChartCustomResult
	 * @param CurrencyChartIntraday GetMetalSpotIntradayChartCustomResult
	 * @return CurrencyChartIntraday
	 */
	public function setGetMetalSpotIntradayChartCustomResult($_GetMetalSpotIntradayChartCustomResult)
	{
		return ($this->GetMetalSpotIntradayChartCustomResult = $_GetMetalSpotIntradayChartCustomResult);
	}
	/**
	 * Get GetMetalSpotIntradayChartCustomResult
	 * @return XiMetalsTypeCurrencyChartIntraday
	 */
	public function getGetMetalSpotIntradayChartCustomResult()
	{
		return $this->GetMetalSpotIntradayChartCustomResult;
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