<?php
/**
 * Class file for XiStatisticsTypeGetTopicBinaryChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicBinaryChartPresetResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicBinaryChartPresetResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicBinaryChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicChartBinary
	 */
	public $GetTopicBinaryChartPresetResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicChartBinary GetTopicBinaryChartPresetResult
	 * @return XiStatisticsTypeGetTopicBinaryChartPresetResponse
	 */
	public function __construct($_GetTopicBinaryChartPresetResult = null)
	{
		parent::__construct(array('GetTopicBinaryChartPresetResult'=>$_GetTopicBinaryChartPresetResult));
	}
	/**
	 * Set GetTopicBinaryChartPresetResult
	 * @param TopicChartBinary GetTopicBinaryChartPresetResult
	 * @return TopicChartBinary
	 */
	public function setGetTopicBinaryChartPresetResult($_GetTopicBinaryChartPresetResult)
	{
		return ($this->GetTopicBinaryChartPresetResult = $_GetTopicBinaryChartPresetResult);
	}
	/**
	 * Get GetTopicBinaryChartPresetResult
	 * @return XiStatisticsTypeTopicChartBinary
	 */
	public function getGetTopicBinaryChartPresetResult()
	{
		return $this->GetTopicBinaryChartPresetResult;
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