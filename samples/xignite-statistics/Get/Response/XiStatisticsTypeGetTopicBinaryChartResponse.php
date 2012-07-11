<?php
/**
 * Class file for XiStatisticsTypeGetTopicBinaryChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicBinaryChartResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicBinaryChartResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicBinaryChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicChartBinary
	 */
	public $GetTopicBinaryChartResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicChartBinary GetTopicBinaryChartResult
	 * @return XiStatisticsTypeGetTopicBinaryChartResponse
	 */
	public function __construct($_GetTopicBinaryChartResult = null)
	{
		parent::__construct(array('GetTopicBinaryChartResult'=>$_GetTopicBinaryChartResult));
	}
	/**
	 * Set GetTopicBinaryChartResult
	 * @param TopicChartBinary GetTopicBinaryChartResult
	 * @return TopicChartBinary
	 */
	public function setGetTopicBinaryChartResult($_GetTopicBinaryChartResult)
	{
		return ($this->GetTopicBinaryChartResult = $_GetTopicBinaryChartResult);
	}
	/**
	 * Get GetTopicBinaryChartResult
	 * @return XiStatisticsTypeTopicChartBinary
	 */
	public function getGetTopicBinaryChartResult()
	{
		return $this->GetTopicBinaryChartResult;
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