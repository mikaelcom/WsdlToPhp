<?php
/**
 * Class file for AmazonQueueServiceTypeSendMessageResult
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSendMessageResult
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSendMessageResult extends AmazonQueueServiceWsdlClass
{
	/**
	 * The MessageId
	 * @var string
	 */
	public $MessageId;
	/**
	 * The MD5OfMessageBody
	 * @var string
	 */
	public $MD5OfMessageBody;
	/**
	 * Constructor
	 * @param string MessageId
	 * @param string MD5OfMessageBody
	 * @return AmazonQueueServiceTypeSendMessageResult
	 */
	public function __construct($_MessageId = null,$_MD5OfMessageBody = null)
	{
		parent::__construct(array('MessageId'=>$_MessageId,'MD5OfMessageBody'=>$_MD5OfMessageBody));
	}
	/**
	 * Set MessageId
	 * @param string MessageId
	 * @return string
	 */
	public function setMessageId($_MessageId)
	{
		return ($this->MessageId = $_MessageId);
	}
	/**
	 * Get MessageId
	 * @return string
	 */
	public function getMessageId()
	{
		return $this->MessageId;
	}
	/**
	 * Set MD5OfMessageBody
	 * @param string MD5OfMessageBody
	 * @return string
	 */
	public function setMD5OfMessageBody($_MD5OfMessageBody)
	{
		return ($this->MD5OfMessageBody = $_MD5OfMessageBody);
	}
	/**
	 * Get MD5OfMessageBody
	 * @return string
	 */
	public function getMD5OfMessageBody()
	{
		return $this->MD5OfMessageBody;
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