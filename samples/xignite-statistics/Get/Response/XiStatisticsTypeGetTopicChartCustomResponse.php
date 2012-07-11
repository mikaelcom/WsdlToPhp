<?php
/**
 * Class file for XiStatisticsTypeGetTopicChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicChartCustomResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicChartCustomResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicChart
	 */
	public $GetTopicChartCustomResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicChart GetTopicChartCustomResult
	 * @return XiStatisticsTypeGetTopicChartCustomResponse
	 */
	public function __construct($_GetTopicChartCustomResult = null)
	{
		parent::__construct(array('GetTopicChartCustomResult'=>$_GetTopicChartCustomResult));
	}
	/**
	 * Set GetTopicChartCustomResult
	 * @param TopicChart GetTopicChartCustomResult
	 * @return TopicChart
	 */
	public function setGetTopicChartCustomResult($_GetTopicChartCustomResult)
	{
		return ($this->GetTopicChartCustomResult = $_GetTopicChartCustomResult);
	}
	/**
	 * Get GetTopicChartCustomResult
	 * @return XiStatisticsTypeTopicChart
	 */
	public function getGetTopicChartCustomResult()
	{
		return $this->GetTopicChartCustomResult;
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