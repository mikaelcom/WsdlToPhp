<?php
/**
 * Class file for AmazonEc2ServiceRelease
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceRelease
 * @date 10/07/2012
 */
class AmazonEc2ServiceRelease extends AmazonEc2WsdlClass
{
	/**
	 * Method to call ReleaseAddress
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeReleaseAddressType::getPublicIp()
	 * @uses AmazonEc2TypeReleaseAddressType::getAllocationId()
	 * @param AmazonEc2TypeReleaseAddressType ReleaseAddressType
	 * @return AmazonEc2TypeReleaseAddressResponseType
	 */
	public function ReleaseAddress(AmazonEc2TypeReleaseAddressType $_AmazonEc2TypeReleaseAddressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReleaseAddress(array('publicIp'=>$_AmazonEc2TypeReleaseAddressType->getPublicIp(),'allocationId'=>$_AmazonEc2TypeReleaseAddressType->getAllocationId())));
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
	 * @return AmazonEc2TypeReleaseAddressResponseType
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