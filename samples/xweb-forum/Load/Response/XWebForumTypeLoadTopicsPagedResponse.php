<?php
/**
 * Class file for XWebForumTypeLoadTopicsPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadTopicsPagedResponse
 * @date 09/07/2012
 */
class XWebForumTypeLoadTopicsPagedResponse extends XWebForumWsdlClass
{
	/**
	 * The Topic
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebForumTypeTopic
	 */
	public $Topic;
	/**
	 * The Total_Record_Count
	 * @var anonymous25
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebForumTypeTopic Topic
	 * @param anonymous25 Total_Record_Count
	 * @return XWebForumTypeLoadTopicsPagedResponse
	 */
	public function __construct($_Topic = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('Topic'=>$_Topic,'Total_Record_Count'=>$_Total_Record_Count));
	}
	/**
	 * Set Topic
	 * @param Topic Topic
	 * @return Topic
	 */
	public function setTopic($_Topic)
	{
		return ($this->Topic = $_Topic);
	}
	/**
	 * Get Topic
	 * @return XWebForumTypeTopic
	 */
	public function getTopic()
	{
		return $this->Topic;
	}
	/**
	 * Set Total_Record_Count
	 * @param anonymous25 Total_Record_Count
	 * @return anonymous25
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous25
	 */
	public function getTotal_Record_Count()
	{
		return $this->Total_Record_Count;
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