<?php
/**
 * Class file for AmazonQueueServiceServiceGet
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceGet
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceGet extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call GetQueueUrl
	 * Meta informations :
	 * 	- documentation : The GetQueueUrl action takes the name of a queue and returns its URL.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeGetQueueUrl::getQueueName()
	 * @uses AmazonQueueServiceTypeGetQueueUrl::getQueueOwnerAWSAccountId()
	 * @param AmazonQueueServiceTypeGetQueueUrl GetQueueUrl
	 * @return AmazonQueueServiceTypeGetQueueUrlResponse
	 */
	public function GetQueueUrl(AmazonQueueServiceTypeGetQueueUrl $_AmazonQueueServiceTypeGetQueueUrl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetQueueUrl(array('QueueName'=>$_AmazonQueueServiceTypeGetQueueUrl->getQueueName(),'QueueOwnerAWSAccountId'=>$_AmazonQueueServiceTypeGetQueueUrl->getQueueOwnerAWSAccountId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetQueueAttributes
	 * Meta informations :
	 * 	- documentation : Gets one or all attributes of a queue. Available attributes are [ApproximateNumberOfMessages, ApproximateNumberOfMessagesNotVisible, VisibilityTimeout, CreatedTimestamp, LastModifiedTimestamp, Policy, MaximumMessageSize, MessageRetentionPeriod, QueueArn].
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeGetQueueAttributes::getAttributeName()
	 * @uses AmazonQueueServiceTypeGetQueueAttributes::getUnused()
	 * @param AmazonQueueServiceTypeGetQueueAttributes GetQueueAttributes
	 * @return AmazonQueueServiceTypeGetQueueAttributesResponse
	 */
	public function GetQueueAttributes(AmazonQueueServiceTypeGetQueueAttributes $_AmazonQueueServiceTypeGetQueueAttributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetQueueAttributes(array('AttributeName'=>$_AmazonQueueServiceTypeGetQueueAttributes->getAttributeName(),'Unused'=>$_AmazonQueueServiceTypeGetQueueAttributes->getUnused())));
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
	 * @return AmazonQueueServiceTypeGetQueueAttributesResponse
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