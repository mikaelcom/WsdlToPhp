<?php
/**
 * Class file for AmazonEc2ServiceEnable
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceEnable
 * @date 10/07/2012
 */
class AmazonEc2ServiceEnable extends AmazonEc2WsdlClass
{
	/**
	 * Method to call EnableVolumeIO
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeEnableVolumeIOType::getVolumeId()
	 * @param AmazonEc2TypeEnableVolumeIOType EnableVolumeIOType
	 * @return AmazonEc2TypeEnableVolumeIOResponseType
	 */
	public function EnableVolumeIO(AmazonEc2TypeEnableVolumeIOType $_AmazonEc2TypeEnableVolumeIOType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EnableVolumeIO(array('volumeId'=>$_AmazonEc2TypeEnableVolumeIOType->getVolumeId())));
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
	 * @return AmazonEc2TypeEnableVolumeIOResponseType
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