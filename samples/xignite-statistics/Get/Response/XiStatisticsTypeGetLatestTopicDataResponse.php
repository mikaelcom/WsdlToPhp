<?php
/**
 * Class file for XiStatisticsTypeGetLatestTopicDataResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetLatestTopicDataResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetLatestTopicDataResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetLatestTopicDataResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicData
	 */
	public $GetLatestTopicDataResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicData GetLatestTopicDataResult
	 * @return XiStatisticsTypeGetLatestTopicDataResponse
	 */
	public function __construct($_GetLatestTopicDataResult = null)
	{
		parent::__construct(array('GetLatestTopicDataResult'=>$_GetLatestTopicDataResult));
	}
	/**
	 * Set GetLatestTopicDataResult
	 * @param TopicData GetLatestTopicDataResult
	 * @return TopicData
	 */
	public function setGetLatestTopicDataResult($_GetLatestTopicDataResult)
	{
		return ($this->GetLatestTopicDataResult = $_GetLatestTopicDataResult);
	}
	/**
	 * Get GetLatestTopicDataResult
	 * @return XiStatisticsTypeTopicData
	 */
	public function getGetLatestTopicDataResult()
	{
		return $this->GetLatestTopicDataResult;
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