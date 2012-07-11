<?php
/**
 * Class file for XiMetalsTypeGetHistoricalMetalFutureChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalMetalFutureChartCustomResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalMetalFutureChartCustomResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalMetalFutureChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHistoricalFutureChart
	 */
	public $GetHistoricalMetalFutureChartCustomResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeHistoricalFutureChart GetHistoricalMetalFutureChartCustomResult
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartCustomResponse
	 */
	public function __construct($_GetHistoricalMetalFutureChartCustomResult = null)
	{
		parent::__construct(array('GetHistoricalMetalFutureChartCustomResult'=>$_GetHistoricalMetalFutureChartCustomResult));
	}
	/**
	 * Set GetHistoricalMetalFutureChartCustomResult
	 * @param HistoricalFutureChart GetHistoricalMetalFutureChartCustomResult
	 * @return HistoricalFutureChart
	 */
	public function setGetHistoricalMetalFutureChartCustomResult($_GetHistoricalMetalFutureChartCustomResult)
	{
		return ($this->GetHistoricalMetalFutureChartCustomResult = $_GetHistoricalMetalFutureChartCustomResult);
	}
	/**
	 * Get GetHistoricalMetalFutureChartCustomResult
	 * @return XiMetalsTypeHistoricalFutureChart
	 */
	public function getGetHistoricalMetalFutureChartCustomResult()
	{
		return $this->GetHistoricalMetalFutureChartCustomResult;
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