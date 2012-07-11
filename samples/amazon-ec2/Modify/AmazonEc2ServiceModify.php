<?php
/**
 * Class file for AmazonEc2ServiceModify
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceModify
 * @date 10/07/2012
 */
class AmazonEc2ServiceModify extends AmazonEc2WsdlClass
{
	/**
	 * Method to call ModifyImageAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeModifyImageAttributeType::getImageId()
	 * @uses AmazonEc2TypeModifyImageAttributeType::getLaunchPermission()
	 * @uses AmazonEc2TypeModifyImageAttributeType::getProductCodes()
	 * @uses AmazonEc2TypeModifyImageAttributeType::getDescription()
	 * @param AmazonEc2TypeModifyImageAttributeType ModifyImageAttributeType
	 * @return AmazonEc2TypeModifyImageAttributeResponseType
	 */
	public function ModifyImageAttribute(AmazonEc2TypeModifyImageAttributeType $_AmazonEc2TypeModifyImageAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ModifyImageAttribute(array('imageId'=>$_AmazonEc2TypeModifyImageAttributeType->getImageId(),'launchPermission'=>$_AmazonEc2TypeModifyImageAttributeType->getLaunchPermission(),'productCodes'=>$_AmazonEc2TypeModifyImageAttributeType->getProductCodes(),'description'=>$_AmazonEc2TypeModifyImageAttributeType->getDescription())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ModifyInstanceAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getInstanceId()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getInstanceType()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getKernel()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getRamdisk()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getUserData()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getDisableApiTermination()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getInstanceInitiatedShutdownBehavior()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getBlockDeviceMapping()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getSourceDestCheck()
	 * @uses AmazonEc2TypeModifyInstanceAttributeType::getGroupSet()
	 * @param AmazonEc2TypeModifyInstanceAttributeType ModifyInstanceAttributeType
	 * @return AmazonEc2TypeModifyInstanceAttributeResponseType
	 */
	public function ModifyInstanceAttribute(AmazonEc2TypeModifyInstanceAttributeType $_AmazonEc2TypeModifyInstanceAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ModifyInstanceAttribute(array('instanceId'=>$_AmazonEc2TypeModifyInstanceAttributeType->getInstanceId(),'instanceType'=>$_AmazonEc2TypeModifyInstanceAttributeType->getInstanceType(),'kernel'=>$_AmazonEc2TypeModifyInstanceAttributeType->getKernel(),'ramdisk'=>$_AmazonEc2TypeModifyInstanceAttributeType->getRamdisk(),'userData'=>$_AmazonEc2TypeModifyInstanceAttributeType->getUserData(),'disableApiTermination'=>$_AmazonEc2TypeModifyInstanceAttributeType->getDisableApiTermination(),'instanceInitiatedShutdownBehavior'=>$_AmazonEc2TypeModifyInstanceAttributeType->getInstanceInitiatedShutdownBehavior(),'blockDeviceMapping'=>$_AmazonEc2TypeModifyInstanceAttributeType->getBlockDeviceMapping(),'sourceDestCheck'=>$_AmazonEc2TypeModifyInstanceAttributeType->getSourceDestCheck(),'groupSet'=>$_AmazonEc2TypeModifyInstanceAttributeType->getGroupSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ModifyNetworkInterfaceAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeModifyNetworkInterfaceAttributeType::getNetworkInterfaceId()
	 * @uses AmazonEc2TypeModifyNetworkInterfaceAttributeType::getDescription()
	 * @uses AmazonEc2TypeModifyNetworkInterfaceAttributeType::getSourceDestCheck()
	 * @uses AmazonEc2TypeModifyNetworkInterfaceAttributeType::getGroupSet()
	 * @uses AmazonEc2TypeModifyNetworkInterfaceAttributeType::getAttachment()
	 * @param AmazonEc2TypeModifyNetworkInterfaceAttributeType ModifyNetworkInterfaceAttributeType
	 * @return AmazonEc2TypeModifyNetworkInterfaceAttributeResponseType
	 */
	public function ModifyNetworkInterfaceAttribute(AmazonEc2TypeModifyNetworkInterfaceAttributeType $_AmazonEc2TypeModifyNetworkInterfaceAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ModifyNetworkInterfaceAttribute(array('networkInterfaceId'=>$_AmazonEc2TypeModifyNetworkInterfaceAttributeType->getNetworkInterfaceId(),'description'=>$_AmazonEc2TypeModifyNetworkInterfaceAttributeType->getDescription(),'sourceDestCheck'=>$_AmazonEc2TypeModifyNetworkInterfaceAttributeType->getSourceDestCheck(),'groupSet'=>$_AmazonEc2TypeModifyNetworkInterfaceAttributeType->getGroupSet(),'attachment'=>$_AmazonEc2TypeModifyNetworkInterfaceAttributeType->getAttachment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ModifySnapshotAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeModifySnapshotAttributeType::getSnapshotId()
	 * @uses AmazonEc2TypeModifySnapshotAttributeType::getCreateVolumePermission()
	 * @param AmazonEc2TypeModifySnapshotAttributeType ModifySnapshotAttributeType
	 * @return AmazonEc2TypeModifySnapshotAttributeResponseType
	 */
	public function ModifySnapshotAttribute(AmazonEc2TypeModifySnapshotAttributeType $_AmazonEc2TypeModifySnapshotAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ModifySnapshotAttribute(array('snapshotId'=>$_AmazonEc2TypeModifySnapshotAttributeType->getSnapshotId(),'createVolumePermission'=>$_AmazonEc2TypeModifySnapshotAttributeType->getCreateVolumePermission())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ModifyVolumeAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeModifyVolumeAttributeType::getVolumeId()
	 * @uses AmazonEc2TypeModifyVolumeAttributeType::getAutoEnableIO()
	 * @param AmazonEc2TypeModifyVolumeAttributeType ModifyVolumeAttributeType
	 * @return AmazonEc2TypeModifyVolumeAttributeResponseType
	 */
	public function ModifyVolumeAttribute(AmazonEc2TypeModifyVolumeAttributeType $_AmazonEc2TypeModifyVolumeAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ModifyVolumeAttribute(array('volumeId'=>$_AmazonEc2TypeModifyVolumeAttributeType->getVolumeId(),'autoEnableIO'=>$_AmazonEc2TypeModifyVolumeAttributeType->getAutoEnableIO())));
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
	 * @return AmazonEc2TypeModifyVolumeAttributeResponseType
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