<?php
/**
 * Class file for XiStatisticsTypeGetTopicDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicDetailsResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicDetailsResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicDetail
	 */
	public $GetTopicDetailsResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicDetail GetTopicDetailsResult
	 * @return XiStatisticsTypeGetTopicDetailsResponse
	 */
	public function __construct($_GetTopicDetailsResult = null)
	{
		parent::__construct(array('GetTopicDetailsResult'=>$_GetTopicDetailsResult));
	}
	/**
	 * Set GetTopicDetailsResult
	 * @param TopicDetail GetTopicDetailsResult
	 * @return TopicDetail
	 */
	public function setGetTopicDetailsResult($_GetTopicDetailsResult)
	{
		return ($this->GetTopicDetailsResult = $_GetTopicDetailsResult);
	}
	/**
	 * Get GetTopicDetailsResult
	 * @return XiStatisticsTypeTopicDetail
	 */
	public function getGetTopicDetailsResult()
	{
		return $this->GetTopicDetailsResult;
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