<?php
/**
 * Class file for XiStatisticsTypeGetChartUrlResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetChartUrlResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetChartUrlResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetChartUrlResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeChart
	 */
	public $GetChartUrlResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeChart GetChartUrlResult
	 * @return XiStatisticsTypeGetChartUrlResponse
	 */
	public function __construct($_GetChartUrlResult = null)
	{
		parent::__construct(array('GetChartUrlResult'=>$_GetChartUrlResult));
	}
	/**
	 * Set GetChartUrlResult
	 * @param Chart GetChartUrlResult
	 * @return Chart
	 */
	public function setGetChartUrlResult($_GetChartUrlResult)
	{
		return ($this->GetChartUrlResult = $_GetChartUrlResult);
	}
	/**
	 * Get GetChartUrlResult
	 * @return XiStatisticsTypeChart
	 */
	public function getGetChartUrlResult()
	{
		return $this->GetChartUrlResult;
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