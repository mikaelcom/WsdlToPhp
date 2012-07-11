<?php
/**
 * Class file for XiMetalsTypeGetMetalSpotChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetMetalSpotChartCustomResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetMetalSpotChartCustomResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetMetalSpotChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHistoricalChart
	 */
	public $GetMetalSpotChartCustomResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeHistoricalChart GetMetalSpotChartCustomResult
	 * @return XiMetalsTypeGetMetalSpotChartCustomResponse
	 */
	public function __construct($_GetMetalSpotChartCustomResult = null)
	{
		parent::__construct(array('GetMetalSpotChartCustomResult'=>$_GetMetalSpotChartCustomResult));
	}
	/**
	 * Set GetMetalSpotChartCustomResult
	 * @param HistoricalChart GetMetalSpotChartCustomResult
	 * @return HistoricalChart
	 */
	public function setGetMetalSpotChartCustomResult($_GetMetalSpotChartCustomResult)
	{
		return ($this->GetMetalSpotChartCustomResult = $_GetMetalSpotChartCustomResult);
	}
	/**
	 * Get GetMetalSpotChartCustomResult
	 * @return XiMetalsTypeHistoricalChart
	 */
	public function getGetMetalSpotChartCustomResult()
	{
		return $this->GetMetalSpotChartCustomResult;
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