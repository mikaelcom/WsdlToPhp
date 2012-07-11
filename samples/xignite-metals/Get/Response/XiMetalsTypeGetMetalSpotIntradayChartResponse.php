<?php
/**
 * Class file for XiMetalsTypeGetMetalSpotIntradayChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetMetalSpotIntradayChartResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetMetalSpotIntradayChartResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetMetalSpotIntradayChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeCurrencyChartIntraday
	 */
	public $GetMetalSpotIntradayChartResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeCurrencyChartIntraday GetMetalSpotIntradayChartResult
	 * @return XiMetalsTypeGetMetalSpotIntradayChartResponse
	 */
	public function __construct($_GetMetalSpotIntradayChartResult = null)
	{
		parent::__construct(array('GetMetalSpotIntradayChartResult'=>$_GetMetalSpotIntradayChartResult));
	}
	/**
	 * Set GetMetalSpotIntradayChartResult
	 * @param CurrencyChartIntraday GetMetalSpotIntradayChartResult
	 * @return CurrencyChartIntraday
	 */
	public function setGetMetalSpotIntradayChartResult($_GetMetalSpotIntradayChartResult)
	{
		return ($this->GetMetalSpotIntradayChartResult = $_GetMetalSpotIntradayChartResult);
	}
	/**
	 * Get GetMetalSpotIntradayChartResult
	 * @return XiMetalsTypeCurrencyChartIntraday
	 */
	public function getGetMetalSpotIntradayChartResult()
	{
		return $this->GetMetalSpotIntradayChartResult;
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