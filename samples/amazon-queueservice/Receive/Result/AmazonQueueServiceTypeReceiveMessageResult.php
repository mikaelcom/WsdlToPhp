<?php
/**
 * Class file for AmazonQueueServiceTypeReceiveMessageResult
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeReceiveMessageResult
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeReceiveMessageResult extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Message
	 * @var AmazonQueueServiceTypeMessage
	 */
	public $Message;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeMessage Message
	 * @return AmazonQueueServiceTypeReceiveMessageResult
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
	 * @return AmazonQueueServiceTypeMessage
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