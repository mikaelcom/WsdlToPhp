<?php
/**
 * Class file for XWebForumTypeReplies
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeReplies
 * @date 09/07/2012
 */
class XWebForumTypeReplies extends XWebForumWsdlClass
{
	/**
	 * The Reply
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebForumTypeMessage
	 */
	public $Reply;
	/**
	 * Constructor
	 * @param XWebForumTypeMessage Reply
	 * @return XWebForumTypeReplies
	 */
	public function __construct($_Reply = null)
	{
		parent::__construct(array('Reply'=>$_Reply));
	}
	/**
	 * Set Reply
	 * @param Message Reply
	 * @return Message
	 */
	public function setReply($_Reply)
	{
		return ($this->Reply = $_Reply);
	}
	/**
	 * Get Reply
	 * @return XWebForumTypeMessage
	 */
	public function getReply()
	{
		return $this->Reply;
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