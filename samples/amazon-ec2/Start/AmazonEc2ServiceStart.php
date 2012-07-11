<?php
/**
 * Class file for AmazonEc2ServiceStart
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceStart
 * @date 10/07/2012
 */
class AmazonEc2ServiceStart extends AmazonEc2WsdlClass
{
	/**
	 * Method to call StartInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeStartInstancesType::getInstancesSet()
	 * @param AmazonEc2TypeStartInstancesType StartInstancesType
	 * @return AmazonEc2TypeStartInstancesResponseType
	 */
	public function StartInstances(AmazonEc2TypeStartInstancesType $_AmazonEc2TypeStartInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->StartInstances(array('instancesSet'=>$_AmazonEc2TypeStartInstancesType->getInstancesSet())));
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
	 * @return AmazonEc2TypeStartInstancesResponseType
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