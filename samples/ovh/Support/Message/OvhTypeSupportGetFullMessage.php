<?php
/**
 * Class file for OvhTypeSupportGetFullMessage
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportGetFullMessage
 * @date 02/07/2012
 */
class OvhTypeSupportGetFullMessage extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The messageId
	 * @var int
	 */
	public $messageId;
	/**
	 * Constructor
	 * @param string session
	 * @param int messageId
	 * @return OvhTypeSupportGetFullMessage
	 */
	public function __construct($_session = null,$_messageId = null)
	{
		parent::__construct(array('session'=>$_session,'messageId'=>$_messageId));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set messageId
	 * @param int messageId
	 * @return int
	 */
	public function setMessageId($_messageId)
	{
		return ($this->messageId = $_messageId);
	}
	/**
	 * Get messageId
	 * @return int
	 */
	public function getMessageId()
	{
		return $this->messageId;
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