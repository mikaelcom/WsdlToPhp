<?php
/**
 * Class file for XiMetalsTypeGetIntradayMetalFutureChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetIntradayMetalFutureChartResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetIntradayMetalFutureChartResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetIntradayMetalFutureChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeIntradayChart
	 */
	public $GetIntradayMetalFutureChartResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeIntradayChart GetIntradayMetalFutureChartResult
	 * @return XiMetalsTypeGetIntradayMetalFutureChartResponse
	 */
	public function __construct($_GetIntradayMetalFutureChartResult = null)
	{
		parent::__construct(array('GetIntradayMetalFutureChartResult'=>$_GetIntradayMetalFutureChartResult));
	}
	/**
	 * Set GetIntradayMetalFutureChartResult
	 * @param IntradayChart GetIntradayMetalFutureChartResult
	 * @return IntradayChart
	 */
	public function setGetIntradayMetalFutureChartResult($_GetIntradayMetalFutureChartResult)
	{
		return ($this->GetIntradayMetalFutureChartResult = $_GetIntradayMetalFutureChartResult);
	}
	/**
	 * Get GetIntradayMetalFutureChartResult
	 * @return XiMetalsTypeIntradayChart
	 */
	public function getGetIntradayMetalFutureChartResult()
	{
		return $this->GetIntradayMetalFutureChartResult;
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