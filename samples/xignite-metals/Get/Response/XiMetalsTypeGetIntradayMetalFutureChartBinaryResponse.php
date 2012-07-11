<?php
/**
 * Class file for XiMetalsTypeGetIntradayMetalFutureChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetIntradayMetalFutureChartBinaryResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetIntradayMetalFutureChartBinaryResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetIntradayMetalFutureChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartBinary
	 */
	public $GetIntradayMetalFutureChartBinaryResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartBinary GetIntradayMetalFutureChartBinaryResult
	 * @return XiMetalsTypeGetIntradayMetalFutureChartBinaryResponse
	 */
	public function __construct($_GetIntradayMetalFutureChartBinaryResult = null)
	{
		parent::__construct(array('GetIntradayMetalFutureChartBinaryResult'=>$_GetIntradayMetalFutureChartBinaryResult));
	}
	/**
	 * Set GetIntradayMetalFutureChartBinaryResult
	 * @param ChartBinary GetIntradayMetalFutureChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetIntradayMetalFutureChartBinaryResult($_GetIntradayMetalFutureChartBinaryResult)
	{
		return ($this->GetIntradayMetalFutureChartBinaryResult = $_GetIntradayMetalFutureChartBinaryResult);
	}
	/**
	 * Get GetIntradayMetalFutureChartBinaryResult
	 * @return XiMetalsTypeChartBinary
	 */
	public function getGetIntradayMetalFutureChartBinaryResult()
	{
		return $this->GetIntradayMetalFutureChartBinaryResult;
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