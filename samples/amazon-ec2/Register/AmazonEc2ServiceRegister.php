<?php
/**
 * Class file for AmazonEc2ServiceRegister
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceRegister
 * @date 10/07/2012
 */
class AmazonEc2ServiceRegister extends AmazonEc2WsdlClass
{
	/**
	 * Method to call RegisterImage
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeRegisterImageType::getImageLocation()
	 * @uses AmazonEc2TypeRegisterImageType::getName()
	 * @uses AmazonEc2TypeRegisterImageType::getDescription()
	 * @uses AmazonEc2TypeRegisterImageType::getArchitecture()
	 * @uses AmazonEc2TypeRegisterImageType::getKernelId()
	 * @uses AmazonEc2TypeRegisterImageType::getRamdiskId()
	 * @uses AmazonEc2TypeRegisterImageType::getRootDeviceName()
	 * @uses AmazonEc2TypeRegisterImageType::getBlockDeviceMapping()
	 * @param AmazonEc2TypeRegisterImageType RegisterImageType
	 * @return AmazonEc2TypeRegisterImageResponseType
	 */
	public function RegisterImage(AmazonEc2TypeRegisterImageType $_AmazonEc2TypeRegisterImageType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RegisterImage(array('imageLocation'=>$_AmazonEc2TypeRegisterImageType->getImageLocation(),'name'=>$_AmazonEc2TypeRegisterImageType->getName(),'description'=>$_AmazonEc2TypeRegisterImageType->getDescription(),'architecture'=>$_AmazonEc2TypeRegisterImageType->getArchitecture(),'kernelId'=>$_AmazonEc2TypeRegisterImageType->getKernelId(),'ramdiskId'=>$_AmazonEc2TypeRegisterImageType->getRamdiskId(),'rootDeviceName'=>$_AmazonEc2TypeRegisterImageType->getRootDeviceName(),'blockDeviceMapping'=>$_AmazonEc2TypeRegisterImageType->getBlockDeviceMapping())));
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
	 * @return AmazonEc2TypeRegisterImageResponseType
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