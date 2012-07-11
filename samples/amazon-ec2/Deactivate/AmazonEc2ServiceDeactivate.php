<?php
/**
 * Class file for AmazonEc2ServiceDeactivate
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceDeactivate
 * @date 10/07/2012
 */
class AmazonEc2ServiceDeactivate extends AmazonEc2WsdlClass
{
	/**
	 * Method to call DeactivateLicense
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeactivateLicenseType::getLicenseId()
	 * @uses AmazonEc2TypeDeactivateLicenseType::getCapacity()
	 * @param AmazonEc2TypeDeactivateLicenseType DeactivateLicenseType
	 * @return AmazonEc2TypeDeactivateLicenseResponseType
	 */
	public function DeactivateLicense(AmazonEc2TypeDeactivateLicenseType $_AmazonEc2TypeDeactivateLicenseType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeactivateLicense(array('licenseId'=>$_AmazonEc2TypeDeactivateLicenseType->getLicenseId(),'capacity'=>$_AmazonEc2TypeDeactivateLicenseType->getCapacity())));
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
	 * @return AmazonEc2TypeDeactivateLicenseResponseType
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