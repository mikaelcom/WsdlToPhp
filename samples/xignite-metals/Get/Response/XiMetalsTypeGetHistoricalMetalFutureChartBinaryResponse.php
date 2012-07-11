<?php
/**
 * Class file for XiMetalsTypeGetHistoricalMetalFutureChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalMetalFutureChartBinaryResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalMetalFutureChartBinaryResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalMetalFutureChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartBinary
	 */
	public $GetHistoricalMetalFutureChartBinaryResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartBinary GetHistoricalMetalFutureChartBinaryResult
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartBinaryResponse
	 */
	public function __construct($_GetHistoricalMetalFutureChartBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalMetalFutureChartBinaryResult'=>$_GetHistoricalMetalFutureChartBinaryResult));
	}
	/**
	 * Set GetHistoricalMetalFutureChartBinaryResult
	 * @param ChartBinary GetHistoricalMetalFutureChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalMetalFutureChartBinaryResult($_GetHistoricalMetalFutureChartBinaryResult)
	{
		return ($this->GetHistoricalMetalFutureChartBinaryResult = $_GetHistoricalMetalFutureChartBinaryResult);
	}
	/**
	 * Get GetHistoricalMetalFutureChartBinaryResult
	 * @return XiMetalsTypeChartBinary
	 */
	public function getGetHistoricalMetalFutureChartBinaryResult()
	{
		return $this->GetHistoricalMetalFutureChartBinaryResult;
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