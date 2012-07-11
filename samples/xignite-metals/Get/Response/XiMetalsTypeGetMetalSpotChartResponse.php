<?php
/**
 * Class file for XiMetalsTypeGetMetalSpotChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetMetalSpotChartResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetMetalSpotChartResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetMetalSpotChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHistoricalChart
	 */
	public $GetMetalSpotChartResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeHistoricalChart GetMetalSpotChartResult
	 * @return XiMetalsTypeGetMetalSpotChartResponse
	 */
	public function __construct($_GetMetalSpotChartResult = null)
	{
		parent::__construct(array('GetMetalSpotChartResult'=>$_GetMetalSpotChartResult));
	}
	/**
	 * Set GetMetalSpotChartResult
	 * @param HistoricalChart GetMetalSpotChartResult
	 * @return HistoricalChart
	 */
	public function setGetMetalSpotChartResult($_GetMetalSpotChartResult)
	{
		return ($this->GetMetalSpotChartResult = $_GetMetalSpotChartResult);
	}
	/**
	 * Get GetMetalSpotChartResult
	 * @return XiMetalsTypeHistoricalChart
	 */
	public function getGetMetalSpotChartResult()
	{
		return $this->GetMetalSpotChartResult;
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