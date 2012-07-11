<?php
/**
 * Class file for XiStatisticsTypeGetTopicChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicChartPresetResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicChartPresetResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicChart
	 */
	public $GetTopicChartPresetResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicChart GetTopicChartPresetResult
	 * @return XiStatisticsTypeGetTopicChartPresetResponse
	 */
	public function __construct($_GetTopicChartPresetResult = null)
	{
		parent::__construct(array('GetTopicChartPresetResult'=>$_GetTopicChartPresetResult));
	}
	/**
	 * Set GetTopicChartPresetResult
	 * @param TopicChart GetTopicChartPresetResult
	 * @return TopicChart
	 */
	public function setGetTopicChartPresetResult($_GetTopicChartPresetResult)
	{
		return ($this->GetTopicChartPresetResult = $_GetTopicChartPresetResult);
	}
	/**
	 * Get GetTopicChartPresetResult
	 * @return XiStatisticsTypeTopicChart
	 */
	public function getGetTopicChartPresetResult()
	{
		return $this->GetTopicChartPresetResult;
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