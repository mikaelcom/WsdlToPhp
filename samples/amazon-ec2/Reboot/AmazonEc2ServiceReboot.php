<?php
/**
 * Class file for AmazonEc2ServiceReboot
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceReboot
 * @date 10/07/2012
 */
class AmazonEc2ServiceReboot extends AmazonEc2WsdlClass
{
	/**
	 * Method to call RebootInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeRebootInstancesType::getInstancesSet()
	 * @param AmazonEc2TypeRebootInstancesType RebootInstancesType
	 * @return AmazonEc2TypeRebootInstancesResponseType
	 */
	public function RebootInstances(AmazonEc2TypeRebootInstancesType $_AmazonEc2TypeRebootInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RebootInstances(array('instancesSet'=>$_AmazonEc2TypeRebootInstancesType->getInstancesSet())));
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
	 * @return AmazonEc2TypeRebootInstancesResponseType
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