<?php
/**
 * Class file for AmazonQueueServiceTypeSendMessageBatchResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSendMessageBatchResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSendMessageBatchResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The SendMessageBatchResult
	 * @var AmazonQueueServiceTypeSendMessageBatchResult
	 */
	public $SendMessageBatchResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeSendMessageBatchResult SendMessageBatchResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeSendMessageBatchResponse
	 */
	public function __construct($_SendMessageBatchResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('SendMessageBatchResult'=>$_SendMessageBatchResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set SendMessageBatchResult
	 * @param SendMessageBatchResult SendMessageBatchResult
	 * @return SendMessageBatchResult
	 */
	public function setSendMessageBatchResult($_SendMessageBatchResult)
	{
		return ($this->SendMessageBatchResult = $_SendMessageBatchResult);
	}
	/**
	 * Get SendMessageBatchResult
	 * @return AmazonQueueServiceTypeSendMessageBatchResult
	 */
	public function getSendMessageBatchResult()
	{
		return $this->SendMessageBatchResult;
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