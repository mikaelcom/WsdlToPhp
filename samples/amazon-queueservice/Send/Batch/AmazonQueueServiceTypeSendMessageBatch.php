<?php
/**
 * Class file for AmazonQueueServiceTypeSendMessageBatch
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSendMessageBatch
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSendMessageBatch extends AmazonQueueServiceWsdlClass
{
	/**
	 * The SendMessageBatchRequestEntry
	 * @var AmazonQueueServiceTypeSendMessageBatchRequestEntry
	 */
	public $SendMessageBatchRequestEntry;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeSendMessageBatchRequestEntry SendMessageBatchRequestEntry
	 * @return AmazonQueueServiceTypeSendMessageBatch
	 */
	public function __construct($_SendMessageBatchRequestEntry = null)
	{
		parent::__construct(array('SendMessageBatchRequestEntry'=>$_SendMessageBatchRequestEntry));
	}
	/**
	 * Set SendMessageBatchRequestEntry
	 * @param SendMessageBatchRequestEntry SendMessageBatchRequestEntry
	 * @return SendMessageBatchRequestEntry
	 */
	public function setSendMessageBatchRequestEntry($_SendMessageBatchRequestEntry)
	{
		return ($this->SendMessageBatchRequestEntry = $_SendMessageBatchRequestEntry);
	}
	/**
	 * Get SendMessageBatchRequestEntry
	 * @return AmazonQueueServiceTypeSendMessageBatchRequestEntry
	 */
	public function getSendMessageBatchRequestEntry()
	{
		return $this->SendMessageBatchRequestEntry;
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