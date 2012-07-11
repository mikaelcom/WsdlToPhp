<?php
/**
 * Class file for XiStatisticsTypeGetTopicStatisticsResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicStatisticsResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicStatisticsResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicStatisticsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicStatistics
	 */
	public $GetTopicStatisticsResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicStatistics GetTopicStatisticsResult
	 * @return XiStatisticsTypeGetTopicStatisticsResponse
	 */
	public function __construct($_GetTopicStatisticsResult = null)
	{
		parent::__construct(array('GetTopicStatisticsResult'=>$_GetTopicStatisticsResult));
	}
	/**
	 * Set GetTopicStatisticsResult
	 * @param TopicStatistics GetTopicStatisticsResult
	 * @return TopicStatistics
	 */
	public function setGetTopicStatisticsResult($_GetTopicStatisticsResult)
	{
		return ($this->GetTopicStatisticsResult = $_GetTopicStatisticsResult);
	}
	/**
	 * Get GetTopicStatisticsResult
	 * @return XiStatisticsTypeTopicStatistics
	 */
	public function getGetTopicStatisticsResult()
	{
		return $this->GetTopicStatisticsResult;
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