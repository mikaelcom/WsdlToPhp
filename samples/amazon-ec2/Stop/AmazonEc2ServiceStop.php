<?php
/**
 * Class file for AmazonEc2ServiceStop
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceStop
 * @date 10/07/2012
 */
class AmazonEc2ServiceStop extends AmazonEc2WsdlClass
{
	/**
	 * Method to call StopInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeStopInstancesType::getInstancesSet()
	 * @uses AmazonEc2TypeStopInstancesType::getForce()
	 * @param AmazonEc2TypeStopInstancesType StopInstancesType
	 * @return AmazonEc2TypeStopInstancesResponseType
	 */
	public function StopInstances(AmazonEc2TypeStopInstancesType $_AmazonEc2TypeStopInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->StopInstances(array('instancesSet'=>$_AmazonEc2TypeStopInstancesType->getInstancesSet(),'force'=>$_AmazonEc2TypeStopInstancesType->getForce())));
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
	 * @return AmazonEc2TypeStopInstancesResponseType
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