<?php
/**
 * Class file for AmazonEc2ServiceRun
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceRun
 * @date 10/07/2012
 */
class AmazonEc2ServiceRun extends AmazonEc2WsdlClass
{
	/**
	 * Method to call RunInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeRunInstancesType::getImageId()
	 * @uses AmazonEc2TypeRunInstancesType::getMinCount()
	 * @uses AmazonEc2TypeRunInstancesType::getMaxCount()
	 * @uses AmazonEc2TypeRunInstancesType::getKeyName()
	 * @uses AmazonEc2TypeRunInstancesType::getGroupSet()
	 * @uses AmazonEc2TypeRunInstancesType::getAdditionalInfo()
	 * @uses AmazonEc2TypeRunInstancesType::getUserData()
	 * @uses AmazonEc2TypeRunInstancesType::getAddressingType()
	 * @uses AmazonEc2TypeRunInstancesType::getInstanceType()
	 * @uses AmazonEc2TypeRunInstancesType::getPlacement()
	 * @uses AmazonEc2TypeRunInstancesType::getKernelId()
	 * @uses AmazonEc2TypeRunInstancesType::getRamdiskId()
	 * @uses AmazonEc2TypeRunInstancesType::getBlockDeviceMapping()
	 * @uses AmazonEc2TypeRunInstancesType::getMonitoring()
	 * @uses AmazonEc2TypeRunInstancesType::getSubnetId()
	 * @uses AmazonEc2TypeRunInstancesType::getDisableApiTermination()
	 * @uses AmazonEc2TypeRunInstancesType::getInstanceInitiatedShutdownBehavior()
	 * @uses AmazonEc2TypeRunInstancesType::getLicense()
	 * @uses AmazonEc2TypeRunInstancesType::getPrivateIpAddress()
	 * @uses AmazonEc2TypeRunInstancesType::getClientToken()
	 * @uses AmazonEc2TypeRunInstancesType::getNetworkInterfaceSet()
	 * @uses AmazonEc2TypeRunInstancesType::getIamInstanceProfile()
	 * @param AmazonEc2TypeRunInstancesType RunInstancesType
	 * @return AmazonEc2TypeRunInstancesResponseType
	 */
	public function RunInstances(AmazonEc2TypeRunInstancesType $_AmazonEc2TypeRunInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RunInstances(array('imageId'=>$_AmazonEc2TypeRunInstancesType->getImageId(),'minCount'=>$_AmazonEc2TypeRunInstancesType->getMinCount(),'maxCount'=>$_AmazonEc2TypeRunInstancesType->getMaxCount(),'keyName'=>$_AmazonEc2TypeRunInstancesType->getKeyName(),'groupSet'=>$_AmazonEc2TypeRunInstancesType->getGroupSet(),'additionalInfo'=>$_AmazonEc2TypeRunInstancesType->getAdditionalInfo(),'userData'=>$_AmazonEc2TypeRunInstancesType->getUserData(),'addressingType'=>$_AmazonEc2TypeRunInstancesType->getAddressingType(),'instanceType'=>$_AmazonEc2TypeRunInstancesType->getInstanceType(),'placement'=>$_AmazonEc2TypeRunInstancesType->getPlacement(),'kernelId'=>$_AmazonEc2TypeRunInstancesType->getKernelId(),'ramdiskId'=>$_AmazonEc2TypeRunInstancesType->getRamdiskId(),'blockDeviceMapping'=>$_AmazonEc2TypeRunInstancesType->getBlockDeviceMapping(),'monitoring'=>$_AmazonEc2TypeRunInstancesType->getMonitoring(),'subnetId'=>$_AmazonEc2TypeRunInstancesType->getSubnetId(),'disableApiTermination'=>$_AmazonEc2TypeRunInstancesType->getDisableApiTermination(),'instanceInitiatedShutdownBehavior'=>$_AmazonEc2TypeRunInstancesType->getInstanceInitiatedShutdownBehavior(),'license'=>$_AmazonEc2TypeRunInstancesType->getLicense(),'privateIpAddress'=>$_AmazonEc2TypeRunInstancesType->getPrivateIpAddress(),'clientToken'=>$_AmazonEc2TypeRunInstancesType->getClientToken(),'networkInterfaceSet'=>$_AmazonEc2TypeRunInstancesType->getNetworkInterfaceSet(),'iamInstanceProfile'=>$_AmazonEc2TypeRunInstancesType->getIamInstanceProfile())));
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
	 * @return AmazonEc2TypeRunInstancesResponseType
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