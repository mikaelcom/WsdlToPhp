<?php
/**
 * Class file for AmazonQueueServiceTypeSendMessageBatchResult
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSendMessageBatchResult
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSendMessageBatchResult extends AmazonQueueServiceWsdlClass
{
	/**
	 * The SendMessageBatchResultEntry
	 * @var AmazonQueueServiceTypeSendMessageBatchResultEntry
	 */
	public $SendMessageBatchResultEntry;
	/**
	 * The BatchResultErrorEntry
	 * @var AmazonQueueServiceTypeBatchResultErrorEntry
	 */
	public $BatchResultErrorEntry;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeSendMessageBatchResultEntry SendMessageBatchResultEntry
	 * @param AmazonQueueServiceTypeBatchResultErrorEntry BatchResultErrorEntry
	 * @return AmazonQueueServiceTypeSendMessageBatchResult
	 */
	public function __construct($_SendMessageBatchResultEntry = null,$_BatchResultErrorEntry = null)
	{
		parent::__construct(array('SendMessageBatchResultEntry'=>$_SendMessageBatchResultEntry,'BatchResultErrorEntry'=>$_BatchResultErrorEntry));
	}
	/**
	 * Set SendMessageBatchResultEntry
	 * @param SendMessageBatchResultEntry SendMessageBatchResultEntry
	 * @return SendMessageBatchResultEntry
	 */
	public function setSendMessageBatchResultEntry($_SendMessageBatchResultEntry)
	{
		return ($this->SendMessageBatchResultEntry = $_SendMessageBatchResultEntry);
	}
	/**
	 * Get SendMessageBatchResultEntry
	 * @return AmazonQueueServiceTypeSendMessageBatchResultEntry
	 */
	public function getSendMessageBatchResultEntry()
	{
		return $this->SendMessageBatchResultEntry;
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