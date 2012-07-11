<?php
/**
 * Class file for XiStatisticsTypeGetChartUrlCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetChartUrlCustomResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetChartUrlCustomResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetChartUrlCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeChart
	 */
	public $GetChartUrlCustomResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeChart GetChartUrlCustomResult
	 * @return XiStatisticsTypeGetChartUrlCustomResponse
	 */
	public function __construct($_GetChartUrlCustomResult = null)
	{
		parent::__construct(array('GetChartUrlCustomResult'=>$_GetChartUrlCustomResult));
	}
	/**
	 * Set GetChartUrlCustomResult
	 * @param Chart GetChartUrlCustomResult
	 * @return Chart
	 */
	public function setGetChartUrlCustomResult($_GetChartUrlCustomResult)
	{
		return ($this->GetChartUrlCustomResult = $_GetChartUrlCustomResult);
	}
	/**
	 * Get GetChartUrlCustomResult
	 * @return XiStatisticsTypeChart
	 */
	public function getGetChartUrlCustomResult()
	{
		return $this->GetChartUrlCustomResult;
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