<?php
/**
 * Class file for AmazonQueueServiceServiceDelete
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceDelete
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceDelete extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call DeleteMessage
	 * Meta informations :
	 * 	- documentation : The DeleteMessage action unconditionally removes the specified message from the specified queue. Even if the message is locked by another reader due to the visibility timeout setting, it is still deleted from the queue.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeDeleteMessage::getReceiptHandle()
	 * @uses AmazonQueueServiceTypeDeleteMessage::getAttribute()
	 * @param AmazonQueueServiceTypeDeleteMessage DeleteMessage
	 * @return AmazonQueueServiceTypeDeleteMessageResponse
	 */
	public function DeleteMessage(AmazonQueueServiceTypeDeleteMessage $_AmazonQueueServiceTypeDeleteMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteMessage(array('ReceiptHandle'=>$_AmazonQueueServiceTypeDeleteMessage->getReceiptHandle(),'Attribute'=>$_AmazonQueueServiceTypeDeleteMessage->getAttribute())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteQueue
	 * Meta informations :
	 * 	- documentation : This action unconditionally deletes the queue specified by the queue URL. Use this operation WITH CARE! The queue is deleted even if it is NOT empty.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeDeleteQueue::getAttribute()
	 * @param AmazonQueueServiceTypeDeleteQueue DeleteQueue
	 * @return AmazonQueueServiceTypeDeleteQueueResponse
	 */
	public function DeleteQueue(AmazonQueueServiceTypeDeleteQueue $_AmazonQueueServiceTypeDeleteQueue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteQueue(array('Attribute'=>$_AmazonQueueServiceTypeDeleteQueue->getAttribute())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteMessageBatch
	 * Meta informations :
	 * 	- documentation : The batch version of DeleteMessage. Each batch request contains one or more entries. Each entry is identified by its Id (referred to as entry id) and represents the receipt handle for a message that has to be deleted. For each entry in the batch, the response will contain one of DeleteMessageBatchResultEntry (success) or BatchResultErrorEntry (failed) signifying the result.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeDeleteMessageBatch::getDeleteMessageBatchRequestEntry()
	 * @param AmazonQueueServiceTypeDeleteMessageBatch DeleteMessageBatch
	 * @return AmazonQueueServiceTypeDeleteMessageBatchResponse
	 */
	public function DeleteMessageBatch(AmazonQueueServiceTypeDeleteMessageBatch $_AmazonQueueServiceTypeDeleteMessageBatch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteMessageBatch(array('DeleteMessageBatchRequestEntry'=>$_AmazonQueueServiceTypeDeleteMessageBatch->getDeleteMessageBatchRequestEntry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return AmazonQueueServiceTypeDeleteMessageBatchResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>