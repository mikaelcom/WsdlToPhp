<?php
/**
 * Class file for XiStatisticsTypeGetTopicBinaryChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicBinaryChartCustomResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicBinaryChartCustomResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicBinaryChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicChartBinary
	 */
	public $GetTopicBinaryChartCustomResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicChartBinary GetTopicBinaryChartCustomResult
	 * @return XiStatisticsTypeGetTopicBinaryChartCustomResponse
	 */
	public function __construct($_GetTopicBinaryChartCustomResult = null)
	{
		parent::__construct(array('GetTopicBinaryChartCustomResult'=>$_GetTopicBinaryChartCustomResult));
	}
	/**
	 * Set GetTopicBinaryChartCustomResult
	 * @param TopicChartBinary GetTopicBinaryChartCustomResult
	 * @return TopicChartBinary
	 */
	public function setGetTopicBinaryChartCustomResult($_GetTopicBinaryChartCustomResult)
	{
		return ($this->GetTopicBinaryChartCustomResult = $_GetTopicBinaryChartCustomResult);
	}
	/**
	 * Get GetTopicBinaryChartCustomResult
	 * @return XiStatisticsTypeTopicChartBinary
	 */
	public function getGetTopicBinaryChartCustomResult()
	{
		return $this->GetTopicBinaryChartCustomResult;
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