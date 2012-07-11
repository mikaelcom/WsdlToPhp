<?php
/**
 * Class file for XWebForumTypeLoadTopicResponse
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadTopicResponse
 * @date 09/07/2012
 */
class XWebForumTypeLoadTopicResponse extends XWebForumWsdlClass
{
	/**
	 * The Topic
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebForumTypeTopic
	 */
	public $Topic;
	/**
	 * Constructor
	 * @param XWebForumTypeTopic Topic
	 * @return XWebForumTypeLoadTopicResponse
	 */
	public function __construct($_Topic)
	{
		parent::__construct(array('Topic'=>$_Topic));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>