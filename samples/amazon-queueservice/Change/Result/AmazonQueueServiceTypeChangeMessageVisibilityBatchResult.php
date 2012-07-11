<?php
/**
 * Class file for AmazonQueueServiceTypeChangeMessageVisibilityBatchResult
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeChangeMessageVisibilityBatchResult
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeChangeMessageVisibilityBatchResult extends AmazonQueueServiceWsdlClass
{
	/**
	 * The ChangeMessageVisibilityBatchResultEntry
	 * @var AmazonQueueServiceTypeChangeMessageVisibilityBatchResultEntry
	 */
	public $ChangeMessageVisibilityBatchResultEntry;
	/**
	 * The BatchResultErrorEntry
	 * @var AmazonQueueServiceTypeBatchResultErrorEntry
	 */
	public $BatchResultErrorEntry;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeChangeMessageVisibilityBatchResultEntry ChangeMessageVisibilityBatchResultEntry
	 * @param AmazonQueueServiceTypeBatchResultErrorEntry BatchResultErrorEntry
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchResult
	 */
	public function __construct($_ChangeMessageVisibilityBatchResultEntry = null,$_BatchResultErrorEntry = null)
	{
		parent::__construct(array('ChangeMessageVisibilityBatchResultEntry'=>$_ChangeMessageVisibilityBatchResultEntry,'BatchResultErrorEntry'=>$_BatchResultErrorEntry));
	}
	/**
	 * Set ChangeMessageVisibilityBatchResultEntry
	 * @param ChangeMessageVisibilityBatchResultEntry ChangeMessageVisibilityBatchResultEntry
	 * @return ChangeMessageVisibilityBatchResultEntry
	 */
	public function setChangeMessageVisibilityBatchResultEntry($_ChangeMessageVisibilityBatchResultEntry)
	{
		return ($this->ChangeMessageVisibilityBatchResultEntry = $_ChangeMessageVisibilityBatchResultEntry);
	}
	/**
	 * Get ChangeMessageVisibilityBatchResultEntry
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchResultEntry
	 */
	public function getChangeMessageVisibilityBatchResultEntry()
	{
		return $this->ChangeMessageVisibilityBatchResultEntry;
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