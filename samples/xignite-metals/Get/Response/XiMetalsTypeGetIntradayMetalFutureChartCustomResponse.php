<?php
/**
 * Class file for XiMetalsTypeGetIntradayMetalFutureChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetIntradayMetalFutureChartCustomResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetIntradayMetalFutureChartCustomResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetIntradayMetalFutureChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeIntradayChart
	 */
	public $GetIntradayMetalFutureChartCustomResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeIntradayChart GetIntradayMetalFutureChartCustomResult
	 * @return XiMetalsTypeGetIntradayMetalFutureChartCustomResponse
	 */
	public function __construct($_GetIntradayMetalFutureChartCustomResult = null)
	{
		parent::__construct(array('GetIntradayMetalFutureChartCustomResult'=>$_GetIntradayMetalFutureChartCustomResult));
	}
	/**
	 * Set GetIntradayMetalFutureChartCustomResult
	 * @param IntradayChart GetIntradayMetalFutureChartCustomResult
	 * @return IntradayChart
	 */
	public function setGetIntradayMetalFutureChartCustomResult($_GetIntradayMetalFutureChartCustomResult)
	{
		return ($this->GetIntradayMetalFutureChartCustomResult = $_GetIntradayMetalFutureChartCustomResult);
	}
	/**
	 * Get GetIntradayMetalFutureChartCustomResult
	 * @return XiMetalsTypeIntradayChart
	 */
	public function getGetIntradayMetalFutureChartCustomResult()
	{
		return $this->GetIntradayMetalFutureChartCustomResult;
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