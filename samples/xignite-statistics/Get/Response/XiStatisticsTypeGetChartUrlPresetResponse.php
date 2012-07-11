<?php
/**
 * Class file for XiStatisticsTypeGetChartUrlPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetChartUrlPresetResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetChartUrlPresetResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetChartUrlPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeChart
	 */
	public $GetChartUrlPresetResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeChart GetChartUrlPresetResult
	 * @return XiStatisticsTypeGetChartUrlPresetResponse
	 */
	public function __construct($_GetChartUrlPresetResult = null)
	{
		parent::__construct(array('GetChartUrlPresetResult'=>$_GetChartUrlPresetResult));
	}
	/**
	 * Set GetChartUrlPresetResult
	 * @param Chart GetChartUrlPresetResult
	 * @return Chart
	 */
	public function setGetChartUrlPresetResult($_GetChartUrlPresetResult)
	{
		return ($this->GetChartUrlPresetResult = $_GetChartUrlPresetResult);
	}
	/**
	 * Get GetChartUrlPresetResult
	 * @return XiStatisticsTypeChart
	 */
	public function getGetChartUrlPresetResult()
	{
		return $this->GetChartUrlPresetResult;
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