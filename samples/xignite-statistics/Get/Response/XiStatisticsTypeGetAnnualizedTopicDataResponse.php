<?php
/**
 * Class file for XiStatisticsTypeGetAnnualizedTopicDataResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetAnnualizedTopicDataResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetAnnualizedTopicDataResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetAnnualizedTopicDataResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeTopicData
	 */
	public $GetAnnualizedTopicDataResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeTopicData GetAnnualizedTopicDataResult
	 * @return XiStatisticsTypeGetAnnualizedTopicDataResponse
	 */
	public function __construct($_GetAnnualizedTopicDataResult = null)
	{
		parent::__construct(array('GetAnnualizedTopicDataResult'=>$_GetAnnualizedTopicDataResult));
	}
	/**
	 * Set GetAnnualizedTopicDataResult
	 * @param TopicData GetAnnualizedTopicDataResult
	 * @return TopicData
	 */
	public function setGetAnnualizedTopicDataResult($_GetAnnualizedTopicDataResult)
	{
		return ($this->GetAnnualizedTopicDataResult = $_GetAnnualizedTopicDataResult);
	}
	/**
	 * Get GetAnnualizedTopicDataResult
	 * @return XiStatisticsTypeTopicData
	 */
	public function getGetAnnualizedTopicDataResult()
	{
		return $this->GetAnnualizedTopicDataResult;
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