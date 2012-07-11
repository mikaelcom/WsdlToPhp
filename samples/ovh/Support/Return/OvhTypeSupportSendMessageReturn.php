<?php
/**
 * Class file for OvhTypeSupportSendMessageReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportSendMessageReturn
 * @date 02/07/2012
 */
class OvhTypeSupportSendMessageReturn extends OvhWsdlClass
{
	/**
	 * The threadId
	 * @var int
	 */
	public $threadId;
	/**
	 * The messageId
	 * @var int
	 */
	public $messageId;
	/**
	 * The dateTime
	 * @var string
	 */
	public $dateTime;
	/**
	 * Constructor
	 * @param int threadId
	 * @param int messageId
	 * @param string dateTime
	 * @return OvhTypeSupportSendMessageReturn
	 */
	public function __construct($_threadId = null,$_messageId = null,$_dateTime = null)
	{
		parent::__construct(array('threadId'=>$_threadId,'messageId'=>$_messageId,'dateTime'=>$_dateTime));
	}
	/**
	 * Set threadId
	 * @param int threadId
	 * @return int
	 */
	public function setThreadId($_threadId)
	{
		return ($this->threadId = $_threadId);
	}
	/**
	 * Get threadId
	 * @return int
	 */
	public function getThreadId()
	{
		return $this->threadId;
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
	 * Set dateTime
	 * @param string dateTime
	 * @return string
	 */
	public function setDateTime($_dateTime)
	{
		return ($this->dateTime = $_dateTime);
	}
	/**
	 * Get dateTime
	 * @return string
	 */
	public function getDateTime()
	{
		return $this->dateTime;
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