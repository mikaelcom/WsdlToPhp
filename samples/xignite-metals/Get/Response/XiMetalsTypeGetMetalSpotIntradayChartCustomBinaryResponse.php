<?php
/**
 * Class file for XiMetalsTypeGetMetalSpotIntradayChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetMetalSpotIntradayChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetMetalSpotIntradayChartCustomBinaryResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetMetalSpotIntradayChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartBinary
	 */
	public $GetMetalSpotIntradayChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartBinary GetMetalSpotIntradayChartCustomBinaryResult
	 * @return XiMetalsTypeGetMetalSpotIntradayChartCustomBinaryResponse
	 */
	public function __construct($_GetMetalSpotIntradayChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetMetalSpotIntradayChartCustomBinaryResult'=>$_GetMetalSpotIntradayChartCustomBinaryResult));
	}
	/**
	 * Set GetMetalSpotIntradayChartCustomBinaryResult
	 * @param ChartBinary GetMetalSpotIntradayChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetMetalSpotIntradayChartCustomBinaryResult($_GetMetalSpotIntradayChartCustomBinaryResult)
	{
		return ($this->GetMetalSpotIntradayChartCustomBinaryResult = $_GetMetalSpotIntradayChartCustomBinaryResult);
	}
	/**
	 * Get GetMetalSpotIntradayChartCustomBinaryResult
	 * @return XiMetalsTypeChartBinary
	 */
	public function getGetMetalSpotIntradayChartCustomBinaryResult()
	{
		return $this->GetMetalSpotIntradayChartCustomBinaryResult;
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