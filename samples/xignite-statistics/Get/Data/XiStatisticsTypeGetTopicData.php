<?php
/**
 * Class file for XiStatisticsTypeGetTopicData
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicData
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicData extends XiStatisticsWsdlClass
{
	/**
	 * The TopicCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TopicCode;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param string TopicCode
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiStatisticsTypeGetTopicData
	 */
	public function __construct($_TopicCode = null,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('TopicCode'=>$_TopicCode,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set TopicCode
	 * @param string TopicCode
	 * @return string
	 */
	public function setTopicCode($_TopicCode)
	{
		return ($this->TopicCode = $_TopicCode);
	}
	/**
	 * Get TopicCode
	 * @return string
	 */
	public function getTopicCode()
	{
		return $this->TopicCode;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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