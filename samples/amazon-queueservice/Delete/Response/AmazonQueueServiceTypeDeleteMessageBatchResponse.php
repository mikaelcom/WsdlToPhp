<?php
/**
 * Class file for AmazonQueueServiceTypeDeleteMessageBatchResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeDeleteMessageBatchResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeDeleteMessageBatchResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The DeleteMessageBatchResult
	 * @var AmazonQueueServiceTypeDeleteMessageBatchResult
	 */
	public $DeleteMessageBatchResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeDeleteMessageBatchResult DeleteMessageBatchResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeDeleteMessageBatchResponse
	 */
	public function __construct($_DeleteMessageBatchResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DeleteMessageBatchResult'=>$_DeleteMessageBatchResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DeleteMessageBatchResult
	 * @param DeleteMessageBatchResult DeleteMessageBatchResult
	 * @return DeleteMessageBatchResult
	 */
	public function setDeleteMessageBatchResult($_DeleteMessageBatchResult)
	{
		return ($this->DeleteMessageBatchResult = $_DeleteMessageBatchResult);
	}
	/**
	 * Get DeleteMessageBatchResult
	 * @return AmazonQueueServiceTypeDeleteMessageBatchResult
	 */
	public function getDeleteMessageBatchResult()
	{
		return $this->DeleteMessageBatchResult;
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