<?php
/**
 * Class file for XWebForumTypeLoadTopicRequest
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadTopicRequest
 * @date 09/07/2012
 */
class XWebForumTypeLoadTopicRequest extends XWebForumWsdlClass
{
	/**
	 * The Topic_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Topic_ID;
	/**
	 * Constructor
	 * @param positiveInteger Topic_ID
	 * @return XWebForumTypeLoadTopicRequest
	 */
	public function __construct($_Topic_ID)
	{
		parent::__construct(array('Topic_ID'=>$_Topic_ID));
	}
	/**
	 * Set Topic_ID
	 * @param positiveInteger Topic_ID
	 * @return positiveInteger
	 */
	public function setTopic_ID($_Topic_ID)
	{
		return ($this->Topic_ID = $_Topic_ID);
	}
	/**
	 * Get Topic_ID
	 * @return positiveInteger
	 */
	public function getTopic_ID()
	{
		return $this->Topic_ID;
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