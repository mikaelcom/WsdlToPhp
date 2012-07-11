<?php
/**
 * Class file for XiMetalsTypeGetIntradayMetalFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetIntradayMetalFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetIntradayMetalFutureChartCustomBinaryResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetIntradayMetalFutureChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartBinary
	 */
	public $GetIntradayMetalFutureChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartBinary GetIntradayMetalFutureChartCustomBinaryResult
	 * @return XiMetalsTypeGetIntradayMetalFutureChartCustomBinaryResponse
	 */
	public function __construct($_GetIntradayMetalFutureChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetIntradayMetalFutureChartCustomBinaryResult'=>$_GetIntradayMetalFutureChartCustomBinaryResult));
	}
	/**
	 * Set GetIntradayMetalFutureChartCustomBinaryResult
	 * @param ChartBinary GetIntradayMetalFutureChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetIntradayMetalFutureChartCustomBinaryResult($_GetIntradayMetalFutureChartCustomBinaryResult)
	{
		return ($this->GetIntradayMetalFutureChartCustomBinaryResult = $_GetIntradayMetalFutureChartCustomBinaryResult);
	}
	/**
	 * Get GetIntradayMetalFutureChartCustomBinaryResult
	 * @return XiMetalsTypeChartBinary
	 */
	public function getGetIntradayMetalFutureChartCustomBinaryResult()
	{
		return $this->GetIntradayMetalFutureChartCustomBinaryResult;
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