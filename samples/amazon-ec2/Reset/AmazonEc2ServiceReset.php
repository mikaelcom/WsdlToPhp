<?php
/**
 * Class file for AmazonEc2ServiceReset
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceReset
 * @date 10/07/2012
 */
class AmazonEc2ServiceReset extends AmazonEc2WsdlClass
{
	/**
	 * Method to call ResetImageAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeResetImageAttributeType::getImageId()
	 * @uses AmazonEc2TypeResetImageAttributeType::getLaunchPermission()
	 * @param AmazonEc2TypeResetImageAttributeType ResetImageAttributeType
	 * @return AmazonEc2TypeResetImageAttributeResponseType
	 */
	public function ResetImageAttribute(AmazonEc2TypeResetImageAttributeType $_AmazonEc2TypeResetImageAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ResetImageAttribute(array('imageId'=>$_AmazonEc2TypeResetImageAttributeType->getImageId(),'launchPermission'=>$_AmazonEc2TypeResetImageAttributeType->getLaunchPermission())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ResetInstanceAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeResetInstanceAttributeType::getInstanceId()
	 * @uses AmazonEc2TypeResetInstanceAttributeType::getKernel()
	 * @uses AmazonEc2TypeResetInstanceAttributeType::getRamdisk()
	 * @uses AmazonEc2TypeResetInstanceAttributeType::getSourceDestCheck()
	 * @param AmazonEc2TypeResetInstanceAttributeType ResetInstanceAttributeType
	 * @return AmazonEc2TypeResetInstanceAttributeResponseType
	 */
	public function ResetInstanceAttribute(AmazonEc2TypeResetInstanceAttributeType $_AmazonEc2TypeResetInstanceAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ResetInstanceAttribute(array('instanceId'=>$_AmazonEc2TypeResetInstanceAttributeType->getInstanceId(),'kernel'=>$_AmazonEc2TypeResetInstanceAttributeType->getKernel(),'ramdisk'=>$_AmazonEc2TypeResetInstanceAttributeType->getRamdisk(),'sourceDestCheck'=>$_AmazonEc2TypeResetInstanceAttributeType->getSourceDestCheck())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ResetNetworkInterfaceAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeResetNetworkInterfaceAttributeType::getNetworkInterfaceId()
	 * @uses AmazonEc2TypeResetNetworkInterfaceAttributeType::getSourceDestCheck()
	 * @param AmazonEc2TypeResetNetworkInterfaceAttributeType ResetNetworkInterfaceAttributeType
	 * @return AmazonEc2TypeResetNetworkInterfaceAttributeResponseType
	 */
	public function ResetNetworkInterfaceAttribute(AmazonEc2TypeResetNetworkInterfaceAttributeType $_AmazonEc2TypeResetNetworkInterfaceAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ResetNetworkInterfaceAttribute(array('networkInterfaceId'=>$_AmazonEc2TypeResetNetworkInterfaceAttributeType->getNetworkInterfaceId(),'sourceDestCheck'=>$_AmazonEc2TypeResetNetworkInterfaceAttributeType->getSourceDestCheck())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ResetSnapshotAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeResetSnapshotAttributeType::getSnapshotId()
	 * @uses AmazonEc2TypeResetSnapshotAttributeType::getCreateVolumePermission()
	 * @param AmazonEc2TypeResetSnapshotAttributeType ResetSnapshotAttributeType
	 * @return AmazonEc2TypeResetSnapshotAttributeResponseType
	 */
	public function ResetSnapshotAttribute(AmazonEc2TypeResetSnapshotAttributeType $_AmazonEc2TypeResetSnapshotAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ResetSnapshotAttribute(array('snapshotId'=>$_AmazonEc2TypeResetSnapshotAttributeType->getSnapshotId(),'createVolumePermission'=>$_AmazonEc2TypeResetSnapshotAttributeType->getCreateVolumePermission())));
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
	 * @return AmazonEc2TypeResetSnapshotAttributeResponseType
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