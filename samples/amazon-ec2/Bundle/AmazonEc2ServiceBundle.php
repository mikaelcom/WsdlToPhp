<?php
/**
 * Class file for AmazonEc2ServiceBundle
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceBundle
 * @date 10/07/2012
 */
class AmazonEc2ServiceBundle extends AmazonEc2WsdlClass
{
	/**
	 * Method to call BundleInstance
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeBundleInstanceType::getInstanceId()
	 * @uses AmazonEc2TypeBundleInstanceType::getStorage()
	 * @param AmazonEc2TypeBundleInstanceType BundleInstanceType
	 * @return AmazonEc2TypeBundleInstanceResponseType
	 */
	public function BundleInstance(AmazonEc2TypeBundleInstanceType $_AmazonEc2TypeBundleInstanceType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BundleInstance(array('instanceId'=>$_AmazonEc2TypeBundleInstanceType->getInstanceId(),'storage'=>$_AmazonEc2TypeBundleInstanceType->getStorage())));
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
	 * @return AmazonEc2TypeBundleInstanceResponseType
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