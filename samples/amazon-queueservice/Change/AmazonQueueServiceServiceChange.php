<?php
/**
 * Class file for AmazonQueueServiceServiceChange
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceChange
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceChange extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call ChangeMessageVisibility
	 * Meta informations :
	 * 	- documentation : The ChangeMessageVisibility action resets the visibility timeout for the specified receipt handle to the specified value. The message identified by ReceiptHandle should become visible approximately VisibilityTimeout seconds after successful completion of this action, unless DeleteMessage or ChangeMessageVisibility is called first.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeChangeMessageVisibility::getReceiptHandle()
	 * @uses AmazonQueueServiceTypeChangeMessageVisibility::getVisibilityTimeout()
	 * @uses AmazonQueueServiceTypeChangeMessageVisibility::getAttribute()
	 * @param AmazonQueueServiceTypeChangeMessageVisibility ChangeMessageVisibility
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityResponse
	 */
	public function ChangeMessageVisibility(AmazonQueueServiceTypeChangeMessageVisibility $_AmazonQueueServiceTypeChangeMessageVisibility)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ChangeMessageVisibility(array('ReceiptHandle'=>$_AmazonQueueServiceTypeChangeMessageVisibility->getReceiptHandle(),'VisibilityTimeout'=>$_AmazonQueueServiceTypeChangeMessageVisibility->getVisibilityTimeout(),'Attribute'=>$_AmazonQueueServiceTypeChangeMessageVisibility->getAttribute())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ChangeMessageVisibilityBatch
	 * Meta informations :
	 * 	- documentation : A batch version of ChangeMessageVisibility. Each batch request contains one or more entries. Each entry is identified by its Id (referred to as entry id) and represents a receipt handle for which the visibility timeout has to be changed. For each entry in the batch, the response will contain one of ChangeMessageVisibilityBatchResultEntry (success) or BatchResultErrorEntry (failed) signifying the result.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeChangeMessageVisibilityBatch::getChangeMessageVisibilityBatchRequestEntry()
	 * @param AmazonQueueServiceTypeChangeMessageVisibilityBatch ChangeMessageVisibilityBatch
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchResponse
	 */
	public function ChangeMessageVisibilityBatch(AmazonQueueServiceTypeChangeMessageVisibilityBatch $_AmazonQueueServiceTypeChangeMessageVisibilityBatch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ChangeMessageVisibilityBatch(array('ChangeMessageVisibilityBatchRequestEntry'=>$_AmazonQueueServiceTypeChangeMessageVisibilityBatch->getChangeMessageVisibilityBatchRequestEntry())));
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
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchResponse
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