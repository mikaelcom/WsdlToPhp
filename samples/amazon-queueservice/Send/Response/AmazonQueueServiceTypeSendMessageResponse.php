<?php
/**
 * Class file for AmazonQueueServiceTypeSendMessageResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSendMessageResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSendMessageResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The SendMessageResult
	 * @var AmazonQueueServiceTypeSendMessageResult
	 */
	public $SendMessageResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeSendMessageResult SendMessageResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeSendMessageResponse
	 */
	public function __construct($_SendMessageResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('SendMessageResult'=>$_SendMessageResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set SendMessageResult
	 * @param SendMessageResult SendMessageResult
	 * @return SendMessageResult
	 */
	public function setSendMessageResult($_SendMessageResult)
	{
		return ($this->SendMessageResult = $_SendMessageResult);
	}
	/**
	 * Get SendMessageResult
	 * @return AmazonQueueServiceTypeSendMessageResult
	 */
	public function getSendMessageResult()
	{
		return $this->SendMessageResult;
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonQueueServiceTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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