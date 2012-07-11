<?php
/**
 * Class file for AmazonEc2ServiceDelete
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceDelete
 * @date 10/07/2012
 */
class AmazonEc2ServiceDelete extends AmazonEc2WsdlClass
{
	/**
	 * Method to call DeleteCustomerGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteCustomerGatewayType::getCustomerGatewayId()
	 * @param AmazonEc2TypeDeleteCustomerGatewayType DeleteCustomerGatewayType
	 * @return AmazonEc2TypeDeleteCustomerGatewayResponseType
	 */
	public function DeleteCustomerGateway(AmazonEc2TypeDeleteCustomerGatewayType $_AmazonEc2TypeDeleteCustomerGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteCustomerGateway(array('customerGatewayId'=>$_AmazonEc2TypeDeleteCustomerGatewayType->getCustomerGatewayId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteDhcpOptions
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteDhcpOptionsType::getDhcpOptionsId()
	 * @param AmazonEc2TypeDeleteDhcpOptionsType DeleteDhcpOptionsType
	 * @return AmazonEc2TypeDeleteDhcpOptionsResponseType
	 */
	public function DeleteDhcpOptions(AmazonEc2TypeDeleteDhcpOptionsType $_AmazonEc2TypeDeleteDhcpOptionsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteDhcpOptions(array('dhcpOptionsId'=>$_AmazonEc2TypeDeleteDhcpOptionsType->getDhcpOptionsId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteInternetGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteInternetGatewayType::getInternetGatewayId()
	 * @param AmazonEc2TypeDeleteInternetGatewayType DeleteInternetGatewayType
	 * @return AmazonEc2TypeDeleteInternetGatewayResponseType
	 */
	public function DeleteInternetGateway(AmazonEc2TypeDeleteInternetGatewayType $_AmazonEc2TypeDeleteInternetGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteInternetGateway(array('internetGatewayId'=>$_AmazonEc2TypeDeleteInternetGatewayType->getInternetGatewayId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteKeyPair
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteKeyPairType::getKeyName()
	 * @param AmazonEc2TypeDeleteKeyPairType DeleteKeyPairType
	 * @return AmazonEc2TypeDeleteKeyPairResponseType
	 */
	public function DeleteKeyPair(AmazonEc2TypeDeleteKeyPairType $_AmazonEc2TypeDeleteKeyPairType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteKeyPair(array('keyName'=>$_AmazonEc2TypeDeleteKeyPairType->getKeyName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteNetworkAcl
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteNetworkAclType::getNetworkAclId()
	 * @param AmazonEc2TypeDeleteNetworkAclType DeleteNetworkAclType
	 * @return AmazonEc2TypeDeleteNetworkAclResponseType
	 */
	public function DeleteNetworkAcl(AmazonEc2TypeDeleteNetworkAclType $_AmazonEc2TypeDeleteNetworkAclType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteNetworkAcl(array('networkAclId'=>$_AmazonEc2TypeDeleteNetworkAclType->getNetworkAclId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteNetworkAclEntry
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteNetworkAclEntryType::getNetworkAclId()
	 * @uses AmazonEc2TypeDeleteNetworkAclEntryType::getRuleNumber()
	 * @uses AmazonEc2TypeDeleteNetworkAclEntryType::getEgress()
	 * @param AmazonEc2TypeDeleteNetworkAclEntryType DeleteNetworkAclEntryType
	 * @return AmazonEc2TypeDeleteNetworkAclEntryResponseType
	 */
	public function DeleteNetworkAclEntry(AmazonEc2TypeDeleteNetworkAclEntryType $_AmazonEc2TypeDeleteNetworkAclEntryType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteNetworkAclEntry(array('networkAclId'=>$_AmazonEc2TypeDeleteNetworkAclEntryType->getNetworkAclId(),'ruleNumber'=>$_AmazonEc2TypeDeleteNetworkAclEntryType->getRuleNumber(),'egress'=>$_AmazonEc2TypeDeleteNetworkAclEntryType->getEgress())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteNetworkInterface
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteNetworkInterfaceType::getNetworkInterfaceId()
	 * @param AmazonEc2TypeDeleteNetworkInterfaceType DeleteNetworkInterfaceType
	 * @return AmazonEc2TypeDeleteNetworkInterfaceResponseType
	 */
	public function DeleteNetworkInterface(AmazonEc2TypeDeleteNetworkInterfaceType $_AmazonEc2TypeDeleteNetworkInterfaceType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteNetworkInterface(array('networkInterfaceId'=>$_AmazonEc2TypeDeleteNetworkInterfaceType->getNetworkInterfaceId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeletePlacementGroup
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeletePlacementGroupType::getGroupName()
	 * @param AmazonEc2TypeDeletePlacementGroupType DeletePlacementGroupType
	 * @return AmazonEc2TypeDeletePlacementGroupResponseType
	 */
	public function DeletePlacementGroup(AmazonEc2TypeDeletePlacementGroupType $_AmazonEc2TypeDeletePlacementGroupType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeletePlacementGroup(array('groupName'=>$_AmazonEc2TypeDeletePlacementGroupType->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteRoute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteRouteType::getRouteTableId()
	 * @uses AmazonEc2TypeDeleteRouteType::getDestinationCidrBlock()
	 * @param AmazonEc2TypeDeleteRouteType DeleteRouteType
	 * @return AmazonEc2TypeDeleteRouteResponseType
	 */
	public function DeleteRoute(AmazonEc2TypeDeleteRouteType $_AmazonEc2TypeDeleteRouteType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteRoute(array('routeTableId'=>$_AmazonEc2TypeDeleteRouteType->getRouteTableId(),'destinationCidrBlock'=>$_AmazonEc2TypeDeleteRouteType->getDestinationCidrBlock())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteRouteTable
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteRouteTableType::getRouteTableId()
	 * @param AmazonEc2TypeDeleteRouteTableType DeleteRouteTableType
	 * @return AmazonEc2TypeDeleteRouteTableResponseType
	 */
	public function DeleteRouteTable(AmazonEc2TypeDeleteRouteTableType $_AmazonEc2TypeDeleteRouteTableType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteRouteTable(array('routeTableId'=>$_AmazonEc2TypeDeleteRouteTableType->getRouteTableId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSecurityGroup
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteSecurityGroupType::getGroupId()
	 * @uses AmazonEc2TypeDeleteSecurityGroupType::getGroupName()
	 * @param AmazonEc2TypeDeleteSecurityGroupType DeleteSecurityGroupType
	 * @return AmazonEc2TypeDeleteSecurityGroupResponseType
	 */
	public function DeleteSecurityGroup(AmazonEc2TypeDeleteSecurityGroupType $_AmazonEc2TypeDeleteSecurityGroupType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSecurityGroup(array('groupId'=>$_AmazonEc2TypeDeleteSecurityGroupType->getGroupId(),'groupName'=>$_AmazonEc2TypeDeleteSecurityGroupType->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSnapshot
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteSnapshotType::getSnapshotId()
	 * @param AmazonEc2TypeDeleteSnapshotType DeleteSnapshotType
	 * @return AmazonEc2TypeDeleteSnapshotResponseType
	 */
	public function DeleteSnapshot(AmazonEc2TypeDeleteSnapshotType $_AmazonEc2TypeDeleteSnapshotType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSnapshot(array('snapshotId'=>$_AmazonEc2TypeDeleteSnapshotType->getSnapshotId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSpotDatafeedSubscription
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @param AmazonEc2TypeDeleteSpotDatafeedSubscriptionType DeleteSpotDatafeedSubscriptionType
	 * @return AmazonEc2TypeDeleteSpotDatafeedSubscriptionResponseType
	 */
	public function DeleteSpotDatafeedSubscription(AmazonEc2TypeDeleteSpotDatafeedSubscriptionType $_AmazonEc2TypeDeleteSpotDatafeedSubscriptionType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSpotDatafeedSubscription(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSubnet
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteSubnetType::getSubnetId()
	 * @param AmazonEc2TypeDeleteSubnetType DeleteSubnetType
	 * @return AmazonEc2TypeDeleteSubnetResponseType
	 */
	public function DeleteSubnet(AmazonEc2TypeDeleteSubnetType $_AmazonEc2TypeDeleteSubnetType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSubnet(array('subnetId'=>$_AmazonEc2TypeDeleteSubnetType->getSubnetId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteTags
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteTagsType::getResourcesSet()
	 * @uses AmazonEc2TypeDeleteTagsType::getTagSet()
	 * @param AmazonEc2TypeDeleteTagsType DeleteTagsType
	 * @return AmazonEc2TypeDeleteTagsResponseType
	 */
	public function DeleteTags(AmazonEc2TypeDeleteTagsType $_AmazonEc2TypeDeleteTagsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteTags(array('resourcesSet'=>$_AmazonEc2TypeDeleteTagsType->getResourcesSet(),'tagSet'=>$_AmazonEc2TypeDeleteTagsType->getTagSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteVolume
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteVolumeType::getVolumeId()
	 * @param AmazonEc2TypeDeleteVolumeType DeleteVolumeType
	 * @return AmazonEc2TypeDeleteVolumeResponseType
	 */
	public function DeleteVolume(AmazonEc2TypeDeleteVolumeType $_AmazonEc2TypeDeleteVolumeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteVolume(array('volumeId'=>$_AmazonEc2TypeDeleteVolumeType->getVolumeId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteVpc
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteVpcType::getVpcId()
	 * @param AmazonEc2TypeDeleteVpcType DeleteVpcType
	 * @return AmazonEc2TypeDeleteVpcResponseType
	 */
	public function DeleteVpc(AmazonEc2TypeDeleteVpcType $_AmazonEc2TypeDeleteVpcType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteVpc(array('vpcId'=>$_AmazonEc2TypeDeleteVpcType->getVpcId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteVpnConnection
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteVpnConnectionType::getVpnConnectionId()
	 * @param AmazonEc2TypeDeleteVpnConnectionType DeleteVpnConnectionType
	 * @return AmazonEc2TypeDeleteVpnConnectionResponseType
	 */
	public function DeleteVpnConnection(AmazonEc2TypeDeleteVpnConnectionType $_AmazonEc2TypeDeleteVpnConnectionType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteVpnConnection(array('vpnConnectionId'=>$_AmazonEc2TypeDeleteVpnConnectionType->getVpnConnectionId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteVpnGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeleteVpnGatewayType::getVpnGatewayId()
	 * @param AmazonEc2TypeDeleteVpnGatewayType DeleteVpnGatewayType
	 * @return AmazonEc2TypeDeleteVpnGatewayResponseType
	 */
	public function DeleteVpnGateway(AmazonEc2TypeDeleteVpnGatewayType $_AmazonEc2TypeDeleteVpnGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteVpnGateway(array('vpnGatewayId'=>$_AmazonEc2TypeDeleteVpnGatewayType->getVpnGatewayId())));
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
	 * @return AmazonEc2TypeDeleteVpnGatewayResponseType
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