<?php
/**
 * Class file for AmazonEc2ServiceDetach
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceDetach
 * @date 10/07/2012
 */
class AmazonEc2ServiceDetach extends AmazonEc2WsdlClass
{
	/**
	 * Method to call DetachInternetGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDetachInternetGatewayType::getInternetGatewayId()
	 * @uses AmazonEc2TypeDetachInternetGatewayType::getVpcId()
	 * @param AmazonEc2TypeDetachInternetGatewayType DetachInternetGatewayType
	 * @return AmazonEc2TypeDetachInternetGatewayResponseType
	 */
	public function DetachInternetGateway(AmazonEc2TypeDetachInternetGatewayType $_AmazonEc2TypeDetachInternetGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DetachInternetGateway(array('internetGatewayId'=>$_AmazonEc2TypeDetachInternetGatewayType->getInternetGatewayId(),'vpcId'=>$_AmazonEc2TypeDetachInternetGatewayType->getVpcId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DetachNetworkInterface
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDetachNetworkInterfaceType::getAttachmentId()
	 * @uses AmazonEc2TypeDetachNetworkInterfaceType::getForce()
	 * @param AmazonEc2TypeDetachNetworkInterfaceType DetachNetworkInterfaceType
	 * @return AmazonEc2TypeDetachNetworkInterfaceResponseType
	 */
	public function DetachNetworkInterface(AmazonEc2TypeDetachNetworkInterfaceType $_AmazonEc2TypeDetachNetworkInterfaceType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DetachNetworkInterface(array('attachmentId'=>$_AmazonEc2TypeDetachNetworkInterfaceType->getAttachmentId(),'force'=>$_AmazonEc2TypeDetachNetworkInterfaceType->getForce())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DetachVolume
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDetachVolumeType::getVolumeId()
	 * @uses AmazonEc2TypeDetachVolumeType::getInstanceId()
	 * @uses AmazonEc2TypeDetachVolumeType::getDevice()
	 * @uses AmazonEc2TypeDetachVolumeType::getForce()
	 * @param AmazonEc2TypeDetachVolumeType DetachVolumeType
	 * @return AmazonEc2TypeDetachVolumeResponseType
	 */
	public function DetachVolume(AmazonEc2TypeDetachVolumeType $_AmazonEc2TypeDetachVolumeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DetachVolume(array('volumeId'=>$_AmazonEc2TypeDetachVolumeType->getVolumeId(),'instanceId'=>$_AmazonEc2TypeDetachVolumeType->getInstanceId(),'device'=>$_AmazonEc2TypeDetachVolumeType->getDevice(),'force'=>$_AmazonEc2TypeDetachVolumeType->getForce())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DetachVpnGateway
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDetachVpnGatewayType::getVpnGatewayId()
	 * @uses AmazonEc2TypeDetachVpnGatewayType::getVpcId()
	 * @param AmazonEc2TypeDetachVpnGatewayType DetachVpnGatewayType
	 * @return AmazonEc2TypeDetachVpnGatewayResponseType
	 */
	public function DetachVpnGateway(AmazonEc2TypeDetachVpnGatewayType $_AmazonEc2TypeDetachVpnGatewayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DetachVpnGateway(array('vpnGatewayId'=>$_AmazonEc2TypeDetachVpnGatewayType->getVpnGatewayId(),'vpcId'=>$_AmazonEc2TypeDetachVpnGatewayType->getVpcId())));
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
	 * @return AmazonEc2TypeDetachVpnGatewayResponseType
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