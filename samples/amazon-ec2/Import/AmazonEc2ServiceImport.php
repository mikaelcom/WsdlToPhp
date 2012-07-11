<?php
/**
 * Class file for AmazonEc2ServiceImport
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceImport
 * @date 10/07/2012
 */
class AmazonEc2ServiceImport extends AmazonEc2WsdlClass
{
	/**
	 * Method to call ImportInstance
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeImportInstanceType::getDescription()
	 * @uses AmazonEc2TypeImportInstanceType::getLaunchSpecification()
	 * @uses AmazonEc2TypeImportInstanceType::getDiskImageSet()
	 * @uses AmazonEc2TypeImportInstanceType::getKeepPartialImports()
	 * @uses AmazonEc2TypeImportInstanceType::getPlatform()
	 * @param AmazonEc2TypeImportInstanceType ImportInstanceType
	 * @return AmazonEc2TypeImportInstanceResponseType
	 */
	public function ImportInstance(AmazonEc2TypeImportInstanceType $_AmazonEc2TypeImportInstanceType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ImportInstance(array('description'=>$_AmazonEc2TypeImportInstanceType->getDescription(),'launchSpecification'=>$_AmazonEc2TypeImportInstanceType->getLaunchSpecification(),'diskImageSet'=>$_AmazonEc2TypeImportInstanceType->getDiskImageSet(),'keepPartialImports'=>$_AmazonEc2TypeImportInstanceType->getKeepPartialImports(),'platform'=>$_AmazonEc2TypeImportInstanceType->getPlatform())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ImportKeyPair
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeImportKeyPairType::getKeyName()
	 * @uses AmazonEc2TypeImportKeyPairType::getPublicKeyMaterial()
	 * @param AmazonEc2TypeImportKeyPairType ImportKeyPairType
	 * @return AmazonEc2TypeImportKeyPairResponseType
	 */
	public function ImportKeyPair(AmazonEc2TypeImportKeyPairType $_AmazonEc2TypeImportKeyPairType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ImportKeyPair(array('keyName'=>$_AmazonEc2TypeImportKeyPairType->getKeyName(),'publicKeyMaterial'=>$_AmazonEc2TypeImportKeyPairType->getPublicKeyMaterial())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ImportVolume
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeImportVolumeType::getAvailabilityZone()
	 * @uses AmazonEc2TypeImportVolumeType::getImage()
	 * @uses AmazonEc2TypeImportVolumeType::getDescription()
	 * @uses AmazonEc2TypeImportVolumeType::getVolume()
	 * @param AmazonEc2TypeImportVolumeType ImportVolumeType
	 * @return AmazonEc2TypeImportVolumeResponseType
	 */
	public function ImportVolume(AmazonEc2TypeImportVolumeType $_AmazonEc2TypeImportVolumeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ImportVolume(array('availabilityZone'=>$_AmazonEc2TypeImportVolumeType->getAvailabilityZone(),'image'=>$_AmazonEc2TypeImportVolumeType->getImage(),'description'=>$_AmazonEc2TypeImportVolumeType->getDescription(),'volume'=>$_AmazonEc2TypeImportVolumeType->getVolume())));
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
	 * @return AmazonEc2TypeImportVolumeResponseType
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