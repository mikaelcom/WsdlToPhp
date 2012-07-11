<?php
/**
 * Class file for AmazonEc2ServiceAttach
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceAttach
 * @date 10/07/2012
 */
class AmazonEc2ServiceAttach extends AmazonEc2WsdlClass
{
	/**
	 * Method to call AttachInternetGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAttachInternetGatewayType::getInternetGatewayId()
	 * @uses AmazonEc2TypeAttachInternetGatewayType::getVpcId()
	 * @param AmazonEc2TypeAttachInternetGatewayType AttachInternetGatewayType
	 * @return AmazonEc2TypeAttachInternetGatewayResponseType
	 */
	public function AttachInternetGateway(AmazonEc2TypeAttachInternetGatewayType $_AmazonEc2TypeAttachInternetGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AttachInternetGateway(array('internetGatewayId'=>$_AmazonEc2TypeAttachInternetGatewayType->getInternetGatewayId(),'vpcId'=>$_AmazonEc2TypeAttachInternetGatewayType->getVpcId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AttachNetworkInterface
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAttachNetworkInterfaceType::getNetworkInterfaceId()
	 * @uses AmazonEc2TypeAttachNetworkInterfaceType::getInstanceId()
	 * @uses AmazonEc2TypeAttachNetworkInterfaceType::getDeviceIndex()
	 * @param AmazonEc2TypeAttachNetworkInterfaceType AttachNetworkInterfaceType
	 * @return AmazonEc2TypeAttachNetworkInterfaceResponseType
	 */
	public function AttachNetworkInterface(AmazonEc2TypeAttachNetworkInterfaceType $_AmazonEc2TypeAttachNetworkInterfaceType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AttachNetworkInterface(array('networkInterfaceId'=>$_AmazonEc2TypeAttachNetworkInterfaceType->getNetworkInterfaceId(),'instanceId'=>$_AmazonEc2TypeAttachNetworkInterfaceType->getInstanceId(),'deviceIndex'=>$_AmazonEc2TypeAttachNetworkInterfaceType->getDeviceIndex())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AttachVolume
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAttachVolumeType::getVolumeId()
	 * @uses AmazonEc2TypeAttachVolumeType::getInstanceId()
	 * @uses AmazonEc2TypeAttachVolumeType::getDevice()
	 * @param AmazonEc2TypeAttachVolumeType AttachVolumeType
	 * @return AmazonEc2TypeAttachVolumeResponseType
	 */
	public function AttachVolume(AmazonEc2TypeAttachVolumeType $_AmazonEc2TypeAttachVolumeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AttachVolume(array('volumeId'=>$_AmazonEc2TypeAttachVolumeType->getVolumeId(),'instanceId'=>$_AmazonEc2TypeAttachVolumeType->getInstanceId(),'device'=>$_AmazonEc2TypeAttachVolumeType->getDevice())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AttachVpnGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAttachVpnGatewayType::getVpnGatewayId()
	 * @uses AmazonEc2TypeAttachVpnGatewayType::getVpcId()
	 * @param AmazonEc2TypeAttachVpnGatewayType AttachVpnGatewayType
	 * @return AmazonEc2TypeAttachVpnGatewayResponseType
	 */
	public function AttachVpnGateway(AmazonEc2TypeAttachVpnGatewayType $_AmazonEc2TypeAttachVpnGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AttachVpnGateway(array('vpnGatewayId'=>$_AmazonEc2TypeAttachVpnGatewayType->getVpnGatewayId(),'vpcId'=>$_AmazonEc2TypeAttachVpnGatewayType->getVpcId())));
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
	 * @return AmazonEc2TypeAttachVpnGatewayResponseType
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