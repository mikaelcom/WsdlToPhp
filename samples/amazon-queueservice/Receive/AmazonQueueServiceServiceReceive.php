<?php
/**
 * Class file for AmazonQueueServiceServiceReceive
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceReceive
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceReceive extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call ReceiveMessage
	 * Meta informations :
	 * 	- documentation : Retrieves one or more messages from the specified queue, including the message body and message ID of each message. Messages returned by this action stay in the queue until you delete them. However, once a message is returned to a ReceiveMessage request, it is not returned on subsequent ReceiveMessage requests for the duration of the VisibilityTimeout. If you do not specify a VisibilityTimeout in the request, the overall visibility timeout for the queue is used for the returned messages. Possible attributes that can be requested with messages include [SenderId, ApproximateFirstReceiveTimestamp, ApproximateReceiveCount, SentTimestamp].
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeReceiveMessage::getMaxNumberOfMessages()
	 * @uses AmazonQueueServiceTypeReceiveMessage::getVisibilityTimeout()
	 * @uses AmazonQueueServiceTypeReceiveMessage::getAttributeName()
	 * @uses AmazonQueueServiceTypeReceiveMessage::getUnused()
	 * @param AmazonQueueServiceTypeReceiveMessage ReceiveMessage
	 * @return AmazonQueueServiceTypeReceiveMessageResponse
	 */
	public function ReceiveMessage(AmazonQueueServiceTypeReceiveMessage $_AmazonQueueServiceTypeReceiveMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReceiveMessage(array('MaxNumberOfMessages'=>$_AmazonQueueServiceTypeReceiveMessage->getMaxNumberOfMessages(),'VisibilityTimeout'=>$_AmazonQueueServiceTypeReceiveMessage->getVisibilityTimeout(),'AttributeName'=>$_AmazonQueueServiceTypeReceiveMessage->getAttributeName(),'Unused'=>$_AmazonQueueServiceTypeReceiveMessage->getUnused())));
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
	 * @return AmazonQueueServiceTypeReceiveMessageResponse
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