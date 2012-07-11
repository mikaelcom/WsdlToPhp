<?php
/**
 * Class file for XWebForumTypeLoadPersonalizedMessagesResponse
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadPersonalizedMessagesResponse
 * @date 09/07/2012
 */
class XWebForumTypeLoadPersonalizedMessagesResponse extends XWebForumWsdlClass
{
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebForumTypeMessage
	 */
	public $Message;
	/**
	 * Constructor
	 * @param XWebForumTypeMessage Message
	 * @return XWebForumTypeLoadPersonalizedMessagesResponse
	 */
	public function __construct($_Message = null)
	{
		parent::__construct(array('Message'=>$_Message));
	}
	/**
	 * Set Message
	 * @param Message Message
	 * @return Message
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return XWebForumTypeMessage
	 */
	public function getMessage()
	{
		return $this->Message;
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