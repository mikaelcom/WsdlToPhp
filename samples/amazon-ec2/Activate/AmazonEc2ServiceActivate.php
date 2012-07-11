<?php
/**
 * Class file for AmazonEc2ServiceActivate
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceActivate
 * @date 10/07/2012
 */
class AmazonEc2ServiceActivate extends AmazonEc2WsdlClass
{
	/**
	 * Method to call ActivateLicense
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeActivateLicenseType::getLicenseId()
	 * @uses AmazonEc2TypeActivateLicenseType::getCapacity()
	 * @param AmazonEc2TypeActivateLicenseType ActivateLicenseType
	 * @return AmazonEc2TypeActivateLicenseResponseType
	 */
	public function ActivateLicense(AmazonEc2TypeActivateLicenseType $_AmazonEc2TypeActivateLicenseType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ActivateLicense(array('licenseId'=>$_AmazonEc2TypeActivateLicenseType->getLicenseId(),'capacity'=>$_AmazonEc2TypeActivateLicenseType->getCapacity())));
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
	 * @return AmazonEc2TypeActivateLicenseResponseType
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