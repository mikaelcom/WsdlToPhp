<?php
/**
 * Class file for AmazonQueueServiceServiceRemove
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceServiceRemove
 * @date 10/07/2012
 */
class AmazonQueueServiceServiceRemove extends AmazonQueueServiceWsdlClass
{
	/**
	 * Method to call RemovePermission
	 * Meta informations :
	 * 	- documentation : Removes the permission with the specified statement id from the queue.
	 * @uses AmazonQueueServiceWsdlClass::getSoapClient()
	 * @uses AmazonQueueServiceWsdlClass::setResult()
	 * @uses AmazonQueueServiceWsdlClass::getResult()
	 * @uses AmazonQueueServiceWsdlClass::saveLastError()
	 * @uses AmazonQueueServiceTypeRemovePermission::getLabel()
	 * @param AmazonQueueServiceTypeRemovePermission RemovePermission
	 * @return AmazonQueueServiceTypeRemovePermissionResponse
	 */
	public function RemovePermission(AmazonQueueServiceTypeRemovePermission $_AmazonQueueServiceTypeRemovePermission)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemovePermission(array('Label'=>$_AmazonQueueServiceTypeRemovePermission->getLabel())));
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
	 * @return AmazonQueueServiceTypeRemovePermissionResponse
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