<?php
/**
 * Class file for AmazonQueueServiceTypeChangeMessageVisibilityBatchResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeChangeMessageVisibilityBatchResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeChangeMessageVisibilityBatchResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The ChangeMessageVisibilityBatchResult
	 * @var AmazonQueueServiceTypeChangeMessageVisibilityBatchResult
	 */
	public $ChangeMessageVisibilityBatchResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeChangeMessageVisibilityBatchResult ChangeMessageVisibilityBatchResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchResponse
	 */
	public function __construct($_ChangeMessageVisibilityBatchResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ChangeMessageVisibilityBatchResult'=>$_ChangeMessageVisibilityBatchResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ChangeMessageVisibilityBatchResult
	 * @param ChangeMessageVisibilityBatchResult ChangeMessageVisibilityBatchResult
	 * @return ChangeMessageVisibilityBatchResult
	 */
	public function setChangeMessageVisibilityBatchResult($_ChangeMessageVisibilityBatchResult)
	{
		return ($this->ChangeMessageVisibilityBatchResult = $_ChangeMessageVisibilityBatchResult);
	}
	/**
	 * Get ChangeMessageVisibilityBatchResult
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchResult
	 */
	public function getChangeMessageVisibilityBatchResult()
	{
		return $this->ChangeMessageVisibilityBatchResult;
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