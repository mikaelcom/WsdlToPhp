<?php
/**
 * Class file for AmazonQueueServiceServiceSet
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceSet
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceSet extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call SetQueueAttributes
	 * Meta informations :
	 * 	- documentation : Sets the value of one or more queue attributes. Valid attributes that can be set are [VisibilityTimeout, Policy, MaximumMessageSize, MessageRetentionPeriod].
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeSetQueueAttributes::getAttribute()
	 * @param AmazonQueueServiceTypeSetQueueAttributes SetQueueAttributes
	 * @return AmazonQueueServiceTypeSetQueueAttributesResponse
	 */
	public function SetQueueAttributes(AmazonQueueServiceTypeSetQueueAttributes $_AmazonQueueServiceTypeSetQueueAttributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetQueueAttributes(array('Attribute'=>$_AmazonQueueServiceTypeSetQueueAttributes->getAttribute())));
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
	 * @return AmazonQueueServiceTypeSetQueueAttributesResponse
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