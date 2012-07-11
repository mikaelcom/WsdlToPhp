<?php
/**
 * Class file for AmazonEc2ServiceCreate
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceCreate
 * @date 10/07/2012
 */
class AmazonEc2ServiceCreate extends AmazonEc2WsdlClass
{
	/**
	 * Method to call CreateCustomerGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateCustomerGatewayType::getType()
	 * @uses AmazonEc2TypeCreateCustomerGatewayType::getIpAddress()
	 * @uses AmazonEc2TypeCreateCustomerGatewayType::getBgpAsn()
	 * @param AmazonEc2TypeCreateCustomerGatewayType CreateCustomerGatewayType
	 * @return AmazonEc2TypeCreateCustomerGatewayResponseType
	 */
	public function CreateCustomerGateway(AmazonEc2TypeCreateCustomerGatewayType $_AmazonEc2TypeCreateCustomerGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateCustomerGateway(array('type'=>$_AmazonEc2TypeCreateCustomerGatewayType->getType(),'ipAddress'=>$_AmazonEc2TypeCreateCustomerGatewayType->getIpAddress(),'bgpAsn'=>$_AmazonEc2TypeCreateCustomerGatewayType->getBgpAsn())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateDhcpOptions
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateDhcpOptionsType::getDhcpConfigurationSet()
	 * @param AmazonEc2TypeCreateDhcpOptionsType CreateDhcpOptionsType
	 * @return AmazonEc2TypeCreateDhcpOptionsResponseType
	 */
	public function CreateDhcpOptions(AmazonEc2TypeCreateDhcpOptionsType $_AmazonEc2TypeCreateDhcpOptionsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateDhcpOptions(array('dhcpConfigurationSet'=>$_AmazonEc2TypeCreateDhcpOptionsType->getDhcpConfigurationSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateImage
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateImageType::getInstanceId()
	 * @uses AmazonEc2TypeCreateImageType::getName()
	 * @uses AmazonEc2TypeCreateImageType::getDescription()
	 * @uses AmazonEc2TypeCreateImageType::getNoReboot()
	 * @param AmazonEc2TypeCreateImageType CreateImageType
	 * @return AmazonEc2TypeCreateImageResponseType
	 */
	public function CreateImage(AmazonEc2TypeCreateImageType $_AmazonEc2TypeCreateImageType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateImage(array('instanceId'=>$_AmazonEc2TypeCreateImageType->getInstanceId(),'name'=>$_AmazonEc2TypeCreateImageType->getName(),'description'=>$_AmazonEc2TypeCreateImageType->getDescription(),'noReboot'=>$_AmazonEc2TypeCreateImageType->getNoReboot())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateInstanceExportTask
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateInstanceExportTaskType::getDescription()
	 * @uses AmazonEc2TypeCreateInstanceExportTaskType::getInstanceId()
	 * @uses AmazonEc2TypeCreateInstanceExportTaskType::getTargetEnvironment()
	 * @uses AmazonEc2TypeCreateInstanceExportTaskType::getExportToS3()
	 * @param AmazonEc2TypeCreateInstanceExportTaskType CreateInstanceExportTaskType
	 * @return AmazonEc2TypeCreateInstanceExportTaskResponseType
	 */
	public function CreateInstanceExportTask(AmazonEc2TypeCreateInstanceExportTaskType $_AmazonEc2TypeCreateInstanceExportTaskType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateInstanceExportTask(array('description'=>$_AmazonEc2TypeCreateInstanceExportTaskType->getDescription(),'instanceId'=>$_AmazonEc2TypeCreateInstanceExportTaskType->getInstanceId(),'targetEnvironment'=>$_AmazonEc2TypeCreateInstanceExportTaskType->getTargetEnvironment(),'exportToS3'=>$_AmazonEc2TypeCreateInstanceExportTaskType->getExportToS3())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateInternetGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @param AmazonEc2TypeCreateInternetGatewayType CreateInternetGatewayType
	 * @return AmazonEc2TypeCreateInternetGatewayResponseType
	 */
	public function CreateInternetGateway(AmazonEc2TypeCreateInternetGatewayType $_AmazonEc2TypeCreateInternetGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateInternetGateway(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateKeyPair
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateKeyPairType::getKeyName()
	 * @param AmazonEc2TypeCreateKeyPairType CreateKeyPairType
	 * @return AmazonEc2TypeCreateKeyPairResponseType
	 */
	public function CreateKeyPair(AmazonEc2TypeCreateKeyPairType $_AmazonEc2TypeCreateKeyPairType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateKeyPair(array('keyName'=>$_AmazonEc2TypeCreateKeyPairType->getKeyName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateNetworkAcl
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateNetworkAclType::getVpcId()
	 * @param AmazonEc2TypeCreateNetworkAclType CreateNetworkAclType
	 * @return AmazonEc2TypeCreateNetworkAclResponseType
	 */
	public function CreateNetworkAcl(AmazonEc2TypeCreateNetworkAclType $_AmazonEc2TypeCreateNetworkAclType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateNetworkAcl(array('vpcId'=>$_AmazonEc2TypeCreateNetworkAclType->getVpcId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateNetworkAclEntry
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateNetworkAclEntryType::getNetworkAclId()
	 * @uses AmazonEc2TypeCreateNetworkAclEntryType::getRuleNumber()
	 * @uses AmazonEc2TypeCreateNetworkAclEntryType::getProtocol()
	 * @uses AmazonEc2TypeCreateNetworkAclEntryType::getRuleAction()
	 * @uses AmazonEc2TypeCreateNetworkAclEntryType::getEgress()
	 * @uses AmazonEc2TypeCreateNetworkAclEntryType::getCidrBlock()
	 * @uses AmazonEc2TypeCreateNetworkAclEntryType::getIcmpTypeCode()
	 * @uses AmazonEc2TypeCreateNetworkAclEntryType::getPortRange()
	 * @param AmazonEc2TypeCreateNetworkAclEntryType CreateNetworkAclEntryType
	 * @return AmazonEc2TypeCreateNetworkAclEntryResponseType
	 */
	public function CreateNetworkAclEntry(AmazonEc2TypeCreateNetworkAclEntryType $_AmazonEc2TypeCreateNetworkAclEntryType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateNetworkAclEntry(array('networkAclId'=>$_AmazonEc2TypeCreateNetworkAclEntryType->getNetworkAclId(),'ruleNumber'=>$_AmazonEc2TypeCreateNetworkAclEntryType->getRuleNumber(),'protocol'=>$_AmazonEc2TypeCreateNetworkAclEntryType->getProtocol(),'ruleAction'=>$_AmazonEc2TypeCreateNetworkAclEntryType->getRuleAction(),'egress'=>$_AmazonEc2TypeCreateNetworkAclEntryType->getEgress(),'cidrBlock'=>$_AmazonEc2TypeCreateNetworkAclEntryType->getCidrBlock(),'icmpTypeCode'=>$_AmazonEc2TypeCreateNetworkAclEntryType->getIcmpTypeCode(),'portRange'=>$_AmazonEc2TypeCreateNetworkAclEntryType->getPortRange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateNetworkInterface
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateNetworkInterfaceType::getSubnetId()
	 * @uses AmazonEc2TypeCreateNetworkInterfaceType::getDescription()
	 * @uses AmazonEc2TypeCreateNetworkInterfaceType::getPrivateIpAddress()
	 * @uses AmazonEc2TypeCreateNetworkInterfaceType::getGroupSet()
	 * @uses AmazonEc2TypeCreateNetworkInterfaceType::getPrivateIpAddressesSet()
	 * @uses AmazonEc2TypeCreateNetworkInterfaceType::getSecondaryPrivateIpAddressCount()
	 * @param AmazonEc2TypeCreateNetworkInterfaceType CreateNetworkInterfaceType
	 * @return AmazonEc2TypeCreateNetworkInterfaceResponseType
	 */
	public function CreateNetworkInterface(AmazonEc2TypeCreateNetworkInterfaceType $_AmazonEc2TypeCreateNetworkInterfaceType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateNetworkInterface(array('subnetId'=>$_AmazonEc2TypeCreateNetworkInterfaceType->getSubnetId(),'description'=>$_AmazonEc2TypeCreateNetworkInterfaceType->getDescription(),'privateIpAddress'=>$_AmazonEc2TypeCreateNetworkInterfaceType->getPrivateIpAddress(),'groupSet'=>$_AmazonEc2TypeCreateNetworkInterfaceType->getGroupSet(),'privateIpAddressesSet'=>$_AmazonEc2TypeCreateNetworkInterfaceType->getPrivateIpAddressesSet(),'secondaryPrivateIpAddressCount'=>$_AmazonEc2TypeCreateNetworkInterfaceType->getSecondaryPrivateIpAddressCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreatePlacementGroup
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreatePlacementGroupType::getGroupName()
	 * @uses AmazonEc2TypeCreatePlacementGroupType::getStrategy()
	 * @param AmazonEc2TypeCreatePlacementGroupType CreatePlacementGroupType
	 * @return AmazonEc2TypeCreatePlacementGroupResponseType
	 */
	public function CreatePlacementGroup(AmazonEc2TypeCreatePlacementGroupType $_AmazonEc2TypeCreatePlacementGroupType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreatePlacementGroup(array('groupName'=>$_AmazonEc2TypeCreatePlacementGroupType->getGroupName(),'strategy'=>$_AmazonEc2TypeCreatePlacementGroupType->getStrategy())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateRoute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateRouteType::getRouteTableId()
	 * @uses AmazonEc2TypeCreateRouteType::getDestinationCidrBlock()
	 * @uses AmazonEc2TypeCreateRouteType::getGatewayId()
	 * @uses AmazonEc2TypeCreateRouteType::getInstanceId()
	 * @uses AmazonEc2TypeCreateRouteType::getNetworkInterfaceId()
	 * @param AmazonEc2TypeCreateRouteType CreateRouteType
	 * @return AmazonEc2TypeCreateRouteResponseType
	 */
	public function CreateRoute(AmazonEc2TypeCreateRouteType $_AmazonEc2TypeCreateRouteType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateRoute(array('routeTableId'=>$_AmazonEc2TypeCreateRouteType->getRouteTableId(),'destinationCidrBlock'=>$_AmazonEc2TypeCreateRouteType->getDestinationCidrBlock(),'gatewayId'=>$_AmazonEc2TypeCreateRouteType->getGatewayId(),'instanceId'=>$_AmazonEc2TypeCreateRouteType->getInstanceId(),'networkInterfaceId'=>$_AmazonEc2TypeCreateRouteType->getNetworkInterfaceId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateRouteTable
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateRouteTableType::getVpcId()
	 * @param AmazonEc2TypeCreateRouteTableType CreateRouteTableType
	 * @return AmazonEc2TypeCreateRouteTableResponseType
	 */
	public function CreateRouteTable(AmazonEc2TypeCreateRouteTableType $_AmazonEc2TypeCreateRouteTableType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateRouteTable(array('vpcId'=>$_AmazonEc2TypeCreateRouteTableType->getVpcId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateSecurityGroup
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateSecurityGroupType::getGroupName()
	 * @uses AmazonEc2TypeCreateSecurityGroupType::getGroupDescription()
	 * @uses AmazonEc2TypeCreateSecurityGroupType::getVpcId()
	 * @param AmazonEc2TypeCreateSecurityGroupType CreateSecurityGroupType
	 * @return AmazonEc2TypeCreateSecurityGroupResponseType
	 */
	public function CreateSecurityGroup(AmazonEc2TypeCreateSecurityGroupType $_AmazonEc2TypeCreateSecurityGroupType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateSecurityGroup(array('groupName'=>$_AmazonEc2TypeCreateSecurityGroupType->getGroupName(),'groupDescription'=>$_AmazonEc2TypeCreateSecurityGroupType->getGroupDescription(),'vpcId'=>$_AmazonEc2TypeCreateSecurityGroupType->getVpcId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateSnapshot
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateSnapshotType::getVolumeId()
	 * @uses AmazonEc2TypeCreateSnapshotType::getDescription()
	 * @param AmazonEc2TypeCreateSnapshotType CreateSnapshotType
	 * @return AmazonEc2TypeCreateSnapshotResponseType
	 */
	public function CreateSnapshot(AmazonEc2TypeCreateSnapshotType $_AmazonEc2TypeCreateSnapshotType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateSnapshot(array('volumeId'=>$_AmazonEc2TypeCreateSnapshotType->getVolumeId(),'description'=>$_AmazonEc2TypeCreateSnapshotType->getDescription())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateSpotDatafeedSubscription
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateSpotDatafeedSubscriptionType::getBucket()
	 * @uses AmazonEc2TypeCreateSpotDatafeedSubscriptionType::getPrefix()
	 * @param AmazonEc2TypeCreateSpotDatafeedSubscriptionType CreateSpotDatafeedSubscriptionType
	 * @return AmazonEc2TypeCreateSpotDatafeedSubscriptionResponseType
	 */
	public function CreateSpotDatafeedSubscription(AmazonEc2TypeCreateSpotDatafeedSubscriptionType $_AmazonEc2TypeCreateSpotDatafeedSubscriptionType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateSpotDatafeedSubscription(array('bucket'=>$_AmazonEc2TypeCreateSpotDatafeedSubscriptionType->getBucket(),'prefix'=>$_AmazonEc2TypeCreateSpotDatafeedSubscriptionType->getPrefix())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateSubnet
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateSubnetType::getVpcId()
	 * @uses AmazonEc2TypeCreateSubnetType::getCidrBlock()
	 * @uses AmazonEc2TypeCreateSubnetType::getAvailabilityZone()
	 * @param AmazonEc2TypeCreateSubnetType CreateSubnetType
	 * @return AmazonEc2TypeCreateSubnetResponseType
	 */
	public function CreateSubnet(AmazonEc2TypeCreateSubnetType $_AmazonEc2TypeCreateSubnetType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateSubnet(array('vpcId'=>$_AmazonEc2TypeCreateSubnetType->getVpcId(),'cidrBlock'=>$_AmazonEc2TypeCreateSubnetType->getCidrBlock(),'availabilityZone'=>$_AmazonEc2TypeCreateSubnetType->getAvailabilityZone())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateTags
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateTagsType::getResourcesSet()
	 * @uses AmazonEc2TypeCreateTagsType::getTagSet()
	 * @param AmazonEc2TypeCreateTagsType CreateTagsType
	 * @return AmazonEc2TypeCreateTagsResponseType
	 */
	public function CreateTags(AmazonEc2TypeCreateTagsType $_AmazonEc2TypeCreateTagsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateTags(array('resourcesSet'=>$_AmazonEc2TypeCreateTagsType->getResourcesSet(),'tagSet'=>$_AmazonEc2TypeCreateTagsType->getTagSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateVolume
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateVolumeType::getSize()
	 * @uses AmazonEc2TypeCreateVolumeType::getSnapshotId()
	 * @uses AmazonEc2TypeCreateVolumeType::getAvailabilityZone()
	 * @param AmazonEc2TypeCreateVolumeType CreateVolumeType
	 * @return AmazonEc2TypeCreateVolumeResponseType
	 */
	public function CreateVolume(AmazonEc2TypeCreateVolumeType $_AmazonEc2TypeCreateVolumeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateVolume(array('size'=>$_AmazonEc2TypeCreateVolumeType->getSize(),'snapshotId'=>$_AmazonEc2TypeCreateVolumeType->getSnapshotId(),'availabilityZone'=>$_AmazonEc2TypeCreateVolumeType->getAvailabilityZone())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateVpc
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateVpcType::getCidrBlock()
	 * @uses AmazonEc2TypeCreateVpcType::getInstanceTenancy()
	 * @param AmazonEc2TypeCreateVpcType CreateVpcType
	 * @return AmazonEc2TypeCreateVpcResponseType
	 */
	public function CreateVpc(AmazonEc2TypeCreateVpcType $_AmazonEc2TypeCreateVpcType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateVpc(array('cidrBlock'=>$_AmazonEc2TypeCreateVpcType->getCidrBlock(),'instanceTenancy'=>$_AmazonEc2TypeCreateVpcType->getInstanceTenancy())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateVpnConnection
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateVpnConnectionType::getType()
	 * @uses AmazonEc2TypeCreateVpnConnectionType::getCustomerGatewayId()
	 * @uses AmazonEc2TypeCreateVpnConnectionType::getVpnGatewayId()
	 * @param AmazonEc2TypeCreateVpnConnectionType CreateVpnConnectionType
	 * @return AmazonEc2TypeCreateVpnConnectionResponseType
	 */
	public function CreateVpnConnection(AmazonEc2TypeCreateVpnConnectionType $_AmazonEc2TypeCreateVpnConnectionType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateVpnConnection(array('type'=>$_AmazonEc2TypeCreateVpnConnectionType->getType(),'customerGatewayId'=>$_AmazonEc2TypeCreateVpnConnectionType->getCustomerGatewayId(),'vpnGatewayId'=>$_AmazonEc2TypeCreateVpnConnectionType->getVpnGatewayId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateVpnGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCreateVpnGatewayType::getType()
	 * @uses AmazonEc2TypeCreateVpnGatewayType::getAvailabilityZone()
	 * @param AmazonEc2TypeCreateVpnGatewayType CreateVpnGatewayType
	 * @return AmazonEc2TypeCreateVpnGatewayResponseType
	 */
	public function CreateVpnGateway(AmazonEc2TypeCreateVpnGatewayType $_AmazonEc2TypeCreateVpnGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateVpnGateway(array('type'=>$_AmazonEc2TypeCreateVpnGatewayType->getType(),'availabilityZone'=>$_AmazonEc2TypeCreateVpnGatewayType->getAvailabilityZone())));
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
	 * @return AmazonEc2TypeCreateVpnGatewayResponseType
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