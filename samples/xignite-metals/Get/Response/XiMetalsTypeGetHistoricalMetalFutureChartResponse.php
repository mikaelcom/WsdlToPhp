<?php
/**
 * Class file for XiMetalsTypeGetHistoricalMetalFutureChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalMetalFutureChartResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalMetalFutureChartResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalMetalFutureChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHistoricalFutureChart
	 */
	public $GetHistoricalMetalFutureChartResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeHistoricalFutureChart GetHistoricalMetalFutureChartResult
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartResponse
	 */
	public function __construct($_GetHistoricalMetalFutureChartResult = null)
	{
		parent::__construct(array('GetHistoricalMetalFutureChartResult'=>$_GetHistoricalMetalFutureChartResult));
	}
	/**
	 * Set GetHistoricalMetalFutureChartResult
	 * @param HistoricalFutureChart GetHistoricalMetalFutureChartResult
	 * @return HistoricalFutureChart
	 */
	public function setGetHistoricalMetalFutureChartResult($_GetHistoricalMetalFutureChartResult)
	{
		return ($this->GetHistoricalMetalFutureChartResult = $_GetHistoricalMetalFutureChartResult);
	}
	/**
	 * Get GetHistoricalMetalFutureChartResult
	 * @return XiMetalsTypeHistoricalFutureChart
	 */
	public function getGetHistoricalMetalFutureChartResult()
	{
		return $this->GetHistoricalMetalFutureChartResult;
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