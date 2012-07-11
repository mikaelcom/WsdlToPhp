<?php
/**
 * Class file for AmazonQueueServiceTypeChangeMessageVisibilityBatch
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeChangeMessageVisibilityBatch
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeChangeMessageVisibilityBatch extends AmazonQueueServiceWsdlClass
{
	/**
	 * The ChangeMessageVisibilityBatchRequestEntry
	 * @var AmazonQueueServiceTypeChangeMessageVisibilityBatchRequestEntry
	 */
	public $ChangeMessageVisibilityBatchRequestEntry;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeChangeMessageVisibilityBatchRequestEntry ChangeMessageVisibilityBatchRequestEntry
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatch
	 */
	public function __construct($_ChangeMessageVisibilityBatchRequestEntry = null)
	{
		parent::__construct(array('ChangeMessageVisibilityBatchRequestEntry'=>$_ChangeMessageVisibilityBatchRequestEntry));
	}
	/**
	 * Set ChangeMessageVisibilityBatchRequestEntry
	 * @param ChangeMessageVisibilityBatchRequestEntry ChangeMessageVisibilityBatchRequestEntry
	 * @return ChangeMessageVisibilityBatchRequestEntry
	 */
	public function setChangeMessageVisibilityBatchRequestEntry($_ChangeMessageVisibilityBatchRequestEntry)
	{
		return ($this->ChangeMessageVisibilityBatchRequestEntry = $_ChangeMessageVisibilityBatchRequestEntry);
	}
	/**
	 * Get ChangeMessageVisibilityBatchRequestEntry
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchRequestEntry
	 */
	public function getChangeMessageVisibilityBatchRequestEntry()
	{
		return $this->ChangeMessageVisibilityBatchRequestEntry;
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