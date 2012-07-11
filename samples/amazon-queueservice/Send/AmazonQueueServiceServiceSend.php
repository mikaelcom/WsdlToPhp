<?php
/**
 * Class file for AmazonQueueServiceServiceSend
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceSend
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceSend extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call SendMessage
	 * Meta informations :
	 * 	- documentation : The SendMessage action adds a message to the specified queue. If DelaySeconds is specified, the message won't be delivered until the specified number of seconds has elapsed. Otherwise, the message may be delivered immediately.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeSendMessage::getMessageBody()
	 * @uses AmazonQueueServiceTypeSendMessage::getDelaySeconds()
	 * @uses AmazonQueueServiceTypeSendMessage::getAttribute()
	 * @param AmazonQueueServiceTypeSendMessage SendMessage
	 * @return AmazonQueueServiceTypeSendMessageResponse
	 */
	public function SendMessage(AmazonQueueServiceTypeSendMessage $_AmazonQueueServiceTypeSendMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendMessage(array('MessageBody'=>$_AmazonQueueServiceTypeSendMessage->getMessageBody(),'DelaySeconds'=>$_AmazonQueueServiceTypeSendMessage->getDelaySeconds(),'Attribute'=>$_AmazonQueueServiceTypeSendMessage->getAttribute())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SendMessageBatch
	 * Meta informations :
	 * 	- documentation : A batch version of SendMessage. Each batch request has one or more entries in it. Each entry is identified by its Id (referred to as entry id) and represents a message to be enqueued. If DelaySeconds is not specified for an entry, the default for the queue is used. For each entry in the batch, the response will contain one of SendMessageBatchResultEntry (success) or BatchResultErrorEntry (failed) signifying the result.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeSendMessageBatch::getSendMessageBatchRequestEntry()
	 * @param AmazonQueueServiceTypeSendMessageBatch SendMessageBatch
	 * @return AmazonQueueServiceTypeSendMessageBatchResponse
	 */
	public function SendMessageBatch(AmazonQueueServiceTypeSendMessageBatch $_AmazonQueueServiceTypeSendMessageBatch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendMessageBatch(array('SendMessageBatchRequestEntry'=>$_AmazonQueueServiceTypeSendMessageBatch->getSendMessageBatchRequestEntry())));
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
	 * @return AmazonQueueServiceTypeSendMessageBatchResponse
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