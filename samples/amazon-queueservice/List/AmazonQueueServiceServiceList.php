<?php
/**
 * Class file for AmazonQueueServiceServiceList
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceList
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceList extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call ListQueues
	 * Meta informations :
	 * 	- documentation : The ListQueues action returns a list of your queues.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeListQueues::getQueueNamePrefix()
	 * @uses AmazonQueueServiceTypeListQueues::getAttribute()
	 * @param AmazonQueueServiceTypeListQueues ListQueues
	 * @return AmazonQueueServiceTypeListQueuesResponse
	 */
	public function ListQueues(AmazonQueueServiceTypeListQueues $_AmazonQueueServiceTypeListQueues)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListQueues(array('QueueNamePrefix'=>$_AmazonQueueServiceTypeListQueues->getQueueNamePrefix(),'Attribute'=>$_AmazonQueueServiceTypeListQueues->getAttribute())));
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
	 * @return AmazonQueueServiceTypeListQueuesResponse
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