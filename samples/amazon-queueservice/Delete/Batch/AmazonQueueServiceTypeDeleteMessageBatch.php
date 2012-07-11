<?php
/**
 * Class file for AmazonQueueServiceTypeDeleteMessageBatch
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeDeleteMessageBatch
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeDeleteMessageBatch extends AmazonQueueServiceWsdlClass
{
	/**
	 * The DeleteMessageBatchRequestEntry
	 * @var AmazonQueueServiceTypeDeleteMessageBatchRequestEntry
	 */
	public $DeleteMessageBatchRequestEntry;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeDeleteMessageBatchRequestEntry DeleteMessageBatchRequestEntry
	 * @return AmazonQueueServiceTypeDeleteMessageBatch
	 */
	public function __construct($_DeleteMessageBatchRequestEntry = null)
	{
		parent::__construct(array('DeleteMessageBatchRequestEntry'=>$_DeleteMessageBatchRequestEntry));
	}
	/**
	 * Set DeleteMessageBatchRequestEntry
	 * @param DeleteMessageBatchRequestEntry DeleteMessageBatchRequestEntry
	 * @return DeleteMessageBatchRequestEntry
	 */
	public function setDeleteMessageBatchRequestEntry($_DeleteMessageBatchRequestEntry)
	{
		return ($this->DeleteMessageBatchRequestEntry = $_DeleteMessageBatchRequestEntry);
	}
	/**
	 * Get DeleteMessageBatchRequestEntry
	 * @return AmazonQueueServiceTypeDeleteMessageBatchRequestEntry
	 */
	public function getDeleteMessageBatchRequestEntry()
	{
		return $this->DeleteMessageBatchRequestEntry;
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