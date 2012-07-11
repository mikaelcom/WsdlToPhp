<?php
/**
 * Class file for AmazonQueueServiceTypeMessage
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeMessage
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeMessage extends AmazonQueueServiceWsdlClass
{
	/**
	 * The MessageId
	 * @var string
	 */
	public $MessageId;
	/**
	 * The ReceiptHandle
	 * @var string
	 */
	public $ReceiptHandle;
	/**
	 * The MD5OfBody
	 * @var string
	 */
	public $MD5OfBody;
	/**
	 * The Body
	 * @var string
	 */
	public $Body;
	/**
	 * The Attribute
	 * @var AmazonQueueServiceTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param string MessageId
	 * @param string ReceiptHandle
	 * @param string MD5OfBody
	 * @param string Body
	 * @param AmazonQueueServiceTypeAttribute Attribute
	 * @return AmazonQueueServiceTypeMessage
	 */
	public function __construct($_MessageId = null,$_ReceiptHandle = null,$_MD5OfBody = null,$_Body = null,$_Attribute = null)
	{
		parent::__construct(array('MessageId'=>$_MessageId,'ReceiptHandle'=>$_ReceiptHandle,'MD5OfBody'=>$_MD5OfBody,'Body'=>$_Body,'Attribute'=>$_Attribute));
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
	 * Set ReceiptHandle
	 * @param string ReceiptHandle
	 * @return string
	 */
	public function setReceiptHandle($_ReceiptHandle)
	{
		return ($this->ReceiptHandle = $_ReceiptHandle);
	}
	/**
	 * Get ReceiptHandle
	 * @return string
	 */
	public function getReceiptHandle()
	{
		return $this->ReceiptHandle;
	}
	/**
	 * Set MD5OfBody
	 * @param string MD5OfBody
	 * @return string
	 */
	public function setMD5OfBody($_MD5OfBody)
	{
		return ($this->MD5OfBody = $_MD5OfBody);
	}
	/**
	 * Get MD5OfBody
	 * @return string
	 */
	public function getMD5OfBody()
	{
		return $this->MD5OfBody;
	}
	/**
	 * Set Body
	 * @param string Body
	 * @return string
	 */
	public function setBody($_Body)
	{
		return ($this->Body = $_Body);
	}
	/**
	 * Get Body
	 * @return string
	 */
	public function getBody()
	{
		return $this->Body;
	}
	/**
	 * Set Attribute
	 * @param Attribute Attribute
	 * @return Attribute
	 */
	public function setAttribute($_Attribute)
	{
		return ($this->Attribute = $_Attribute);
	}
	/**
	 * Get Attribute
	 * @return AmazonQueueServiceTypeAttribute
	 */
	public function getAttribute()
	{
		return $this->Attribute;
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