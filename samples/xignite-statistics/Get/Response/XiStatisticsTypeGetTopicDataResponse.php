<?php
/**
 * Class file for XiStatisticsTypeGetTopicDataResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicDataResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicDataResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicDataResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicData
	 */
	public $GetTopicDataResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicData GetTopicDataResult
	 * @return XiStatisticsTypeGetTopicDataResponse
	 */
	public function __construct($_GetTopicDataResult = null)
	{
		parent::__construct(array('GetTopicDataResult'=>$_GetTopicDataResult));
	}
	/**
	 * Set GetTopicDataResult
	 * @param TopicData GetTopicDataResult
	 * @return TopicData
	 */
	public function setGetTopicDataResult($_GetTopicDataResult)
	{
		return ($this->GetTopicDataResult = $_GetTopicDataResult);
	}
	/**
	 * Get GetTopicDataResult
	 * @return XiStatisticsTypeTopicData
	 */
	public function getGetTopicDataResult()
	{
		return $this->GetTopicDataResult;
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