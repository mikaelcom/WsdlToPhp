<?php
/**
 * Class file for AmazonEc2ServiceReplace
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceReplace
 * @date 10/07/2012
 */
class AmazonEc2ServiceReplace extends AmazonEc2WsdlClass
{
	/**
	 * Method to call ReplaceNetworkAclAssociation
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeReplaceNetworkAclAssociationType::getAssociationId()
	 * @uses AmazonEc2TypeReplaceNetworkAclAssociationType::getNetworkAclId()
	 * @param AmazonEc2TypeReplaceNetworkAclAssociationType ReplaceNetworkAclAssociationType
	 * @return AmazonEc2TypeReplaceNetworkAclAssociationResponseType
	 */
	public function ReplaceNetworkAclAssociation(AmazonEc2TypeReplaceNetworkAclAssociationType $_AmazonEc2TypeReplaceNetworkAclAssociationType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReplaceNetworkAclAssociation(array('associationId'=>$_AmazonEc2TypeReplaceNetworkAclAssociationType->getAssociationId(),'networkAclId'=>$_AmazonEc2TypeReplaceNetworkAclAssociationType->getNetworkAclId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReplaceNetworkAclEntry
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeReplaceNetworkAclEntryType::getNetworkAclId()
	 * @uses AmazonEc2TypeReplaceNetworkAclEntryType::getRuleNumber()
	 * @uses AmazonEc2TypeReplaceNetworkAclEntryType::getProtocol()
	 * @uses AmazonEc2TypeReplaceNetworkAclEntryType::getRuleAction()
	 * @uses AmazonEc2TypeReplaceNetworkAclEntryType::getEgress()
	 * @uses AmazonEc2TypeReplaceNetworkAclEntryType::getCidrBlock()
	 * @uses AmazonEc2TypeReplaceNetworkAclEntryType::getIcmpTypeCode()
	 * @uses AmazonEc2TypeReplaceNetworkAclEntryType::getPortRange()
	 * @param AmazonEc2TypeReplaceNetworkAclEntryType ReplaceNetworkAclEntryType
	 * @return AmazonEc2TypeReplaceNetworkAclEntryResponseType
	 */
	public function ReplaceNetworkAclEntry(AmazonEc2TypeReplaceNetworkAclEntryType $_AmazonEc2TypeReplaceNetworkAclEntryType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReplaceNetworkAclEntry(array('networkAclId'=>$_AmazonEc2TypeReplaceNetworkAclEntryType->getNetworkAclId(),'ruleNumber'=>$_AmazonEc2TypeReplaceNetworkAclEntryType->getRuleNumber(),'protocol'=>$_AmazonEc2TypeReplaceNetworkAclEntryType->getProtocol(),'ruleAction'=>$_AmazonEc2TypeReplaceNetworkAclEntryType->getRuleAction(),'egress'=>$_AmazonEc2TypeReplaceNetworkAclEntryType->getEgress(),'cidrBlock'=>$_AmazonEc2TypeReplaceNetworkAclEntryType->getCidrBlock(),'icmpTypeCode'=>$_AmazonEc2TypeReplaceNetworkAclEntryType->getIcmpTypeCode(),'portRange'=>$_AmazonEc2TypeReplaceNetworkAclEntryType->getPortRange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReplaceRoute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeReplaceRouteType::getRouteTableId()
	 * @uses AmazonEc2TypeReplaceRouteType::getDestinationCidrBlock()
	 * @uses AmazonEc2TypeReplaceRouteType::getGatewayId()
	 * @uses AmazonEc2TypeReplaceRouteType::getInstanceId()
	 * @uses AmazonEc2TypeReplaceRouteType::getNetworkInterfaceId()
	 * @param AmazonEc2TypeReplaceRouteType ReplaceRouteType
	 * @return AmazonEc2TypeReplaceRouteResponseType
	 */
	public function ReplaceRoute(AmazonEc2TypeReplaceRouteType $_AmazonEc2TypeReplaceRouteType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReplaceRoute(array('routeTableId'=>$_AmazonEc2TypeReplaceRouteType->getRouteTableId(),'destinationCidrBlock'=>$_AmazonEc2TypeReplaceRouteType->getDestinationCidrBlock(),'gatewayId'=>$_AmazonEc2TypeReplaceRouteType->getGatewayId(),'instanceId'=>$_AmazonEc2TypeReplaceRouteType->getInstanceId(),'networkInterfaceId'=>$_AmazonEc2TypeReplaceRouteType->getNetworkInterfaceId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ReplaceRouteTableAssociation
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeReplaceRouteTableAssociationType::getAssociationId()
	 * @uses AmazonEc2TypeReplaceRouteTableAssociationType::getRouteTableId()
	 * @param AmazonEc2TypeReplaceRouteTableAssociationType ReplaceRouteTableAssociationType
	 * @return AmazonEc2TypeReplaceRouteTableAssociationResponseType
	 */
	public function ReplaceRouteTableAssociation(AmazonEc2TypeReplaceRouteTableAssociationType $_AmazonEc2TypeReplaceRouteTableAssociationType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReplaceRouteTableAssociation(array('associationId'=>$_AmazonEc2TypeReplaceRouteTableAssociationType->getAssociationId(),'routeTableId'=>$_AmazonEc2TypeReplaceRouteTableAssociationType->getRouteTableId())));
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
	 * @return AmazonEc2TypeReplaceRouteTableAssociationResponseType
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