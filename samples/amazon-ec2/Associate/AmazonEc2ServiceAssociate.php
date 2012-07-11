<?php
/**
 * Class file for AmazonEc2ServiceAssociate
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceAssociate
 * @date 10/07/2012
 */
class AmazonEc2ServiceAssociate extends AmazonEc2WsdlClass
{
	/**
	 * Method to call AssociateAddress
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAssociateAddressType::getPublicIp()
	 * @uses AmazonEc2TypeAssociateAddressType::getAllocationId()
	 * @uses AmazonEc2TypeAssociateAddressType::getNetworkInterfaceId()
	 * @uses AmazonEc2TypeAssociateAddressType::getInstanceId()
	 * @uses AmazonEc2TypeAssociateAddressType::getPrivateIpAddress()
	 * @uses AmazonEc2TypeAssociateAddressType::getAllowReassociation()
	 * @param AmazonEc2TypeAssociateAddressType AssociateAddressType
	 * @return AmazonEc2TypeAssociateAddressResponseType
	 */
	public function AssociateAddress(AmazonEc2TypeAssociateAddressType $_AmazonEc2TypeAssociateAddressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AssociateAddress(array('publicIp'=>$_AmazonEc2TypeAssociateAddressType->getPublicIp(),'allocationId'=>$_AmazonEc2TypeAssociateAddressType->getAllocationId(),'networkInterfaceId'=>$_AmazonEc2TypeAssociateAddressType->getNetworkInterfaceId(),'instanceId'=>$_AmazonEc2TypeAssociateAddressType->getInstanceId(),'privateIpAddress'=>$_AmazonEc2TypeAssociateAddressType->getPrivateIpAddress(),'allowReassociation'=>$_AmazonEc2TypeAssociateAddressType->getAllowReassociation())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AssociateDhcpOptions
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAssociateDhcpOptionsType::getDhcpOptionsId()
	 * @uses AmazonEc2TypeAssociateDhcpOptionsType::getVpcId()
	 * @param AmazonEc2TypeAssociateDhcpOptionsType AssociateDhcpOptionsType
	 * @return AmazonEc2TypeAssociateDhcpOptionsResponseType
	 */
	public function AssociateDhcpOptions(AmazonEc2TypeAssociateDhcpOptionsType $_AmazonEc2TypeAssociateDhcpOptionsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AssociateDhcpOptions(array('dhcpOptionsId'=>$_AmazonEc2TypeAssociateDhcpOptionsType->getDhcpOptionsId(),'vpcId'=>$_AmazonEc2TypeAssociateDhcpOptionsType->getVpcId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AssociateRouteTable
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAssociateRouteTableType::getRouteTableId()
	 * @uses AmazonEc2TypeAssociateRouteTableType::getSubnetId()
	 * @param AmazonEc2TypeAssociateRouteTableType AssociateRouteTableType
	 * @return AmazonEc2TypeAssociateRouteTableResponseType
	 */
	public function AssociateRouteTable(AmazonEc2TypeAssociateRouteTableType $_AmazonEc2TypeAssociateRouteTableType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AssociateRouteTable(array('routeTableId'=>$_AmazonEc2TypeAssociateRouteTableType->getRouteTableId(),'subnetId'=>$_AmazonEc2TypeAssociateRouteTableType->getSubnetId())));
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
	 * @return AmazonEc2TypeAssociateRouteTableResponseType
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