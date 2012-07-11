<?php
/**
 * Class file for AmazonEc2ServiceAssign
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceAssign
 * @date 10/07/2012
 */
class AmazonEc2ServiceAssign extends AmazonEc2WsdlClass
{
	/**
	 * Method to call AssignPrivateIpAddresses
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAssignPrivateIpAddressesType::getNetworkInterfaceId()
	 * @uses AmazonEc2TypeAssignPrivateIpAddressesType::getPrivateIpAddressesSet()
	 * @uses AmazonEc2TypeAssignPrivateIpAddressesType::getSecondaryPrivateIpAddressCount()
	 * @uses AmazonEc2TypeAssignPrivateIpAddressesType::getAllowReassignment()
	 * @param AmazonEc2TypeAssignPrivateIpAddressesType AssignPrivateIpAddressesType
	 * @return AmazonEc2TypeAssignPrivateIpAddressesResponseType
	 */
	public function AssignPrivateIpAddresses(AmazonEc2TypeAssignPrivateIpAddressesType $_AmazonEc2TypeAssignPrivateIpAddressesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AssignPrivateIpAddresses(array('networkInterfaceId'=>$_AmazonEc2TypeAssignPrivateIpAddressesType->getNetworkInterfaceId(),'privateIpAddressesSet'=>$_AmazonEc2TypeAssignPrivateIpAddressesType->getPrivateIpAddressesSet(),'secondaryPrivateIpAddressCount'=>$_AmazonEc2TypeAssignPrivateIpAddressesType->getSecondaryPrivateIpAddressCount(),'allowReassignment'=>$_AmazonEc2TypeAssignPrivateIpAddressesType->getAllowReassignment())));
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
	 * @return AmazonEc2TypeAssignPrivateIpAddressesResponseType
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