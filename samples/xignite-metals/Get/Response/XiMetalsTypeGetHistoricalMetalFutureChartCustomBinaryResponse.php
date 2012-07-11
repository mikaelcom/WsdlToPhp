<?php
/**
 * Class file for XiMetalsTypeGetHistoricalMetalFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalMetalFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalMetalFutureChartCustomBinaryResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalMetalFutureChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartBinary
	 */
	public $GetHistoricalMetalFutureChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartBinary GetHistoricalMetalFutureChartCustomBinaryResult
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartCustomBinaryResponse
	 */
	public function __construct($_GetHistoricalMetalFutureChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalMetalFutureChartCustomBinaryResult'=>$_GetHistoricalMetalFutureChartCustomBinaryResult));
	}
	/**
	 * Set GetHistoricalMetalFutureChartCustomBinaryResult
	 * @param ChartBinary GetHistoricalMetalFutureChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalMetalFutureChartCustomBinaryResult($_GetHistoricalMetalFutureChartCustomBinaryResult)
	{
		return ($this->GetHistoricalMetalFutureChartCustomBinaryResult = $_GetHistoricalMetalFutureChartCustomBinaryResult);
	}
	/**
	 * Get GetHistoricalMetalFutureChartCustomBinaryResult
	 * @return XiMetalsTypeChartBinary
	 */
	public function getGetHistoricalMetalFutureChartCustomBinaryResult()
	{
		return $this->GetHistoricalMetalFutureChartCustomBinaryResult;
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