<?php
/**
 * Class file for XiStatisticsTypeGetTopicChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicChartResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicChartResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicChart
	 */
	public $GetTopicChartResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicChart GetTopicChartResult
	 * @return XiStatisticsTypeGetTopicChartResponse
	 */
	public function __construct($_GetTopicChartResult = null)
	{
		parent::__construct(array('GetTopicChartResult'=>$_GetTopicChartResult));
	}
	/**
	 * Set GetTopicChartResult
	 * @param TopicChart GetTopicChartResult
	 * @return TopicChart
	 */
	public function setGetTopicChartResult($_GetTopicChartResult)
	{
		return ($this->GetTopicChartResult = $_GetTopicChartResult);
	}
	/**
	 * Get GetTopicChartResult
	 * @return XiStatisticsTypeTopicChart
	 */
	public function getGetTopicChartResult()
	{
		return $this->GetTopicChartResult;
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