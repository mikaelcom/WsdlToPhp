<?php
/**
 * Class file for XWebForumTypeLoadTopicsResponse
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadTopicsResponse
 * @date 09/07/2012
 */
class XWebForumTypeLoadTopicsResponse extends XWebForumWsdlClass
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
	 * Constructor
	 * @param XWebForumTypeTopic Topic
	 * @return XWebForumTypeLoadTopicsResponse
	 */
	public function __construct($_Topic = null)
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