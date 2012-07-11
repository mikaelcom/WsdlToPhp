<?php
/**
 * Class file for AmazonEc2ServiceUnassign
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceUnassign
 * @date 10/07/2012
 */
class AmazonEc2ServiceUnassign extends AmazonEc2WsdlClass
{
	/**
	 * Method to call UnassignPrivateIpAddresses
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeUnassignPrivateIpAddressesType::getNetworkInterfaceId()
	 * @uses AmazonEc2TypeUnassignPrivateIpAddressesType::getPrivateIpAddressesSet()
	 * @param AmazonEc2TypeUnassignPrivateIpAddressesType UnassignPrivateIpAddressesType
	 * @return AmazonEc2TypeUnassignPrivateIpAddressesResponseType
	 */
	public function UnassignPrivateIpAddresses(AmazonEc2TypeUnassignPrivateIpAddressesType $_AmazonEc2TypeUnassignPrivateIpAddressesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UnassignPrivateIpAddresses(array('networkInterfaceId'=>$_AmazonEc2TypeUnassignPrivateIpAddressesType->getNetworkInterfaceId(),'privateIpAddressesSet'=>$_AmazonEc2TypeUnassignPrivateIpAddressesType->getPrivateIpAddressesSet())));
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
	 * @return AmazonEc2TypeUnassignPrivateIpAddressesResponseType
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