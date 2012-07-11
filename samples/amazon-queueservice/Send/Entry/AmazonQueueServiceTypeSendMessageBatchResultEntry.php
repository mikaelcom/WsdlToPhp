<?php
/**
 * Class file for AmazonQueueServiceTypeSendMessageBatchResultEntry
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSendMessageBatchResultEntry
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSendMessageBatchResultEntry extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Id
	 * @var string
	 */
	public $Id;
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
	 * @param string Id
	 * @param string MessageId
	 * @param string MD5OfMessageBody
	 * @return AmazonQueueServiceTypeSendMessageBatchResultEntry
	 */
	public function __construct($_Id = null,$_MessageId = null,$_MD5OfMessageBody = null)
	{
		parent::__construct(array('Id'=>$_Id,'MessageId'=>$_MessageId,'MD5OfMessageBody'=>$_MD5OfMessageBody));
	}
	/**
	 * Set Id
	 * @param string Id
	 * @return string
	 */
	public function setId($_Id)
	{
		return ($this->Id = $_Id);
	}
	/**
	 * Get Id
	 * @return string
	 */
	public function getId()
	{
		return $this->Id;
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