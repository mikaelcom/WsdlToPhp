<?php
/**
 * Class file for AmazonQueueServiceServiceCreate
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceCreate
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceCreate extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call CreateQueue
	 * Meta informations :
	 * 	- documentation : The CreateQueue action creates a new queue, or returns the URL of an existing one. When you request CreateQueue, you provide a name for the queue. To successfully create a new queue, you must provide a name that is unique within the scope of your own queues. If you provide the name of an existing queue, a new queue isn't created and an error isn't returned. Instead, the request succeeds and the queue URL for the existing queue is returned. A CreateQueue call may include attributes to set on a newly created queue. The effect is the same as the CreateQueue call followed by a SetQueueAttributes call (with the same attributes). However, when the queue already exists CreateQueue will not update any attributes. It simply compares the attribute values provided with the current settings on the existing queue, and returns the queue URL if the values match. Otherwise, it responds with an error otherwise. SetQueueAttributes should be used to change the values of attributes for an existing queue.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeCreateQueue::getQueueName()
	 * @uses AmazonQueueServiceTypeCreateQueue::getAttribute()
	 * @param AmazonQueueServiceTypeCreateQueue CreateQueue
	 * @return AmazonQueueServiceTypeCreateQueueResponse
	 */
	public function CreateQueue(AmazonQueueServiceTypeCreateQueue $_AmazonQueueServiceTypeCreateQueue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateQueue(array('QueueName'=>$_AmazonQueueServiceTypeCreateQueue->getQueueName(),'Attribute'=>$_AmazonQueueServiceTypeCreateQueue->getAttribute())));
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
	 * @return AmazonQueueServiceTypeCreateQueueResponse
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