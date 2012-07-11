<?php
/**
 * Class file for AmazonEc2ServiceTerminate
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceTerminate
 * @date 10/07/2012
 */
class AmazonEc2ServiceTerminate extends AmazonEc2WsdlClass
{
	/**
	 * Method to call TerminateInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeTerminateInstancesType::getInstancesSet()
	 * @param AmazonEc2TypeTerminateInstancesType TerminateInstancesType
	 * @return AmazonEc2TypeTerminateInstancesResponseType
	 */
	public function TerminateInstances(AmazonEc2TypeTerminateInstancesType $_AmazonEc2TypeTerminateInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->TerminateInstances(array('instancesSet'=>$_AmazonEc2TypeTerminateInstancesType->getInstancesSet())));
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
	 * @return AmazonEc2TypeTerminateInstancesResponseType
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