<?php
/**
 * Class file for AmazonEc2ServiceDeregister
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceDeregister
 * @date 10/07/2012
 */
class AmazonEc2ServiceDeregister extends AmazonEc2WsdlClass
{
	/**
	 * Method to call DeregisterImage
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDeregisterImageType::getImageId()
	 * @param AmazonEc2TypeDeregisterImageType DeregisterImageType
	 * @return AmazonEc2TypeDeregisterImageResponseType
	 */
	public function DeregisterImage(AmazonEc2TypeDeregisterImageType $_AmazonEc2TypeDeregisterImageType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeregisterImage(array('imageId'=>$_AmazonEc2TypeDeregisterImageType->getImageId())));
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
	 * @return AmazonEc2TypeDeregisterImageResponseType
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