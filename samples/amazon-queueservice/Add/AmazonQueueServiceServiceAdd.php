<?php
/**
 * Class file for AmazonQueueServiceServiceAdd
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceAdd
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceAdd extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call AddPermission
	 * Meta informations :
	 * 	- documentation : Adds the specified permission(s) to a queue for the specified principal(s). This allows for sharing access to the queue.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeAddPermission::getLabel()
	 * @uses AmazonQueueServiceTypeAddPermission::getAWSAccountId()
	 * @uses AmazonQueueServiceTypeAddPermission::getActionName()
	 * @param AmazonQueueServiceTypeAddPermission AddPermission
	 * @return AmazonQueueServiceTypeAddPermissionResponse
	 */
	public function AddPermission(AmazonQueueServiceTypeAddPermission $_AmazonQueueServiceTypeAddPermission)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddPermission(array('Label'=>$_AmazonQueueServiceTypeAddPermission->getLabel(),'AWSAccountId'=>$_AmazonQueueServiceTypeAddPermission->getAWSAccountId(),'ActionName'=>$_AmazonQueueServiceTypeAddPermission->getActionName())));
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
	 * @return AmazonQueueServiceTypeAddPermissionResponse
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