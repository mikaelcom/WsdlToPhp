<?php
/**
 * Class file for AmazonQueueServiceTypeDeleteMessageBatchResult
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeDeleteMessageBatchResult
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeDeleteMessageBatchResult extends AmazonQueueServiceWsdlClass
{
	/**
	 * The DeleteMessageBatchResultEntry
	 * @var AmazonQueueServiceTypeDeleteMessageBatchResultEntry
	 */
	public $DeleteMessageBatchResultEntry;
	/**
	 * The BatchResultErrorEntry
	 * @var AmazonQueueServiceTypeBatchResultErrorEntry
	 */
	public $BatchResultErrorEntry;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeDeleteMessageBatchResultEntry DeleteMessageBatchResultEntry
	 * @param AmazonQueueServiceTypeBatchResultErrorEntry BatchResultErrorEntry
	 * @return AmazonQueueServiceTypeDeleteMessageBatchResult
	 */
	public function __construct($_DeleteMessageBatchResultEntry = null,$_BatchResultErrorEntry = null)
	{
		parent::__construct(array('DeleteMessageBatchResultEntry'=>$_DeleteMessageBatchResultEntry,'BatchResultErrorEntry'=>$_BatchResultErrorEntry));
	}
	/**
	 * Set DeleteMessageBatchResultEntry
	 * @param DeleteMessageBatchResultEntry DeleteMessageBatchResultEntry
	 * @return DeleteMessageBatchResultEntry
	 */
	public function setDeleteMessageBatchResultEntry($_DeleteMessageBatchResultEntry)
	{
		return ($this->DeleteMessageBatchResultEntry = $_DeleteMessageBatchResultEntry);
	}
	/**
	 * Get DeleteMessageBatchResultEntry
	 * @return AmazonQueueServiceTypeDeleteMessageBatchResultEntry
	 */
	public function getDeleteMessageBatchResultEntry()
	{
		return $this->DeleteMessageBatchResultEntry;
	}
	/**
	 * Set BatchResultErrorEntry
	 * @param BatchResultErrorEntry BatchResultErrorEntry
	 * @return BatchResultErrorEntry
	 */
	public function setBatchResultErrorEntry($_BatchResultErrorEntry)
	{
		return ($this->BatchResultErrorEntry = $_BatchResultErrorEntry);
	}
	/**
	 * Get BatchResultErrorEntry
	 * @return AmazonQueueServiceTypeBatchResultErrorEntry
	 */
	public function getBatchResultErrorEntry()
	{
		return $this->BatchResultErrorEntry;
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